<?php
//  loadAssignment02
if( isset($_POST['loadNumber']) ) $loadNumber = $_POST['loadNumber'];
else $loadNumber = "";
if( isset($_POST['newLoad']) ) $newLoad = $_POST["newLoad"];
else $newLoad = 'findLoad';
// Consignee
if( isset($_POST['consigneeSealIn']) ) $consigneeSealIn = $_POST['consigneeSealIn'];

if( isset($_POST['consigneeName']) ) $consigneeName = $_POST['consigneeName'];
if( isset($_POST['consigneeStreetAddr']) ) $consigneeStreetAddr = $_POST['consigneeStreetAddr'];
if( isset($_POST['consigneeCity']) ) $consigneeCity = $_POST['consigneeCity'];
if( isset($_POST['consigneeState']) ) $consigneeState = $_POST['consigneeState'];
if( isset($_POST['consigneeCountry']) ) $consigneeCountry = $_POST['consigneeCountry'];
if( isset($_POST['consigneeApptNumber']) ) $consigneeApptNumber = $_POST['consigneeApptNumber'];
if( isset($_POST['deliveryComplete']) ) $consigneeApptNumber = $_POST['deliveryComplete'];
if( isset($_POST['consigneeApptDate']) ) $consigneeApptDate = $_POST['consigneeApptDate'];
if( isset($_POST['consigneeApptTime']) ) $consigneeApptTime = $_POST['consigneeApptTime'];
echo <<<_END
<html>
  <body>
  <p>
  <h3>Load Information</h3>
loadNumber = $loadNumber<br />
<h3>Consignee</h3>
consigneeSealIn = $consigneeSealIn<br />
consigneeName = $consigneeName<br />
consigneeStreetAddr = $consigneeStreetAddr<br />
consigneeCity = $consigneeCity<br />
consigneeState = $consigneeState<br />
consigneeCountry = $consigneeCountry<br />
consigneeApptNumber = $consigneeApptNumber<br />
deliveryComplete = $deliveryComplete<br />
consigneeApptDate = $consigneeApptDate<br />
consigneeApptTime = $consigneeApptTime<br />
</p>
  </body>
</html>
_END;
?>
