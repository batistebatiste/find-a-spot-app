<br>

<table class="table table-striped">

    <thead>
        <tr>
            <th>Location</th>
            <th>Floor</th>
            <th>Seats</th>
            <th>Date-Time</th>
        </tr>
    </thead>

    <tbody>  
<?php
      foreach ($positions as $position)
   {
   print("<tr>");
   print("<td>{$position["location"]}</td>");
   print("<td>{$position["floor"]}</td>");
   print("<td>{$position["seats"]}</td>");  
   print("<td>{$position["date"]}</td>");    
   print("</tr>");
   }
 
 if(!array_filter($positions)) {
    echo '<strong><br><br><br>No free spots were posted</strong><br><br><br>';
}
  
?>
 
        </tbody>  
</table>

