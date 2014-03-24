<?php
# Modified: on Mar 20, 2014 13:17:56 AM
# Modified: on Jan 29, 2014 11:52:56 AM
# Created: on Mar 20, 2012 11:04:03 AM

# loadAssignmentAction  -- all variables
if( isset($_POST["loadNumber"]) ) $loadNumber = $_POST["loadNumber"];
else $loadNumber = "NOT_SET";
echo "ldNmbr: ".$loadNumber."<br />";
if( isset($_POST["newLoad"]) ) $newLoad = $_POST["newLoad"];
else $newLoad = "findLoad";
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
#  empty miles Paid, Actual, Variance
if( isset($_POST["emptyPaid"]) && strlen($_POST["emptyPaid"]) ) $emptyPaid = $_POST["emptyPaid"]; 
else $emptyPaid = "NOT_SET";
if( isset($_POST["emptyActual"]) && strlen($_POST["emptyActual"]) ) $emptyActual = $_POST["emptyActual"]; 
else $emptyActual = "NOT_SET";
if( isset($_POST["emptyVariance"]) && strlen($_POST["emptyVariance"]) ) $emptyVariance = $_POST["emptyVariance"]; 
else $emptyVariance = "NOT_SET";
#
#  loaded miles Paid, Actial, Variance
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
#  raw odometer readings ending empty, ending loaded
if( isset($_POST["endingEmpty"]) && strlen($_POST["endingEmpty"])>0 ) $endingEmpty = $_POST["endingEmpty"]; 
else $endingEmpty = "NOT_SET";
if( isset($_POST["endingLoaded"]) && strlen($_POST["endingLoaded"])>0 ) $endingLoaded = $_POST["endingLoaded"]; 
else $endingLoaded = "NOT_SET";
#
# raw odometer readings beginning empty, beginning loaded
if( isset($_POST["beginingEmpty"]) && strlen($_POST["beginingEmpty"])>0 ) $beginingEmpty = $_POST["beginingEmpty"]; 
else $beginingEmpty = "NOT_SET";
if( isset($_POST["beginingLoaded"]) && strlen($_POST["beginingLoaded"])>0 ) $beginingLoaded = $_POST["beginingLoaded"]; 
else $beginingLoaded = "NOT_SET";
#
# actual total miles empty, loaded, trip
if( isset($_POST["totalEmptyMiles"]) && strlen($_POST["totalEmptyMiles"])>0 ) $totalEmptyMiles = $_POST["totalEmptyMiles"]; 
else $totalEmptyMiles = "NOT_SET";
if( isset($_POST["totalLoadedMiles"]) && strlen($_POST["totalLoadedMiles"])>0 ) $totalLoadedMiles = $_POST["totalLoadedMiles"]; 
else $totalLoadedMiles = "NOT_SET";
if( isset($_POST["totalMiles"]) && strlen($_POST["totalMiles"])>0 ) $totalMiles = $_POST["totalMiles"]; 
else $totalMiles = "NOT_SET";

$dbRec = array( "loadNumber","newLoad","loadStartDate","actionButton","brokerName",
                      "brokerID", "brokerPhone","loadTemp","loadDeliveryDate",
                      "reeferPretripped","sealMatches","tempMatches","emptyPaid",
                       "loadedPaid","totalPaid","endingEmpty","beginingEmpty","emptyActual",
                       "endingLoaded","beginingLoaded","loadedActual","totalMiles",
                       "totalActual","emptyVariance","loadedVariance","totalVariance" );
$fileName = "";
if ( $loadNumber != "" ) $fileName = './testLoad'.$loadNumber.'.txt';
else die("A Loadnumber is required.");
if ( file_exists($fileName) ) {
  $fH = fopen($fileName, "r+");
  if ( $fH ) {
    $dbRec = fgetcsv($fH,0,"\t");
    if ( $dbRec[0] == $loadNumber ) {
      $dbRec[0] = $loadNumber; //	loadNumber
      $newLoad = "Update";  //  $newLoad = $dbRec[1];
      $dbRec[1] = $newLoad;
      $loadStartDate = $dbRec[2]; //	loadStartDate
      $actionButton = "Find"; //	actionButton
      $dbRec[3] = $actionButton;
      if( $brokerName != "" ) $dbRec[4] = $brokerName;
        else $brokerName = $dbRec[4];
      if( $brokerID != "" ) $dbRec[5] = $brokerID;
        else $brokerID = $dbRec[5];
      if( $brokerPhone != "" ) $dbRec[6] = $brokerPhone;
        else $brokerPhone = $dbRec[6];
      if( $loadTemp != "" ) $dbRec[7] = $loadTemp; // loadTemp
        else $loadTemp = $dbRec[7];
      if( $loadDeliveryDate != "" ) $dbRec[8] = $loadDeliveryDate; // loadDeliveryDate
        else $loadDeliveryDate = $dbRec[8];
      if( $reeferPretripped != "" ) $dbRec[9] = $reeferPretripped; // reeferPretripped
        else $reeferPretripped = $dbRec[9];
      if( $reeferPretripped == "Pretripped" ) $reeferChecked = "checked";
        else $reeferChecked = "";
      if( $sealMatches != "" ) $dbRec[10] = $sealMatches; // sealMatches
        else $sealMatches = $dbRec[10];
      if( $sealMatches == "sealChecked" ) $sealChecked = "checked";
        else $sealChecked = "";
      if( $tempMatches != "" ) $dbRec[11] = $tempMatches; // tempMatches
        else $tempMatches = $dbRec[11];
      if( $tempMatches == "tempChecked" ) $tempChecked = "checked";
        else $tempChecked = "";
      if( $emptyPaid != "" ) $dbRec[12] = $emptyPaid; // emptyPaid
        else $emptyPaid = $dbRec[12];
      if( $loadedPaid != "" ) $dbRec[13] = $loadedPaid; // loadedPaid
        else $loadedPaid = $dbRec[13];
      if( $totalPaid != "" ) $dbRec[14] = $totalPaid; // totalPaid
        else $totalPaid = $dbRec[14];
      if( $endingEmpty != "" ) $dbRec[15] = $endingEmpty; // endingEmpty
        else $endingEmpty = $dbRec[15];
      if( $beginingEmpty != "" ) $dbRec[16] = $beginingEmpty; // beginingEmpty
        else $beginingEmpty = $dbRec[16];
      if( $emptyActual != "" ) $dbRec[17] = $emptyActual; // emptyActual
        else $emptyActual = $dbRec[17];
      if( $endingLoaded != "" ) $dbRec[18] = $endingLoaded; // endingLoaded
        else $endingLoaded = $dbRec[18];
      if( $beginingLoaded != "" ) $dbRec[19] = $beginingLoaded; // beginingLoaded
        else $beginingLoaded = $dbRec[19];
      if( $loadedActual != "" ) $dbRec[20] = $loadedActual; // loadedActual
        else $loadedActual = $dbRec[20];
      if( $totalMiles != "" ) $dbRec[21] = $totalMiles; // totalMiles
        else $totalMiles = $dbRec[21];
      if( $totalActual != "" ) $dbRec[22] = $totalActual; // totalActual
        else $totalActual = $dbRec[22];
      if( $emptyVariance != "" ) $dbRec[23] = $emptyVariance; // emptyVariance
        else $emptyVariance = $dbRec[23];
      if( $loadedVariance != "" ) $dbRec[24] = $loadedVariance; // loadedVariance
        else $loadedVariance = $dbRec[24];
      if( $totalVariance != "" ) $dbRec[25] = $totalVariance; // totalVariance
        else $totalVariance = $dbRec[25];
      fseek($fH, 0);
      fputcsv($fH,$dbRec,"\t","\n");
      fclose($fH);
    }
    } else {
    die("File: ".$fileName." could not be opened.");
  }
  } else {  // file does not exist -  this is a New Load
  $fH = fopen($fileName, "w+");
  fseek($fH, 0);
  if ( $newLoad == "new" ) {
    $newLoad = "update";
    $actionButton = "Find";
    $dbRec = array($loadNumber,$newLoad,$loadStartDate,$actionButton,$brokerName,$brokerID,$brokerPhone,$loadTemp,
      $loadDeliveryDate,$reeferPretripped,$sealMatches,$tempMatches,$emptyPaid,$loadedPaid,$totalPaid,
      $endingEmpty,$beginingEmpty,$emptyActual,$endingLoaded,$beginingLoaded,$loadedActual,$totalMiles,
    $totalActual,$emptyVariance,$loadedVariance,$totalVariance);
    fputcsv($fH,$dbRec,"\t","\n");
  }
fclose($fH);}
echo <<<_END
<html>
<head><title>Load Assignment</title>
<!--     <link rel="stylesheet" type="text/css" href='./data/loadassignmentstyle.css' />   -->
<style type="text/css">
body { background-color:#EBBEBE;  }
#emptyCell { background-color:#00002A; }
#titleCell { background-color:#BC9898; }
#computedCell { background-color:#FF7D4D; }
#pageTitle { text-align:center;
  color:#00002A;
font-size:2.25em; }
#cright { font-size:.75em; }
h2  { text-align:center;
color:#00002A;  }
.menubar ul { list-style:none;
  background-color:#FF99FF;
  text-align:center;
  padding:0px;
width:490px;  }
.menubar ul li { display:inline;  }
.menubar ul li a { /*Increase Clickable Area*/
  padding:0px;
  padding-left:15px;
  padding-right:15px;
  /*Remove the Underline for the Link*/
  text-decoration:none;
  color:#000;
background:#FF99FF;  }
/*On Mouse Over the Link*/
.menubar ul li a:hover { color:#fff;
background:#00002A; }
</style>
    <script type="text/javascript">
function catchEvent(eventObj, event, eventHandler) {
  if (eventObj.addEventListener) {
    eventObj.addEventListener(event, eventHandler, false);
  } else if (eventObj.attachEvent) {
    event = "on" + event;
    eventObj.attachEvent(event, eventHandler);
  }
}

function cancelEvent(evnt) {
  if (evnt.preventDefault) {
    evnt.preventDefault();
    evnt.stopPropagation();
  } else {
    evnt.returnValue = false;
    evnt.cancelBubble = true;
  }
}

function setupEvents(evnt) {
  var formObj = "";
  if (document.getElementById("loadForm")) {
    formObj = document.getElementById("loadForm");
    catchEvent(formObj, "submit", validateForm);
  }
}

function validateForm (evnt) {
  var theEvent = evnt ? evnt : window.event;
  var target = theEvent.target ? theEvent.target : theEvent.srcElement;
  var inputFlds = document.getElementById("loadForm").getElementsByTagName("input");
  var varNwLd = document.getElementById("varNwLd");
  var varldStrt = document.getElementById("ldStrtDt");
  
  if ( varNwLd.value == "new" ) {
    varldStrt.value = todaysMonth + "/" + todaysDay + "/" + todaysYear;
  }
}

// loadNumber must be 7 digits
function validateLoadNumber(evnt) {
  var theEvent = evnt ? evnt : window.event;
  var loadNumberPattern = /^[0-9]*$/g;
  var OK = false;
  if (theEvent.name == "loadNumber") {
    if (loadNumberPattern.test(theEvent.value) && theEvent.value.length == 7) {
      OK = true;
      ldNmbr = the Event.value;
    } else {
      OK = false;
      alert("The Load Number is required and must be composed of 7 digits only.");
      theEvent.value = "";
      cancelEvent(evnt);
    }
  }
}
var ldNmbr = "";
var days=['01','02','03','04','05','06','07','08','09','10','11','12','13','14',
          '15','16','17','18','19','20','21','22','23','24','25','26','27','28',
          '29','30','31'];
var daysInMonth=[31,0,31,30,31,30,31,31,30,31,30,31];
var todaysdate = new Date();
var todaysYear = todaysdate.getFullYear();
var todaysMonth = todaysdate.getMonth()+1;
var todaysDay = todaysdate.getDate();

function initVariables(evnt, ldDlvr) {
  var theEvent = evnt ? evnt : window.event;
  var target = theEvent.target ? theEvent.target : theEvent.srcElement;
  var selectDayIndx = document.getElementById("selectDayOpts").selectedIndex;
  var selectDayFlds = document.getElementById("selectDayOpts").options;
  var oD = new Date(todaysYear, todaysMonth-1, 1);
  var delivery = ldDlvr.getDate();
  alert("Load Delivery Date: "+delivery);
  oD.od=oD.getDay()+1;
  daysInMonth[1]=(((oD.getFullYear()%100!=0)&&(oD.getFullYear()%4==0))||(oD.getFullYear()%400==0))?29:28;
  dayIdx = todaysDay - 1;
  mnthIdx = todaysMonth - 1;
  yR = todaysYear;
  for (var i = 0; i < selectDayFlds.length; i++ ) {
    selectDayFlds[i].innerHTML = days[mnthIdx] + " / " + days[dayIdx] + " / " + yR;
    selectDayFlds[i].value = days[mnthIdx] + "/" + days[dayIdx] + "/" + yR;
    if ( selectDayFlds[i].value == ldDlvr ) selectDayFlds[i].selected = true;
    dayIdx++;
    if ( dayIdx+1 > daysInMonth[mnthIdx] ) {
      dayIdx = 0;
      mnthIdx++;
      if ( mnthIdx+1 > 11 ) {
        mnthIdx = 0;
        yR++;
      }
    }
  }
  //    selectDayFlds[0].selected = true;
}

catchEvent(window, "load", setupEvents);
catchEvent(window, "load", initVariables);

function checkPaidMiles(evnt) {
  var theEvent = evnt ? evnt : window.event;
  var mileageNumberPattern = /^[0-9]+.?[0-9]*$/g;
  if ( (theEvent.value.length> 0) && !mileageNumberPattern.test(theEvent.value) ) {
    alert('Miles are digits with a whole and optional fractional part seperated by a ".".');
    theEvent.value = "";
    cancelEvent(evnt);
  }
  else {
    calculatePaidMiles();
  }
}

function calculatePaidMiles() {
  var inputFlds = document.getElementById("loadForm").getElementsByTagName("input");
  var emptyPaidIdx = -1;
  var loadedPaidIdx = -1;
  var totalPaidIdx = -1;
  var emptyActualIdx = -1;
  var loadedActualIdx = -1;
  var totalActualIdx = -1;
  var emptyVarianceIdx = -1;
  var loadedVarianceIdx = -1;
  var totalVarianceIdx = -1;
  for (var i = 0; i < inputFlds.length; i++ ) {
    if (inputFlds[i].type != "submit") {
      switch (inputFlds[i].name) {
        case "emptyPaid":
          emptyPaidIdx = i;
        break;
        case "loadedPaid":
          loadedPaidIdx = i;
        break;
        case "totalPaid":
          totalPaidIdx = i;
        break;
        case "emptyActual":
          emptyActualIdx = i;
        break;
        case "loadedActual":
          loadedActualIdx = i;
        break;
        case "totalActual":
          totalActualIdx = i;
        break;
        case "emptyVariance":
          emptyVarianceIdx = i;
        break;
        case "loadedVariance":
          loadedVarianceIdx = i;
        break;
        case "totalVariance":
          totalVarianceIdx = i;
      }
    }
  }
  if ( inputFlds[emptyPaidIdx].value>0 && inputFlds[loadedPaidIdx].value>0 ) {
    inputFlds[totalPaidIdx].value = new Number(Number(inputFlds[emptyPaidIdx].value) + Number(inputFlds[loadedPaidIdx].value));
  }
  if ( inputFlds[emptyActualIdx].value>0 && inputFlds[loadedActualIdx].value>0 ) {
    inputFlds[totalActualIdx].value = new Number(Number(inputFlds[emptyActualIdx].value) + Number(inputFlds[loadedActualIdx].value));
  }
  if ( inputFlds[emptyPaidIdx].value>0 && inputFlds[emptyActualIdx].value>0 ) {
    inputFlds[emptyVarianceIdx].value = new Number((Number(inputFlds[emptyActualIdx].value) - Number(inputFlds[emptyPaidIdx].value)) / Number(inputFlds[emptyPaidIdx].value) * 100);
  }
  if ( inputFlds[loadedPaidIdx].value>0 && inputFlds[loadedActualIdx].value>0 ) {
    inputFlds[loadedVarianceIdx].value = new Number((Number(inputFlds[loadedActualIdx].value) - Number(inputFlds[loadedPaidIdx].value)) / Number(inputFlds[loadedPaidIdx].value) * 100);
  }
  if ( inputFlds[totalPaidIdx].value>0 && inputFlds[totalActualIdx].value>0 ) {
    inputFlds[totalVarianceIdx].value = new Number((Number(inputFlds[totalActualIdx].value) - Number(inputFlds[totalPaidIdx].value)) / Number(inputFlds[totalPaidIdx].value) * 100);
  }
}

function checkOdoMiles(evnt) {
  var theEvent = evnt ? evnt : window.event;
  var mileageNumberPattern = /^[0-9]+.?[0-9]*$/g;
  if ( (theEvent.value.length>0) && !mileageNumberPattern.exec(theEvent.value) ) {
    alert('Miles are digits with a whole and optional fractional part seperated by a ".".');
    theEvent.value = "";
    cancelEvent(evnt);
  }
  else {
    calculateOdoMiles();
  }
}

function calculateOdoMiles() {
  var inputFlds = document.getElementById("loadForm").getElementsByTagName("input");
  var emptyPaidIdx = -1;
  var loadedPaidIdx = -1;
  var totalPaidIdx = -1;
  var emptyActualIdx = -1;
  var loadedActualIdx = -1;
  var totalActualIdx = -1;
  var emptyVarianceIdx = -1;
  var loadedVarianceIdx = -1;
  var totalVarianceIdx = -1;
  var beginingEmptyIdx = -1;
  var endingEmptyIdx = -1;
  var totalEmptyMilesIdx = -1;
  var beginingLoadedIdx = -1;
  var endingLoadedIdx = -1;
  var totalLoadedMilesIdx = -1;
  var totalMilesIdx = -1;
  
  for (var i = 0; i < inputFlds.length; i++ ) {
    if (inputFlds[i].type != "submit") {
      switch (inputFlds[i].name) {
        case "beginingEmpty":
          beginingEmptyIdx = i;
        break;
        case "endingEmpty":
          endingEmptyIdx = i;
        break;
        case "totalEmptyMiles":
          totalEmptyMilesIdx = i;
        break;
        case "beginingLoaded":
          beginingLoadedIdx = i;
        break;
        case "endingLoaded":
          endingLoadedIdx = i;
        break;
        case "totalLoadedMiles":
          totalLoadedMilesIdx = i;
        break;
        case "totalMiles":
          totalMilesIdx = i;
        break;
        case "emptyPaid":
          emptyPaidIdx = i;
        break;
        case "loadedPaid":
          loadedPaidIdx = i;
        break;
        case "totalPaid":
          totalPaidIdx = i;
        break;
        case "emptyActual":
          emptyActualIdx = i;
        break;
        case "loadedActual":
          loadedActualIdx = i;
        break;
        case "totalActual":
          totalActualIdx = i;
        break;
        case "emptyVariance":
          emptyVarianceIdx = i;
        break;
        case "loadedVariance":
          loadedVarianceIdx = i;
        break;
        case "totalVariance":
          totalVarianceIdx = i;
      }
    }
  }
  if ( inputFlds[beginingEmptyIdx].value>0 && inputFlds[endingEmptyIdx].value>0 ) {
    inputFlds[totalEmptyMilesIdx].value = new Number(Number(inputFlds[endingEmptyIdx].value) - Number(inputFlds[beginingEmptyIdx].value));
    inputFlds[beginingLoadedIdx].value = new Number(inputFlds[endingEmptyIdx].value);
    inputFlds[emptyActualIdx].value = new Number(inputFlds[totalEmptyMilesIdx].value);
  }
  if ( inputFlds[beginingLoadedIdx].value>0 && inputFlds[endingLoadedIdx].value>0 ) {
    inputFlds[totalLoadedMilesIdx].value = new Number(Number(inputFlds[endingLoadedIdx].value) - Number(inputFlds[beginingLoadedIdx].value));
    inputFlds[loadedActualIdx].value = new Number(inputFlds[totalLoadedMilesIdx].value);
  }
  if (inputFlds[totalEmptyMilesIdx].value>0 && inputFlds[totalLoadedMilesIdx].value>0 ) {
    inputFlds[totalMilesIdx].value = new Number(Number(inputFlds[totalEmptyMilesIdx].value) + Number(inputFlds[totalLoadedMilesIdx].value));
    inputFlds[totalActualIdx].value = new Number(inputFlds[totalMilesIdx].value);
  }
  calculatePaidMiles();
}
</script>
  </head>
  <body>
    <form id="loadForm" action="./LoadAction00.php/" method="post">
      <table border="0" align="center" width="80%">
        <tr><td colspan="6" id="pageTitle">Load Assignment Home</td></tr>
        <tr>
          <td colspan="1">&nbsp;</td>
          <td align="center" colspan="4">
            <div class="menubar">
              <ul>
                <li><a href="./pagedloadassignment01.html/ld=ldNmbr" tabindex="18">Shipper</a></li>
                <li><a href="./pagedloadassignment02.html/ld=ldNmbr" tabindex="19">Consignee</a></li>
                <li><a href="./pagedloadassignment03.html/ld=ldNmbr" tabindex="20">Pick(s)</a></li>
                <li><a href="./pagedloadassignment04.html/ld=ldNmbr" tabindex="21">Drop(s)</a></li>
                <li><a href="./pagedloadassignment05.html/ld=ldNmbr" tabindex="22">Fuel</a></li>
              </ul>
            </div>
          </td>
          <td colspan="1">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
          <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        </tr>
        <tr>
          <td align="left" colspan="3">
            <table border="0" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td align="left">Load &#35;:&nbsp;<font color="red" font-size="3em">*</font></td>
                <td align="left">
                  <input type="text" size="20" name="loadNumber" value=$loadNumber tabindex="1" onblur="validateLoadNumber(this)" />
                </td>
                <td align="center">
                  <input id="varNwLd" type="hidden" name="newLoad" value=$newLoad />
                  <input id="ldStrtDt" type="hidden" name="loadStartDate" value=$loadStartDate/>
                  <input type="submit" name="actionButton" value=$actionButton tabindex="2" />
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
              </tr>
            </table>
          </td>
          <td colspan="3" align="center">
            <table border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" valign="top">Delivery:</td>
                <td align="left">
                  <select id="selectDayOpts" name="loadDeliveryDate" value=$loadDeliveryDate tabindex="4" onfocus="initVariables(this,$loadDeliveryDate)" >
                    <option value="01/01/2011">01/01/2011</option>
                    <option value="01/02/2011">01/02/2011</option>
                    <option value="01/03/2011">01/03/2011</option>
                    <option value="01/04/2011">01/04/2011</option>
                    <option value="01/05/2011">01/05/2011</option>
                    <option value="01/06/2011">01/06/2011</option>
                    <option value="01/07/2011">01/07/2011</option>
                  </select>
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left">mm/dd/yyyy</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </td>
        <tr>
                <td align="center" colspan="6">&nbsp;</td>
              </tr>
            </tr>
            <tr>
              <td align="left" colspan="3">
                <table border="0" align="center" cellpadding="5">
                  <tr>
                    <td>Broker Name:</td>
                    <td>
                      <input type="text" size="20" name="brokerName" value=$brokerName tabindex="4" />
                    </td>
                    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>Broker #:</td>
                    <td>
                      <input type="text" size="20" name="brokerID" value=$brokerID tabindex="5" />
                    </td>
                    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>Broker Phone:</td>
                    <td>
                      <input type="text" size="20" name="brokerPhone" value=$brokerPhone tabindex="6" />
                    </td>
                    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
              </tr>
            </table>
          </td>
          <td align="center" colspan="3">
            <table border="0" cellpadding="5">
              <tr>
                <td>
                  <input type="text" size="5" name="loadTemp" value=$loadTemp tabindex="3" />
                </td>
                  <td align="left">BOL Temp:</td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><input type="checkbox" name="reeferPretripped" checked="$reeferChecked" tabindex="6" /></td>
                <td align="left">Reefer Pretrip</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><input type="checkbox" name="tempMatches" checked="$tempChecked" tabindex="7" /></td>
                <td align="left">Set Temp Matches BOL</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><input type="checkbox" name="sealMatches" checked="$sealChecked" tabindex="8" /></td>
                <td align="left">Seal Matches BOL</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td align="center" colspan="6">&nbsp;</td>
        </tr>
        <tr>
          <td align="center" colspan="3">
            <table border="1" cellspacing="1" cellpadding"3" width="90%">
              <tr>
                <td id="emptyCell" style="width:25%" align="center">&nbsp;</td>
                <td id="titleCell" width="25%" align="center">Paid</td>
                <td id="titleCell" width="25%" align="center">Actual</td>
                <td id="titleCell" width="25%" align="center">Variance</td>
              </tr>
              <tr>
                <td id="titleCell" align="center">Empty</td>
                <td align="center"><input type="text" size="8" name="emptyPaid" value=$emptyPaid tabindex="10" onblur="checkPaidMiles(this)" /></td>
                <td id="computedCell" align="center"><input type="text" size="8" name="emptyActual" value="$emptyActual" onfocus="calculatePaidMiles()" /></td>
                <td id="computedCell" align="center"><input type="text" size="8" name="emptyVariance" value=$emptyVariance onfocus="calculatePaidMiles()" /></td>
              </tr>
              <tr>
                <td id="titleCell" align="center">Loaded</td>
                <td align="center"><input type="text" size="8" name="loadedPaid" value=$loadedPaid tabindex="11" onblur="calculatePaidMiles(this)" /></td>
                <td id="computedCell" align="center"><input type="text" size="8" name="loadedActual" value=$loadedActual onfocus="calculatePaidMiles()" /></td>
                <td id="computedCell" align="center"><input type="text" size="8" name="loadedVariance" value=$loadedVariance onfocus="calculatePaidMiles()" /></td>
              </tr>
              <tr>
                <td id="titleCell" align="center">Total</td>
                <td id="computedCell" align="center"><input type="text" size="8" name="totalPaid" value=$totalPaid onfocus="calculatePaidMiles()" /></td>
                <td id="computedCell" align="center"><input type="text" size="8" name="totalActual" value=$totalActual onfocus="calculatePaidMiles()" /></td>
                <td id="computedCell" align="center"><input type="text" size="8" name="totalVariance" value=$totalVariance onfocus="calculatePaidMiles()" /></td>
              </tr>
            </table>
          </td>
          <td align="center" colspan="3">
            <table border="1" cellspacing="1" cellpadding"3" width="90%">
              <tr>
                <td id="emptyCell" style="width:25%" align="center">&nbsp;</td>
                <td id="titleCell" style="width:25%" align="center">Empty</td>
                <td id="titleCell" style="width:25%" align="center">Loaded</td>
                <td id="titleCell" style="width:25%" align="center">Total</td>
              </tr>
              <tr>
                <td id="titleCell" align="center">End Odo</td>
                <td align="center"><input type="text" size="8" name="endingEmpty" value =$endingEmpty tabindex="14" onblur="checkOdoMiles(this)" /></td>
                <td align="center"><input type="text" size="8" name="endingLoaded" value =$endingLoaded tabindex="15" onblur="checkOdoMiles(this)" /></td>
                <td id="emptyCell">&nbsp;</td>
              </tr>
              <tr>
                <td id="titleCell" align="center">Start Odo</td>
                <td align="center"><input type="text" size="8" name="beginingEmpty" value =$beginingEmpty tabindex="13" onblur="checkOdoMiles(this)" /></td>
                <td id="computedCell" align="center"><input type="text" size="8" name="beginingLoaded" value =$beginingLoaded onfocus="calculateOdoMiles()" /></td>
                <td id="emptyCell">&nbsp;</td>
              </tr>
              <tr>
                <td id="titleCell" align="center">Total Miles</td>
                <td id="computedCell" align="center"><input type="text" size="8" name="totalEmptyMiles" value ="$totalEmptyMiles" onfocus="calculateOdoMiles()" /></td>
                <td id="computedCell" align="center"><input type="text" size="8" name="totalLoadedMiles" value ="$totalLoadedMiles" onfocus="calculateOdoMiles()" /></td>
                <td id="computedCell" align="center"><input type="text" size="8" name="totalMiles" value =$totalMiles onfocus="calculateOdoMiles()" /></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td colspan="6" align="center">
            <input type="submit" name="actionButton" value="Update Load Assignment" tabindex="17" />
          </td>
        </tr>
      </table>
    </form>
    <p><font color="red" font-size="1em">*&nbsp;Required field</font></p>
    <p id="cright">&nbsp;&copy;&nbsp;2011&nbsp;Vallecito Software</p>
  </body>
</html>
_END;
?>
