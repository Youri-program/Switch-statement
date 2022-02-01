<?php

// Author: Youri van der Meulen

// Declaring variables
$dDatefield = date ('l');
$dDatefield1 = date ('l', strtotime("+1day"));
$dDatefield2 = date ('l', strtotime("+2day"));
$iOursnlbe = 24;
$iOursdlu = 48;
$iShippingcosts = 4.95;
$iShippingcosts1 = 6.00;
$iShippingcosts2 = 12.00;
$iShippingcosts3 = 10.00;
$Country = $_POST['Country'];


// Switch statement 
switch ($Country) {
    case "Netherlands":
        echo("Ordered today ".$dDatefield." before 3pm, delivered ".$dDatefield1." within ".$iOursnlbe." hours. The shipping costs are €".$iShippingcosts.".<br/><br/>");
        break;
    case "Belgium":
        echo("Ordered today ".$dDatefield." before 3pm, delivered ".$dDatefield1." within ".$iOursnlbe." hours. The shipping costs are €".$iShippingcosts1.".<br/><br/>");
        break;
    case "Germany":
        echo("Ordered today ".$dDatefield." before 3pm, delivered ".$dDatefield2." within ".$iOursdlu." hours. The shipping costs are €".$iShippingcosts2.".<br/><br/>");
        break;
    case "Luxembourg":
        echo("Ordered today ".$dDatefield." before 3pm, delivered ".$dDatefield2." within ".$iOursdlu." hours. The shipping costs are €".$iShippingcosts3.".<br/><br/>");
        break;

    default:
        echo("<b>Please select a country!</b><br/><br/>");
        break;
} // End switch statement

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Switch statement </title>
    </head>
    <body>
        <form method="POST">
            Which product would you like to order?:<br/> <input type="radio" name="Phone" value="Iphone 12" /> Iphone 12 <br/>
                                            <input type="radio" name="Phone" value="Iphone 12 Pro" /> Iphone 12 Pro <br/>
                                            <input type="radio" name="Phone" value="Iphone 12 Pro Max" /> Iphone 12 Pro Max <br/>
                                            <input type="radio" name="Phone" value="Iphone 13" /> Iphone 13 <br/><br/>
            Where do you live?: <select name='Country'>
                <option value=Error>Select a country</option>
                <option value=Netherlands>The Netherlands</option>
                <option value=Belgium>Belgium</option>
                <option value=Germany>Germany</option>
                <option value=Luxembourg>Luxembourg</option>
                </select>  <br/><br/>
            <input type="submit" value="Order"><br/>
        </form>
    </body>
</html>