<?php

// configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $positions = [];
$values = query("SELECT * FROM freeseats WHERE location = ? ORDER BY date DESC ", $_POST["campus"]);

foreach ($values as $value)
{
    
        $positions[] = [
         
            "location"=>$value["location"],
            "floor" => $value["floor"],
            "seats" => $value["seats"],
            "date"  => $value["date"],
        ];
    
}


render("findspot_form.php", ["positions" => $positions,"title" => "Portfolio"]);

        
    }
    
   else
    { 
        render("lookspot_form.php", ["title" => "look Form"]);
    }    
    
?>
