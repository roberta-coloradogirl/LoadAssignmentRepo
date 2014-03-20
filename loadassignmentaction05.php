<?php
//  loadAssignment05
if( isset($_POST['loadNumber']) ) $loadNumber = $_POST['loadNumber'];
else $loadNumber = "";
if( isset($_POST['newLoad']) ) $newLoad = $_POST["newLoad"];
else $newLoad = 'findLoad';
if( isset($_POST['fuelBrand']) ) $fuelBrand = $_POST["fuelBrand"];
else $fuelBrand = "";
if( isset($_POST['fuelHwy']) ) $fuelHwy = $_POST["fuelHwy"];
else $fuelHwy = "";
if( isset($_POST['fuelExit']) ) $fuelExit = $_POST["fuelExit"];
else $fuelExit = "";
if( isset($_POST['fuelLocation']) ) $fuelLocation = $_POST["fuelLocation"];
else $fuelLocation = "";
if( isset($_POST['fuelDate']) ) $fuelDate = $_POST["fuelDate"];
else $fuelDate = "";
if( isset($_POST['fuelOdometer']) ) $fuelOdometer = $_POST["fuelOdometer"];
else $fuelOdometer = "";
if( isset($_POST['fuelOptiGals']) ) $fuelOptiGals = $_POST["fuelOptiGals"];
else $fuelOptiGals = "";
if( isset($_POST['fuelActualGals']) ) $fuelActualGals = $_POST["fuelActualGals"];
else $fuelActualGals = "";
if( isset($_POST['fuelPricePerGal']) ) $fuelPricePerGal = $_POST["fuelPricePerGal"];
else $fuelPricePerGal = "";
if( isset($_POST['fuelCost']) ) $fuelCost  = $_POST["fuelCost"];
else $fuelCost = "";
if( isset($_POST['fuelFillUp']) ) $fuelFillUp  = $_POST["fuelFillUp"];
else $fuelFillUp = "";
echo <<<_END
<html>
  <body>
  <p>
  <h3>Fuel Information</h3>
loadNumber = $loadNumber<br />
fuelBrand = $fuelBrand<br />
fuelHwy = $fuelHwy<br />
fuelExit = $fuelExit<br />
fuelLocation = $fuelLocation<br />
fuelDate = $fuelDate<br />
fuelOdometer = $fuelOdometer<br />
fuelOptiGals = $fuelOptiGals<br />
fuelActualGals = $fuelActualGals<br />
fuelPricePerGal = $fuelPricePerGal<br />
fuelCost = $fuelCost<br />
fuelFillUp = $fuelFillUp<br />
</p>
  </body>
</html>
_END;
?>
