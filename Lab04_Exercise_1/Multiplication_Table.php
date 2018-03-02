<?php
    echo "<table>";
    for($row=0; $row<=100; $row++)
    {
      echo "<tr>";
        for($mult=0; $mult<=100; $mult++)
        {
          $final= $mult*$row;

          if(($mult==0)&&($row==0))
          {
            echo "<td> </td>";
          }

          else if($mult==0)
          {
            echo"<td>$row</td>";
          }
          else if($row==0)
          {
            echo"<td>$mult</td>";
          }
          else
          {
            echo "<td>$final</td>";
          }
        }
      echo "</tr>";
    }

    echo"</table>";

?>
