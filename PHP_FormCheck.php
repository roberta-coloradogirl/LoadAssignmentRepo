<?php
#
# loadAssignmentAction  -- all variables
if( isset($_POST["loadNumber"]) ) $loadNumber = $_POST["loadNumber"];
else $loadNumber = "ERROR";
echo "ldNmbr: ".$loadNumber."<br />";
if( isset($_POST["newLoad"]) ) $newLoad = $_POST["newLoad"];
else $newLoad = "findLoad";
if( isset($_POST["actionButton1"]) ) $actionButton1 = $_POST["actionButton1"];
else $actionButton1 = "create1";
if( isset($_POST["actionButton2"]) ) $actionButton2 = $_POST["actionButton2"];
else $actionButton2 = "create2";
echo "newLoad: ".$newLoad."<br />";
echo "button1: ".$actionButton1."<br />";
echo "button2: ".$actionButton2."<br />";
if( isset($_POST["loadTemp"]) ) $loadTemp = $_POST["loadTemp"];
else $loadTemp = "NOT_SET";
if( isset($_POST["loadStartDate"]) ) $loadStartDate = $_POST["loadStartDate"];
else $loadStartDate = "NOT_SET";
if( isset($_POST["loadDeliveryDate"]) ) $loadDeliveryDate = $_POST["loadDeliveryDate"];
else $loadDeliveryDate = "NOT_SET";
if( isset($_POST["reeferPretripped"]) ) $reeferPretripped = $_POST["reeferPretripped"];
else $reeferPretripped = "NOT_SET";
if( isset($_POST["sealMatches"]) ) $sealMatches = $_POST["sealMatches"];
else $sealMatches = "NOT_SET";
if( isset($_POST["tempMatches"]) ) $tempMatches = $_POST["tempMatches"];
else $tempMatches = "NOT_SET";
#
# broker information
if( isset($_POST["brokerName"]) ) $brokerName = $_POST["brokerName"];
else $brokerName = "NOT_SET";
if( isset($_POST["brokerLoadID"]) ) $brokerLoadID = $_POST["brokerLoadID"];
else $brokerLoadID = "NOT_SET";
if( isset($_POST["brokerPhone"]) ) $brokerPhone = $_POST["brokerPhone"];
else $brokerPhone = "NOT_SET";
#
#  NOTE:
#    - totalEmptyMiles    = emptyActual
#      totalLoadedMiles    = loadedActual
#      totalMiles        = totalActual
#
#  empty miles Paid, Actual, Variance
if( isset($_POST["emptyPaid"]) && strlen($_POST["emptyPaid"]) ) $emptyPaid = $_POST["emptyPaid"];
else $emptyPaid = "NOT_SET";
if( isset($_POST["emptyActual"]) && strlen($_POST["emptyActual"]) ) $emptyActual = $_POST["emptyActual"];
else $emptyActual = "NOT_SET";
if( isset($_POST["emptyVariance"]) && strlen($_POST["emptyVariance"]) ) $emptyVariance = $_POST["emptyVariance"];
else $emptyVariance = "NOT_SET";
#
#  loaded miles Paid, Actual, Variance
if( isset($_POST["loadedPaid"]) && strlen($_POST["loadedPaid"]) ) $loadedPaid = $_POST["loadedPaid"];
else $loadedPaid = "NOT_SET";
if( isset($_POST["loadedActual"]) && strlen($_POST["loadedActual"]) ) $loadedActual = $_POST["loadedActual"];
else $loadedActual = "NOT_SET";
if( isset($_POST["loadedVariance"]) && strlen($_POST["loadedVariance"]) ) $loadedVariance = $_POST["loadedVariance"];
else $loadedVariance = "NOT_SET";
#
#  total miles Paid, Actual, Variance
if( isset($_POST["totalPaid"]) && strlen($_POST["totalPaid"])>0 ) $totalPaid = $_POST["totalPaid"];
else $totalPaid = "NOT_SET";
if( isset($_POST["totalActual"]) && strlen($_POST["totalActual"])>0 ) $totalActual = $_POST["totalActual"];
else $totalActual = "NOT_SET";
if( isset($_POST["totalVariance"]) && strlen($_POST["totalVariance"])>0 ) $totalVariance = $_POST["totalVariance"];
else $totalVariance = "NOT_SET";
#
#  ending raw odometer readings - ending empty, ending loaded
if( isset($_POST["endingEmpty"]) && strlen($_POST["endingEmpty"])>0 ) $endingEmpty = $_POST["endingEmpty"];
else $endingEmpty = "NOT_SET";
if( isset($_POST["endingLoaded"]) && strlen($_POST["endingLoaded"])>0 ) $endingLoaded = $_POST["endingLoaded"];
else $endingLoaded = "NOT_SET";
#
# beginning raw odometer readings - beginning empty, beginning loaded
if( isset($_POST["beginingEmpty"]) && strlen($_POST["beginingEmpty"])>0 ) $beginingEmpty = $_POST["beginingEmpty"];
else $beginingEmpty = "NOT_SET";
if( isset($_POST["beginingLoaded"]) && strlen($_POST["beginingLoaded"])>0 ) $beginingLoaded = $_POST["beginingLoaded"];
else $beginingLoaded = "NOT_SET";
#
# total miles empty, loaded, trip
if( isset($_POST["totalEmptyMiles"]) && strlen($_POST["totalEmptyMiles"])>0 ) $totalEmptyMiles = $_POST["totalEmptyMiles"];
else $totalEmptyMiles = "NOT_SET";
if( isset($_POST["totalLoadedMiles"]) && strlen($_POST["totalLoadedMiles"])>0 ) $totalLoadedMiles = $_POST["totalLoadedMiles"];
else $totalLoadedMiles = "NOT_SET";
if( isset($_POST["totalMiles"]) && strlen($_POST["totalMiles"])>0 ) $totalMiles = $_POST["totalMiles"];
else $totalMiles = "NOT_SET";
#
# Shipper information
if( isset($_POST["shipperBOL"]) ) $shipperBOL = $_POST["shipperBOL"];
if( isset($_POST["shipperSealOut"]) ) $shipperSealOut = $_POST["shipperSealOut"];
if( isset($_POST["shipperCountry"]) ) $shipperCountry = $_POST["shipperCountry"];
if( isset($_POST["shipperZip"]) ) $shipperCountry = $_POST["shipperZip"];
if( isset($_POST["shipperName"]) ) $shipperName = $_POST["shipperName"];
if( isset($_POST["shipperStreetAddr"]) ) $shipperStreetAddr = $_POST["shipperStreetAddr"];
if( isset($_POST["shipperCity"]) ) $shipperCity = $_POST["shipperCity"];
if( isset($_POST["shipperState"]) ) $shipperState = $_POST["shipperState"];
if( isset($_POST["shipperP_UNumber"]) ) $shipperP_UNumber = $_POST["shipperP_UNumber"];
if( isset($_POST["shipperP_UDate"]) ) $shipperP_UDate = $_POST["shipperP_UDate"];
if( isset($_POST["shipperP_UTime"]) ) $shipperP_UTime = $_POST["shipperP_UTime"];
if( isset($_POST["shipperP_UComplete"]) ) $shipperP_UTime = $_POST["shipperP_UComplete"];
#
# Consignee information
if( isset($_POST["consigneeSealIn"]) ) $consigneeSealIn = $_POST["consigneeSealIn"];
if( isset($_POST["consigneeCountry"]) ) $consigneeCountry = $_POST["consigneeCountry"];
if( isset($_POST["consigneeZip"]) ) $consigneeCountry = $_POST["consigneeZip"];
if( isset($_POST["consigneeName"]) ) $consigneeName = $_POST["consigneeName"];
if( isset($_POST["consigneeStreetAddr"]) ) $consigneeStreetAddr = $_POST["consigneeStreetAddr"];
if( isset($_POST["consigneeCity"]) ) $consigneeCity = $_POST["consigneeCity"];
if( isset($_POST["consigneeState"]) ) $consigneeState = $_POST["consigneeState"];
if( isset($_POST["consigneeApptNumber"]) ) $consigneeApptNumber = $_POST["consigneeApptNumber"];
if( isset($_POST["consigneeApptDate"]) ) $consigneeApptDate = $_POST["consigneeApptDate"];
if( isset($_POST["consigneeApptTime"]) ) $consigneeApptTime = $_POST["consigneeApptTime"];
if( isset($_POST["consigneeDeliveryComplete"]) ) $consigneeApptTime = $_POST["consigneeDeliveryComplete"];
#
# P/U - Drop information
if( isset($_POST["pickupDrop"]) ) $pickupDrop = $_POST["pickupDrop"]; else $pickupDrop = "not_set";
if( isset($_POST["puDropSealIn"]) ) $puDropSealIn = $_POST["puDropSealIn"];
if( isset($_POST["puDropSealOut"]) ) $puDropSealOut = $_POST["puDropSealOut"];
if( isset($_POST["puDropCountry"]) ) $puDropCountry = $_POST["puDropCountry"];
if( isset($_POST["puDropZip"]) ) $puDropCountry = $_POST["puDropZip"];
if( isset($_POST["puDropName"]) ) $puDropName = $_POST["puDropName"];
if( isset($_POST["puDropStreetAddr"]) ) $puDropStreetAddr = $_POST["puDropStreetAddr"];
if( isset($_POST["puDropCity"]) ) $puDropCity = $_POST["puDropCity"];
if( isset($_POST["puDropState"]) ) $puDropState = $_POST["puDropState"];
if( isset($_POST["puDropAppointment"]) ) $puDropAppointment = $_POST["puDropAppointment"];
if( isset($_POST["puDropDate"]) ) $puDropDate = $_POST["puDropDate"];
if( isset($_POST["puDropTime"]) ) $puDropTime = $_POST["puDropTime"];
if( isset($_POST["puDropComplete"]) ) $puDropTime = $_POST["puDropTimeComplete"];
#
# if a newload then create the file
# else open the file
# PROBLEM - what about modifications?
$dbLoadRecData = array( "loadNumber"=>" ","newLoad"=>"","actionButton1"=>"","actionButton2"=>"",
                        "loadStartDate"=>"","loadDeliveryDate"=>"",
                        "brokerName"=>"","brokerLoadID"=>"","brokerPhone"=>"",
                        "loadTemp"=>"","reeferPretripped"=>"","sealMatches"=>"","tempMatches"=>"",
                        "emptyPaid"=>"","loadedPaid"=>"","totalPaid"=>"",
                        "endingEmpty"=>"","beginingEmpty"=>"","endingLoaded"=>"","beginingLoaded"=>"",
                        "emptyActual"=>"","loadedActual"=>"","totalActual"=>"",
                        "emptyVariance"=>"","loadedVariance"=>"","totalVariance"=>"" );

$fileName = "";
$fileStatus = "Initiate file processing. <br />";
if ( ($loadNumber == "ERROR") || ($loadNumber == "") ) {
   echo "  *** A Loadnumber is required for load data file creation. Processing is terminated.<br />";
} else {
   $fileName = "loadData/testLoad_".$loadNumber.".txt";
   echo "File: ".$fileName."<br />";
   echo "  Status: ".$fileStatus;
   echo count($dbLoadRecData)." elements id dbLoadRecData.<br />";
#print_r(error_get_last());
   if ( file_exists($fileName) ) {
      echo "File: ".$fileName." exists.<br />";
      if ( $fH = fopen($fileName, "r+") ) {
         $fileStatus = " File ".$fileName." opened in read mode and positioned to beginning.<br />";
         echo $fileStatus;
       //  if file data item is not blank change it
         if ( $dbRec = fread($fH,1024) ) {
            $fileStatus = " File ".$fileName." data file is read.<br />";
#            echo $dbRec;
             $dbRecArray = explode("\t",$dbRec,count(dbLoadRecData));
         } else {
            $fileStatus = "FAILED reading data file.<br />";
            print_r(error_get_last());
         }
         echo $fileStatus;
         fclose($fH);
      } else {
         $fileStatus = " File ".$fileName." could not be opened.<br />";
         echo $fileStatus;
      }
   } else {
#  file does not exist -  this is a New Load
      if ( $fH = fopen($fileName, "w+") )  {
         $fileStatus = " File ".$fileName." is opened with write mode. <br />";
         if ( $newLoad == "new" ) {
            $newLoad = "Find";
            $actionButton1 = "Find";
            $actionButton2 = "Modify/Change";
            echo $fileStatus;
            foreach($dbLoadRecData as $parm=>$parmValue) {
               switch ($parm) {
               case "loadNumber":
                  $dbLoadRecData[$parm] = $loadNumber;
                  break;
               case "newLoad":
                  $dbLoadRecData[$parm] = $newLoad;
                  break;
               case "actionButton1":
                  $dbLoadRecData[$parm] = $actionButton1;
                  break;
               case "actionButton2":
                  $dbLoadRecData[$parm] = $actionButton2;
                  break;
               case "loadStartDate":
                  $dbLoadRecData[$parm] = $loadStartDate;
                  break;
               case "loadDeliveryDate":
                  $dbLoadRecData[$parm] = $loadDeliveryDate;
                  break;
               case "brokerName":
                  $dbLoadRecData[$parm] = $brokerName;
                  break;
               case "brokerLoadID":
                  $dbLoadRecData[$parm] = $brokerLoadID;
                  break;
               case "brokerPhone":
                  $dbLoadRecData[$parm] = $brokerPhone;
                  break;
               case "loadTemp":
                  $dbLoadRecData[$parm] = $loadTemp;
                  break;
               case "reeferPretripped":
                  $dbLoadRecData[$parm] = $reeferPretripped;
                  break;
               case "sealMatches":
                  $dbLoadRecData[$parm] = $sealMatches;
                  break;
               case "tempMatches":
                  $dbLoadRecData[$parm] = $tempMatches;
                  break;
               case "emptyPaid":
                  $dbLoadRecData[$parm] = $emptyPaid;
                  break;
               case "loadedPaid":
                  $dbLoadRecData[$parm] = $loadedPaid;
                  break;
               case "totalPaid":
                  $dbLoadRecData[$parm] = $totalPaid;
                  break;
               case "endingEmpty":
                  $dbLoadRecData[$parm] = $endingEmpty;
                  break;
               case "beginingEmpty":
                  $dbLoadRecData[$parm] = $beginingEmpty;
                  break;
               case "endingLoaded":
                  $dbLoadRecData[$parm] = $endingLoaded;
                  break;
               case "beginingLoaded":
                  $dbLoadRecData[$parm] = $beginingLoaded;
                  break;
               case "emptyActual":
                  $dbLoadRecData[$parm] = $emptyActual;
                  break;
               case "loadedActual":
                  $dbLoadRecData[$parm] = $loadedActual;
                  break;
               case "totalActual":
                  $dbLoadRecData[$parm] = $totalActual;
                  break;
               case "emptyVariance":
                  $dbLoadRecData[$parm] = $emptyVariance;
                  break;
               case "loadedVariance":
                  $dbLoadRecData[$parm] = $loadedVariance;
                  break;
               case "totalVariance":
                  $dbLoadRecData[$parm] = $totalVariance;
                  break;
               }
# echo $parm."=".$dbLoadRecData[$parm]." <br />";
            }
            $dbRec = sprintf("%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\r\n",
                             $loadNumber,$newLoad,$actionButton1,$actionButton2,
                             $loadStartDate,$loadDeliveryDate,
                             $brokerName,$brokerLoadID,$brokerPhone,
                             $loadTemp,$reeferPretripped,$sealMatches,$tempMatches,
                             $emptyPaid,$loadedPaid,$totalPaid,
                             $endingEmpty,$beginingEmpty,$endingLoaded,$beginingLoaded,
                             $emptyActual,$loadedActual,$totalActual,
                             $emptyVariance,$loadedVariance,$totalVariance);
            fwrite($fH,$dbRec);
            fclose($fH);
            $fileStatus = " File ".$fileName." new data is added. <br />";
            echo $fileStatus;
         } else {
            echo " File: ".$fileName." could not be opend in w+ mode. <br />";
         }
      } else {
         echo " File: ".$fileName." NOT opened. <br />";
      }
   }
}
echo <<<_END
<html lang="en-US">
<head>
   <title>Load Assignment</title>
   <meta charset="UTF-8" />
</head>
<body>
<p>
Data File: $fileName <br />
File Status: $fileStatus <br />
</p>
<p>
<h2>Load Information</h2>
loadNumber = $loadNumber<br />
newLoad = $newLoad<br />
actionButton1 = $actionButton1<br />
actionButton2 = $actionButton2<br />
loadTemp = $loadTemp<br />
loadStartDate = $loadStartDate<br />
loadDeliveryDate = $loadDeliveryDate<br />
reeferPretripped = $reeferPretripped<br />
sealMatches = $sealMatches<br />
tempMatches = $tempMatches<br />

<h4>Broker Information</h4>
brokerName = $brokerName<br />
brokerLoadID = $brokerLoadID<br />
brokerPhone = $brokerPhone<br />

<h4>Paid Miles</h4>
emptyPaid = $emptyPaid<br />
loadedPaid = $loadedPaid<br />
totalPaid = $totalPaid<br />

<h4>Empty Miles</h4>
endingEmpty = $endingEmpty<br />
beginingEmpty = $beginingEmpty<br />
emptyActual = $emptyActual<br />

<h4>Loaded Miles</h4>
endingLoaded = $endingLoaded<br />
beginingLoaded = $beginingLoaded<br />
loadedActual = $loadedActual<br />

<h4>Trip Miles</h4>
totalMiles = $totalMiles<br />
totalActual = $totalActual<br />

<h4>Mileage Variance</h4>
emptyVariance = $emptyVariance<br />
loadedVariance = $loadedVariance<br />
totalVariance = $totalVariance<br />

<h2>Shipper</h2>
shipperBOL = $shipperBOL<br />
shipperSealOut = $shipperSealOut<br />
shipperCountry = $shipperCountry<br />
shipperName = $shipperName<br />
shipperStreetAddr = $shipperStreetAddr<br />
shipperCity = $shipperCity<br />
shipperState = $shipperState<br />
shipperP_UNumber = $shipperP_UNumber<br />
shipperP_UDate = $shipperP_UDate<br />
shipperP_UTime = $shipperP_UTime<br />

<h2>Consignee</h2>
consigneeSealIn = $consigneeSealIn<br />
consigneeCountry = $consigneeCountry<br />
consigneeName = $consigneeName<br />
consigneeStreetAddr = $consigneeStreetAddr<br />
consigneeCity = $consigneeCity<br />
consigneeState = $consigneeState<br />
consigneeApptNumber = $consigneeApptNumber<br />
consigneeApptDate = $consigneeApptDate<br />
consigneeApptTime = $consigneeApptTime<br />

<h2>Pick/Drop</h2>
pickupDrop = $pickupDrop<br />
puDropSealIn = $puDropSealIn<br />
puDropSealOut = $puDropSealOut<br />
puDropCountry = $puDropCountry<br />
puDropName = $puDropName<br />
puDropStreetAddr = $puDropStreetAddr<br />
puDropCity = $puDropCity<br />
puDropState = $puDropState<br />
puDropAppointment = $puDropAppointment<br />
puDropDate = $puDropDate<br />
puDropTime = $puDropTime<br />

</p>
</body>
</html>
_END;
?>
