<?php
//  loadAssignment04
if( isset($_POST['loadNumber']) ) $loadNumber = $_POST['loadNumber'];
else $loadNumber = "";
if( isset($_POST['newLoad']) ) $newLoad = $_POST["newLoad"];
else $newLoad = 'findLoad';
// P/U - Drop
if( isset($_POST['pickupDrop']) ) $pickupDrop = $_POST['pickupDrop']; else $pickupDrop = "not_set";
if( isset($_POST['dropSealIn']) ) $dropSealIn = $_POST['dropSealIn'];
if( isset($_POST['dropSealOut']) ) $dropSealOut = $_POST['dropSealOut'];
if( isset($_POST['dropName']) ) $dropName = $_POST['dropName'];
if( isset($_POST['dropStreetAddr']) ) $dropStreetAddr = $_POST['dropStreetAddr'];
if( isset($_POST['dropCity']) ) $dropCity = $_POST['dropCity'];
if( isset($_POST['dropState']) ) $dropState = $_POST['dropState'];
if( isset($_POST['dropCountry']) ) $dropCountry = $_POST['dropCountry'];
if( isset($_POST['dropAppointment']) ) $dropAppointment = $_POST['dropAppointment'];
if( isset($_POST['dropComplete']) ) $dropAppointment = $_POST['dropComplete'];
if( isset($_POST['dropDate']) ) $dropDate = $_POST['dropDate'];
if( isset($_POST['dropTime']) ) $dropTime = $_POST['dropTime'];
echo <<<_END
<html>
  <body>
  <p>
  <h3>Load Information</h3>
loadNumber = $loadNumber<br />
<h3>Pick/Drop</h3>
pickupDrop = $pickupDrop<br />
dropSealIn = $dropSealIn<br />
dropSealOut = $dropSealOut<br />
dropName = $dropName<br />
dropStreetAddr = $dropStreetAddr<br />
dropCity = $dropCity<br />
dropState = $dropState<br />
dropCountry = $dropCountry<br />
dropAppointment = $dropAppointment<br />
dropComplete = $dropComplete<br />
dropDate = $dropDate<br />
dropTime = $dropTime<br />
</p>
  </body>
</html>
_END;
?>
