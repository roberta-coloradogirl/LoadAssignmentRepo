<?php
//  loadAssignment01
if( isset($_POST['loadNumber']) ) $loadNumber = $_POST['loadNumber'];
else $loadNumber = "";
if( isset($_POST['newLoad']) ) $newLoad = $_POST["newLoad"];
else $newLoad = 'findLoad';
// Shipper
if( isset($_POST['shipperBOL']) ) $shipperBOL = $_POST['shipperBOL'];
if( isset($_POST['shipperSealOut']) ) $shipperSealOut = $_POST['shipperSealOut'];
if( isset($_POST['shipperName']) ) $shipperName = $_POST['shipperName'];
if( isset($_POST['shipperStreetAddr']) ) $shipperStreetAddr = $_POST['shipperStreetAddr'];
if( isset($_POST['shipperCity']) ) $shipperCity = $_POST['shipperCity'];
if( isset($_POST['shipperState']) ) $shipperState = $_POST['shipperState'];
if( isset($_POST['shipperCountry']) ) $shipperCountry = $_POST['shipperCountry'];
if( isset($_POST['shipperP_UNumber']) ) $shipperP_UNumber = $_POST['shipperP_UNumber'];
if( isset($_POST['shipperP_UComplete']) ) $shipperP_UNumber = $_POST['shipperP_UComplete'];
if( isset($_POST['shipperP_UDate']) ) $shipperP_UDate = $_POST['shipperP_UDate'];
if( isset($_POST['shipperP_UTime']) ) $shipperP_UTime = $_POST['shipperP_UTime'];
echo <<<_END
<html>
  <body>
  <p>
  <h3>Load Information</h3>
loadNumber = $loadNumber<br />
<h3>Shipper</h3>
shipperBOL = $shipperBOL<br />
shipperSealOut = $shipperSealOut<br />
shipperCountry = $shipperCountry<br />
shipperName = $shipperName<br />
shipperStreetAddr = $shipperStreetAddr<br />
shipperCity = $shipperCity<br />
shipperState = $shipperState<br />
shipperP_UNumber = $shipperP_UNumber<br />
shipperP_UComplete = $shipperP_UComplete<br />
shipperP_UDate = $shipperP_UDate<br />
shipperP_UTime = $shipperP_UTime<br />

</p>
  </body>
</html>
_END;
?>
