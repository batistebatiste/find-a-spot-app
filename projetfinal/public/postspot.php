<?php

// configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TOD      
        // check if $_POST[freespots] is a non negative integer
        if(preg_match("/^\d+$/", $_POST["freespots"])!=true)
           {
             apologize("you did enter a negative number for free spots!");
           }
   
        //insert the position into "freeseats" table
        query("INSERT INTO freeseats (location, floor, seats,date) VALUES (?,?,?,?) ON DUPLICATE KEY UPDATE seats=seats+VALUES(seats)",$_POST["location"], $_POST["floor"], $_POST["freespots"], date("Y/m/d H:i"));
        

 
        
        //redirect (because you send no information) to portfolio
        redirect("/index.php");
    }
    
   else
    { 
        render("post_form.php", ["title" => "Post Form"]);
    }    
    
?>
