<?php

$shipping = array(0 => "7-day", 5=> "3-day", 50 => "Overnight");

  $sword = $_POST["Sword"];
  $mech=$_POST["Mech"];
  $school=$_POST["School"];

  $sword_price = $sword*200;
  $mech_price = $mech*5000;
  $school_price = $school*100000;

  $total = $sword_price+$mech_price+$school_price;
//Welcoming Remark

echo "User: ".$_POST["username"]."<br> Password: ".$_POST["password"]."<br>";

echo "<p> Here is your receipt for your purchase. </p> <br>";

echo "<table>
      <tr><th></th><th>Quantity</th><th>Cost/Item</th><th>Total</th></tr>";

foreach($_POST as $key => $value)
{

    echo "<tr>";

    if($key == 'ship')
    {
      echo "<th>";

      foreach($shipping as $price => $option)
      {
        if($value == $price)
        {
          echo $option;
        }
      }

      echo "<td></td>";

      echo "<td>$".$value."</td><td>$".$value."</td>";
    }
    else if($key == 'username' || $key == 'password')
    {

    }


/*  echo "<th>Sword</th>";
  echo "<td>$sword</td>";
  echo "<td>$sword_price</td>";
  echo "<th>Mech</th>";
  echo "<td>$mech</td>";
  echo "<td>$mech_price</td>";
  echo "<th>School</th>";
  echo "<td>$school</td>";
  echo "<td>$school_price</td>";*/
else
{


    echo "<th>".$key."</th>";

    if($key == 'Sword[name]')
    {
      echo "<td>$sword</td>";
      echo "<td>$200</td>";
      echo "<td>$sword_price</td>";
    }
    else if($key == 'Mech[name]')
    {
      echo "<td>$mech</td>";
      echo "<td>$5000</td>";
      echo "<td>$mech_price</td>";
    }
    else if($key == 'School[name]')
    {
      echo "<td>$school</td>";
      echo "<td>$100000</td>";
      echo "<td>$school_price</td>";
    }
}
/*
      foreach($value as $read => $quantity)
      {
        if($read != "amount")
        {
          echo "<td>".$quantity."</td>";
          $subtotal= $subtotal+$quantity;
        }
        else
        {
          echo "<td>$".$quantity."</td>";
          $total = $total+$subtotal;
        }
      }

      echo "<td>$".$subtotal."</td>";

*/

    echo "</tr>";

}

echo "</table>";
echo "<p>Total for the order: $$total</p>";

 ?>
