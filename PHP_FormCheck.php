<?php
#
# loadAssignmentAction  -- all variables
if( isset($_POST["loadNumber"]) ) $loadNumber = $_POST["loadNumber"];
else $loadNumber = "ERROR";
if( isset($_POST["loadActionFlag"]) ) $loadActionFlag = $_POST["loadActionFlag"];
# else $loadActionFlag = "findLoad";
if( isset($_POST["actionButton1"]) ) $actionButton1 = $_POST["actionButton1"];
# else $actionButton1 = "create1";
if( isset($_POST["actionButton2"]) ) $actionButton2 = $_POST["actionButton2"];
# else $actionButton2 = "create2";
echo "loadNmbr: ".$loadNumber."<br />";
echo "loadActionFlag: ".$loadActionFlag."<br />";
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
# if the loadActionFlag is  new then create the load file
# else open the file
# PROBLEM - what about modifications?
$dbLoadRecData = array( "loadNumber"=>" ","loadActionFlag"=>"","actionButton1"=>"","actionButton2"=>"",
                                   "loadStartDate"=>"","loadDeliveryDate"=>"",
                                   "brokerName"=>"","brokerLoadID"=>"","brokerPhone"=>"",
                                   "loadTemp"=>"","reeferPretripped"=>"","sealMatches"=>"","tempMatches"=>"",
                                   "emptyPaid"=>"","loadedPaid"=>"","totalPaid"=>"",
                                   "endingEmpty"=>"","beginingEmpty"=>"","endingLoaded"=>"","beginingLoaded"=>"",
                                   "emptyActual"=>"","loadedActual"=>"","totalActual"=>"",
                                   "emptyVariance"=>"","loadedVariance"=>"","totalVariance"=>"" );
$dbRec = "";
$fileName = "";
$fileStatus = "Initiate file processing. <br />";

if ( ($loadNumber == "ERROR") || ($loadNumber == "") ) {
    echo "  *** A Loadnumber is required for load data file creation. Processing is terminated.<br />";
} else {
    $fileName = "loadData/testLoad_".$loadNumber.".txt";
#     echo "File: ".$fileName."<br />";
#     echo "  Status: ".$fileStatus;
#     echo count($dbLoadRecData)." elements in dbLoadRecData.<br />";
#     print_r(error_get_last());
    if ( file_exists($fileName) ) {
        echo "File: ".$fileName." exists.<br />";
#  files exists so we have either request to modify the current load or a request to find another load. Which
#  course of action depends on the variables set by the submit buttons; actionButton1 or actionButton2; and
#  the loadActionFlag
        if ( $fH = fopen($fileName, "r+") ) {
            $fileStatus = " File ".$fileName." opened in read mode and positioned to beginning.<br />";
            echo $fileStatus;
            //  if file data item is not blank change it
            if ( $dbRec = fread($fH,1024) ) {
                $fileStatus = " File ".$fileName." data file is read.<br />";
     #           echo "Read ",strlen($dbRec)." characters.";
                $dbRecArray = explode("\t",$dbRec,count($dbLoadRecData));
                $idx = 0;
                foreach ($dbLoadRecData as $parm=>$parmValue) {
                    switch ($parm) {
                        case "loadNumber":
                           if( $dbRecArray[$idx] != $loadNumber ) $dbLoadRecData[$parm] = $loadNumber;
                           break;
                        case "loadActionFlag":
                           if( $dbRecArray[$idx] != $loadActionFlag ) {
                               $dbLoadRecData[$parm] = $loadActionFlag;
                           }
                           break;
                        case "actionButton1":
                           if( $dbRecArray[$idx] != $actionButton1 ) {
                               $dbLoadRecData[$parm] = $actionButton1;
                           }
                           break;
                        case "actionButton2":
                           if( $dbRecArray[$idx] != $actionButton2) {
                               $dbLoadRecData[$parm] = $actionButton2;
                           }
                           break;
                        case "loadStartDate":
                           if( $dbRecArray[$idx] != $loadStartDate ) $dbLoadRecData[$parm] = $loadStartDate;
                           break;
                        case "loadDeliveryDate":
                           if( $dbRecArray[$idx] != $loadDeliveryDate ) $dbLoadRecData[$parm] = $loadDeliveryDate;
                           break;
                        case "brokerName":
                           if( $dbRecArray[$idx] != $brokerName ) $dbLoadRecData[$parm] = $brokerName;
                           break;
                        case "brokerLoadID":
                           if( $dbRecArray[$idx] != $brokerLoadID ) $dbLoadRecData[$parm] = $brokerLoadID;
                           break;
                        case "brokerPhone":
                           if( $dbRecArray[$idx] != $brokerPhone ) $dbLoadRecData[$parm] = $brokerPhone;
                           break;
                        case "loadTemp":
                           if( $dbRecArray[$idx] != $loadTemp ) $dbLoadRecData[$parm] = $loadTemp;
                           break;
                        case "reeferPretripped":
                           if( $dbRecArray[$idx] != $reeferPretripped ) $dbLoadRecData[$parm] = $reeferPretripped;
                           break;
                        case "sealMatches":
                           if( $dbRecArray[$idx] != $sealMatches ) $dbLoadRecData[$parm] = $sealMatches;
                           break;
                        case "tempMatches":
                           if( $dbRecArray[$idx] != $tempMatches ) $dbLoadRecData[$parm] = $tempMatches;
                           break;
                        case "emptyPaid":
                           if( $dbRecArray[$idx] != $emptyPaid ) $dbLoadRecData[$parm] = $emptyPaid;
                           break;
                        case "loadedPaid":
                           if( $dbRecArray[$idx] != $loadedPaid ) $dbLoadRecData[$parm] = $loadedPaid;
                           break;
                        case "totalPaid":
                           if( $dbRecArray[$idx] != $totalPaid ) $dbLoadRecData[$parm] = $totalPaid;
                           break;
                        case "endingEmpty":
                           if( $dbRecArray[$idx] != $endingEmpty ) $dbLoadRecData[$parm] = $endingEmpty;
                           break;
                        case "beginingEmpty":
                           if( $dbRecArray[$idx] != $beginingEmpty ) $dbLoadRecData[$parm] = $beginingEmpty;
                           break;
                        case "endingLoaded":
                           if( $dbRecArray[$idx] != $endingLoaded ) $dbLoadRecData[$parm] = $endingLoaded;
                           break;
                        case "beginingLoaded":
                           if( $dbRecArray[$idx] != $beginingLoaded ) $dbLoadRecData[$parm] = $beginingLoaded;
                           break;
                        case "emptyActual":
                           if( $dbRecArray[$idx] != $emptyActua ) $dbLoadRecData[$parm] = $emptyActual;
                           break;
                        case "loadedActual":
                           if( $dbRecArray[$idx] != $loadedActual ) $dbLoadRecData[$parm] = $loadedActual;
                           break;
                        case "totalActual":
                           if( $dbRecArray[$idx] != $totalActual ) $dbLoadRecData[$parm] = $totalActual;
                           break;
                        case "emptyVariance":
                           if( $dbRecArray[$idx] != $emptyVariance ) $dbLoadRecData[$parm] = $emptyVariance;
                           break;
                        case "loadedVariance":
                           if( $dbRecArray[$idx] != $loadedVariance ) $dbLoadRecData[$parm] = $loadedVariance;
                           break;
                        case "totalVariance":
                           if( $dbRecArray[$idx] != $totalVariance ) $dbLoadRecData[$parm] = $totalVariance;
                           break;
                    }
                    $idx += 1;
# echo $parm."=".$dbLoadRecData[$parm]." <br />";
                }
#put modified data back in storage
                $dbRec = "";
                rewind($fH);
                $dbRec = sprintf("%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\r\n",
                                       $loadNumber,$loadActionFlag,$actionButton1,$actionButton2,
                                       $loadStartDate,$loadDeliveryDate,
                                       $brokerName,$brokerLoadID,$brokerPhone,
                                       $loadTemp,$reeferPretripped,$sealMatches,$tempMatches,
                                       $emptyPaid,$loadedPaid,$totalPaid,
                                       $endingEmpty,$beginingEmpty,$endingLoaded,$beginingLoaded,
                                       $emptyActual,$loadedActual,$totalActual,
                                       $emptyVariance,$loadedVariance,$totalVariance," ");
                fwrite($fH,$dbRec);
                echo "Wrote ",strlen($dbRec)." characters.";
                fclose($fH);
            } else {
                $fileStatus = "FAILED reading data file.<br />";
                print_r(error_get_last());
            }
            echo $fileStatus;
            fclose($fH);
        } else {
            $fileStatus = " File ".$fileName." could not be opened.<br />";
            echo $fileStatus;
           print_r(error_get_last());
        }
    } else {   #  file does not exist -  this is a New Load
        if ( $fH = fopen($fileName, "w+") )  {
            $fileStatus = " File ".$fileName." is opened with write mode. <br />";
            if ( $loadActionFlag == "new" ) {
                $loadActionFlag = "Find";
                $actionButton1 = "Find";
                $actionButton2 = "Modify/Change";
                echo $fileStatus;
                $dbRec = "";
                $dbRec = sprintf("%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\r\n",
                                       $loadNumber,$loadActionFlag,$actionButton1,$actionButton2,
                                       $loadStartDate,$loadDeliveryDate,
                                       $brokerName,$brokerLoadID,$brokerPhone,
                                       $loadTemp,$reeferPretripped,$sealMatches,$tempMatches,
                                       $emptyPaid,$loadedPaid,$totalPaid,
                                       $endingEmpty,$beginingEmpty,$endingLoaded,$beginingLoaded,
                                       $emptyActual,$loadedActual,$totalActual,
                                       $emptyVariance,$loadedVariance,$totalVariance," ");
                fwrite($fH,$dbRec);
                echo "Wrote ",strlen($dbRec)." characters.";
                fclose($fH);
                $fileStatus = " File ".$fileName." new data is added. <br />";
                echo $fileStatus;
            } else {
                echo " File: ".$fileName." could not be opend in w+ mode. <br />";
                print_r(error_get_last());
            }
        } else {
            echo " File: ".$fileName." NOT opened. <br />";
            print_r(error_get_last());
        }
        fclose($fH);
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
loadActionFlag = $loadActionFlag<br />
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
