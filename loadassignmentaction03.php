<?php
//  loadAssignment03
if( isset($_POST['loadNumber']) ) $loadNumber = $_POST['loadNumber'];
else $loadNumber = "";
if( isset($_POST['newLoad']) ) $newLoad = $_POST["newLoad"];
else $newLoad = 'findLoad';
// P/U - Drop
if( isset($_POST['pickupDrop']) ) $pickupDrop = $_POST['pickupDrop']; else $pickupDrop = "not_set";
if( isset($_POST['pickSealIn']) ) $pickSealIn = $_POST['pickSealIn'];
if( isset($_POST['pickSealOut']) ) $pickSealOut = $_POST['pickSealOut'];
if( isset($_POST['pickName']) ) $pickName = $_POST['pickName'];
if( isset($_POST['pickStreetAddr']) ) $pickStreetAddr = $_POST['pickStreetAddr'];
if( isset($_POST['pickCity']) ) $pickCity = $_POST['pickCity'];
if( isset($_POST['pickState']) ) $pickState = $_POST['pickState'];
if( isset($_POST['pickCountry']) ) $pickCountry = $_POST['pickCountry'];
if( isset($_POST['pickAppointment']) ) $pickAppointment = $_POST['pickAppointment'];
if( isset($_POST['pickComplete']) ) $pickAppointment = $_POST['pickComplete'];
if( isset($_POST['pickDate']) ) $pickDate = $_POST['pickDate'];
if( isset($_POST['pickTime']) ) $puDropTime = $_POST['pickTime'];
echo <<<_END
<html>
  <body>
  <p>
  <h3>Load Information</h3>
loadNumber = $loadNumber<br />
<h3>Pick</h3>
pickupDrop = $pickupDrop<br />
pickSealIn = $pickSealIn<br />
pickSealOut = $pickSealOut<br />
pickCountry = $pickCountry<br />
pickName = $pickName<br />
pickStreetAddr = $pickStreetAddr<br />
pickCity = $pickCity<br />
pickState = $pickState<br />
pickAppointment = $pickAppointment<br />
pickComplete = $pickComplete<br />
pickDate = $pickDate<br />
pickTime = $pickTime<br />
</p>
  </body>
</html>
_END;
?>
