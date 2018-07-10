<!DOCTYPE html>
<html lang="en">

<head>
	<script src="js/jquery-1.11.1.min.js"></script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OpenWB</title>
	<meta name="description" content="Control your charge" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Kevin Wieland" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>
<body>
<?php


$lines = file('/var/www/html/openWB/openwb.conf');
foreach($lines as $line) {

	if(strpos($line, "debug=") !== false) {
		list(, $debugold) = explode("=", $line);
	}
	if(strpos($line, "pvbezugeinspeisung=") !== false) {
		list(, $pvbezugeinspeisungold) = explode("=", $line);
	}
	if(strpos($line, "sofortll=") !== false) {
		list(, $sofortllold) = explode("=", $line);
	}
	if(strpos($line, "dspeed=") !== false) {
		list(, $dspeedold) = explode("=", $line);
	}

	if(strpos($line, "sdmids1=") !== false) {
		list(, $sdmids1old) = explode("=", $line);
	}
	if(strpos($line, "minimalampv=") !== false) {
		list(, $minimalampvold) = explode("=", $line);
	}
	if(strpos($line, "minimalapv=") !== false) {
		list(, $minimalapvold) = explode("=", $line);
	}
	if(strpos($line, "minimalstromstaerke=") !== false) {
		list(, $minimalstromstaerkeold) = explode("=", $line);
	}
	if(strpos($line, "maximalstromstaerke=") !== false) {
		list(, $maximalstromstaerkeold) = explode("=", $line);
	}
	if(strpos($line, "evsecon=") !== false) {
		list(, $evseconold) = explode("=", $line);
	}
	if(strpos($line, "dacregister=") !== false) {
		list(, $dacregisterold) = explode("=", $line);
	}
	if(strpos($line, "dacregisters2=") !== false) {
		list(, $dacregisters2old) = explode("=", $line);
	}

	if(strpos($line, "dacregisters1=") !== false) {
		list(, $dacregisters1old) = explode("=", $line);
	}
	if(strpos($line, "modbusevsesource=") !== false) {
		list(, $modbusevsesourceold) = explode("=", $line);
	}

	if(strpos($line, "modbusevseid=") !== false) {
		list(, $modbusevseidold) = explode("=", $line);
	}
	if(strpos($line, "modbusevselanip=") !== false) {
		list(, $modbusevselanipold) = explode("=", $line);
	}
	if(strpos($line, "evsesources1=") !== false) {
		list(, $evsesources1old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid1s1=") !== false) {
		list(, $sdm120modbusllid1s1old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid2s1=") !== false) {
		list(, $sdm120modbusllid2s1old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid3s1=") !== false) {
		list(, $sdm120modbusllid3s1old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid1s2=") !== false) {
		list(, $sdm120modbusllid1s2old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid2s2=") !== false) {
		list(, $sdm120modbusllid2s2old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid3s2=") !== false) {
		list(, $sdm120modbusllid3s2old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid1=") !== false) {
		list(, $sdm120modbusllid1old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid2=") !== false) {
		list(, $sdm120modbusllid2old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid3=") !== false) {
		list(, $sdm120modbusllid3old) = explode("=", $line);
	}
	if(strpos($line, "evseids1=") !== false) {
		list(, $evseids1old) = explode("=", $line);
	}
	if(strpos($line, "evseids2=") !== false) {
		list(, $evseids2old) = explode("=", $line);
	}

	if(strpos($line, "evselanips1=") !== false) {
		list(, $evselanips1old) = explode("=", $line);
	}
	if(strpos($line, "lastmanagement=") !== false) {
		list(, $lastmanagementold) = explode("=", $line);
	}
	if(strpos($line, "durchslp1=") !== false) {
		list(, $durchslp1old) = explode("=", $line);
	}
	if(strpos($line, "durchslp2=") !== false) {
		list(, $durchslp2old) = explode("=", $line);
	}
	if(strpos($line, "durchslp3=") !== false) {
		list(, $durchslp3old) = explode("=", $line);
	}
	if(strpos($line, "lastmanagements2=") !== false) {
		list(, $lastmanagements2old) = explode("=", $line);
	}
	if(strpos($line, "lastmmaxw=") !== false) {
		list(, $lastmmaxwold) = explode("=", $line);
	}

	if(strpos($line, "evsecons1=") !== false) {
		list(, $evsecons1old) = explode("=", $line);
	}

	if(strpos($line, "evsecons2=") !== false) {
		list(, $evsecons2old) = explode("=", $line);
	}
	if(strpos($line, "evsesources2=") !== false) {
		list(, $evsesources2old) = explode("=", $line);
	}
	if(strpos($line, "evseids1=") !== false) {
		list(, $evseids1old) = explode("=", $line);
	}
	if(strpos($line, "evselanips2=") !== false) {
		list(, $evselanips2old) = explode("=", $line);
	}
	if(strpos($line, "sdmids2=") !== false) {
		list(, $sdmids2old) = explode("=", $line);
	}
	if(strpos($line, "ladeleistungs2modul=") !== false) {
		list(, $ladeleistungs2modulold) = explode("=", $line);
	}
	if(strpos($line, "wattbezugmodul=") !== false) {
		list(, $wattbezugmodulold) = explode("=", $line);
	}

	if(strpos($line, "vzloggerip=") !== false) {
		list(, $vzloggeripold) = explode("=", $line);
	}
	if(strpos($line, "vzloggerline=") !== false) {
		list(, $vzloggerlineold) = explode("=", $line);
	}
	if(strpos($line, "vzloggerkwhline=") !== false) {
		list(, $vzloggerkwhlineold) = explode("=", $line);
	}
	if(strpos($line, "vzloggerekwhline=") !== false) {
		list(, $vzloggerekwhlineold) = explode("=", $line);
	}
	if(strpos($line, "vzloggerpvip=") !== false) {
		list(, $vzloggerpvipold) = explode("=", $line);
	}
	if(strpos($line, "vzloggerpvline=") !== false) {
		list(, $vzloggerpvlineold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbusbezugid=") !== false) {
		list(, $sdm630modbusbezugidold) = explode("=", $line);
	}

	if(strpos($line, "sdm630modbusbezuglanip=") !== false) {
		list(, $sdm630modbusbezuglanipold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbusbezugsource=") !== false) {
		list(, $sdm630modbusbezugsourceold) = explode("=", $line);
	}


	if(strpos($line, "pvwattmodul=") !== false) {
		list(, $pvwattmodulold) = explode("=", $line);
	}

	if(strpos($line, "wrfroniusip=") !== false) {
		list(, $wrfroniusipold) = explode("=", $line);
	}
	if(strpos($line, "ladeleistungmodul=") !== false) {
		list(, $ladeleistungmodulold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbusllid=") !== false) {
		list(, $sdm630modbusllidold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbusllsource=") !== false) {
		list(, $sdm630modbusllsourceold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbuslllanip=") !== false) {
		list(, $sdm630modbuslllanipold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbuswrid=") !== false) {
		list(, $sdm630modbuswridold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbuswrsource=") !== false) {
		list(, $sdm630modbuswrsourceold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbuswrlanip=") !== false) {
		list(, $sdm630modbuswrlanipold) = explode("=", $line);
	}
	if(strpos($line, "socmodul=") !== false) {
		list(, $socmodulold) = explode("=", $line);
	}
	if(strpos($line, "hsocip=") !== false) {
		list(, $hsocipold) = explode("=", $line, 2);
	}
	if(strpos($line, "socmodul1=") !== false) {
		list(, $socmodul1old) = explode("=", $line);
	}
	if(strpos($line, "hsocip1=") !== false) {
		list(, $hsocip1old) = explode("=", $line);
	}
	if(strpos($line, "nachtladen=") !== false) {
		list(, $nachtladenold) = explode("=", $line);
	}
	if(strpos($line, "nachtll=") !== false) {
		list(, $nachtllold) = explode("=", $line);
	}
	if(strpos($line, "nachtladens1=") !== false) {
		list(, $nachtladens1old) = explode("=", $line);
	}
	if(strpos($line, "nachtlls1=") !== false) {
		list(, $nachtlls1old) = explode("=", $line);
	}
	if(strpos($line, "nachtsocs1=") !== false) {
		list(, $nachtsocs1old) = explode("=", $line);
	}
	if(strpos($line, "nachtsoc1s1=") !== false) {
		list(, $nachtsoc1s1old) = explode("=", $line);
	}
	if(strpos($line, "nachtladenabuhrs1=") !== false) {
		list(, $nachtladenabuhrs1old) = explode("=", $line);
	}
	if(strpos($line, "nachtladenbisuhrs1=") !== false) {
		list(, $nachtladenbisuhrs1old) = explode("=", $line);
	}
	if(strpos($line, "wr_http_w_url=") !== false) {
		list(, $wr_http_w_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "wr_http_kwh_url=") !== false) {
		list(, $wr_http_kwh_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_http_w_url=") !== false) {
		list(, $bezug_http_w_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_http_ikwh_url=") !== false) {
		list(, $bezug_http_ikwh_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_http_ekwh_url=") !== false) {
		list(, $bezug_http_ekwh_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "nachtladenabuhr=") !== false) {
		list(, $nachtladenabuhrold) = explode("=", $line);
	}
	if(strpos($line, "nachtladenbisuhr=") !== false) {
		list(, $nachtladenbisuhrold) = explode("=", $line);
	}
	if(strpos($line, "nachtsoc=") !== false) {
		list(, $nachtsocold) = explode("=", $line);
	}
	if(strpos($line, "nachtsoc1=") !== false) {
		list(, $nachtsoc1old) = explode("=", $line);
	}
	if(strpos($line, "mindestuberschuss=") !== false) {
		list(, $mindestuberschussold) = explode("=", $line);
	}
	if(strpos($line, "abschaltuberschuss=") !== false) {
		list(, $abschaltuberschussold) = explode("=", $line);
	}
	if(strpos($line, "ladeleistungs1modul=") !== false) {
		list(, $ladeleistungs1modulold) = explode("=", $line);
	}
	if(strpos($line, "lastmaxap1=") !== false) {
		list(, $lastmaxap1old) = explode("=", $line);
	}
	if(strpos($line, "lastmaxap2=") !== false) {
		list(, $lastmaxap2old) = explode("=", $line);
	}
	if(strpos($line, "lastmaxap3=") !== false) {
		list(, $lastmaxap3old) = explode("=", $line);
	}
	if(strpos($line, "smaemdbezugid=") !== false) {
		list(, $smaemdbezugidold) = explode("=", $line);
	}
	if(strpos($line, "smaemdllid=") !== false) {
		list(, $smaemdllidold) = explode("=", $line);
	}
	if(strpos($line, "smaemdpvid=") !== false) {
		list(, $smaemdpvidold) = explode("=", $line);
	}
	if(strpos($line, "abschaltverzoegerung=") !== false) {
		list(, $abschaltverzoegerungold) = explode("=", $line);
	}
}

$bezug_http_w_urlold = str_replace( "'", "", $bezug_http_w_urlold);
$bezug_http_ikwh_urlold = str_replace( "'", "", $bezug_http_ikwh_urlold);
$bezug_http_ekwh_urlold = str_replace( "'", "", $bezug_http_ekwh_urlold);
$wr_http_w_urlold = str_replace( "'", "", $wr_http_w_urlold);
$wr_http_kwh_urlold = str_replace( "'", "", $wr_http_kwh_urlold);
$hsocipold = str_replace( "'", "", $hsocipold);





?>



	<div class="container">

 
<div class="row"><br>
 <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="./index.php">Zurueck</a></li>
    <li><a href="./settings.php">Ladeeinstellungen</a></li>
    <li class="active"><a href="./modulconfig.php">Modulkonfiguration</a></li>
    <li><a href="./misc.php">Misc</a></li>
  </ul><br><br>
 </div>



     
<form action="./tools/savemodul.php" method="POST">


<div class="row">
	<h3> Erster Ladepunkt </h3>
</div>

<div class="row"><hr>
	<h4> Regelung der EVSE </h4>
</div>
<div class="row">
	<b><label for="evsecon">Anbindung an EVSE:</label></b>
        <select type="text" name="evsecon" id="evsecon">
		<option <?php if($evseconold == "modbusevse\n") echo selected ?> value="modbusevse">Modbusevse</option>
		<option <?php if($evseconold == "dac\n") echo selected ?> value="dac">DAC</option>
	</select>

</div>
<div class="row">
	Gültige Werte dac, modbusevse. Weitere Konfiguration je nach Anbindung erforderlich! Modbus nur mit EVSE DIN getestet. Auf der EVSE muss Register 2003 auf 1 gesetzt werden (Deaktivierung analog Eingang), sonst kein beschreiben möglich<br><br>
</div>
<div id="evsecondac">
	<div class="row bg-success">
		<b><label for="dacregister">Dacregister:</label></b>
		<input type="text" name="dacregister" id="dacregister" value="<?php echo $dacregisterold ?>"><br>
	</div>
	<div class="row bg-success">
	Gültige Werte 0-99. Bei EVSE Anbindung per DAC (MCP 4725) Standardwert meist 62, oft auch 60 oder 48. Abhängig vom verbauten MCP<br>Rauszufinden bei angeschlossenem MCP auf der shell mit dem Befehl: "sudo i2cdetect -y 1"<br><br>
	</div>
</div>
<div id="evseconmod">
<div class="row bg-info">
	<b><label for="modbusevsesource">ModbusEVSE Source:</label></b>
	<input type="text" name="modbusevsesource" id="modbusevsesource" value="<?php echo $modbusevsesourceold ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte /dev/ttyUSB0, /dev/virtualcom0. Serieller Port an dem der Modbus der EVSE angeschlossen ist.<br><br>
</div>
<div class="row bg-info">
	<b><label for="modbusevseid">ModbusEVSE ID:</label></b>
	<input type="text" name="modbusevseid" id="modbusevseid" value="<?php echo $modbusevseidold ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte 1-254. Modbus ID der EVSE.<br><br>
</div>
<div class="row bg-info">
	<b><label for="modbusevselanip">ModbusEVSE LanIP Konverter:</label></b>
	<input type="text" name="modbusevselanip" id="modbusevselanip" value="<?php echo $modbusevselanipold ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte IP. IP Adresse des Modbus/Lan Konverter. Vermutlich gleich der IP des SDM Zählers in der WB.<br><br>
</div>
</div>
<script>
$(function() {
      if($('#evsecon').val() == 'dac') {
		$('#evsecondac').show(); 
		$('#evseconmod').hide();
      } else {
		$('#evsecondac').hide();
	       	$('#evseconmod').show();	
      } 

	$('#evsecon').change(function(){
	        if($('#evsecon').val() == 'dac') {
			$('#evsecondac').show(); 
			$('#evseconmod').hide();
	        } else {
			$('#evsecondac').hide();
		       	$('#evseconmod').show();	
	        } 
	    });
});
</script>

<br>
<div class="row">
	<b><label for="ladeleistungmodul">Ladeleistungmodul:</label></b>
	<select type="text" name="ladeleistungmodul" id="ladeleistungmodul">
		<option <?php if($ladeleistungmodulold == "none\n") echo selected ?> value="none">Nicht vorhanden</option>
		<option <?php if($ladeleistungmodulold == "sdm630modbusll\n") echo selected ?> value="sdm630modbusll">sdm630modbusll</option>
		<option <?php if($ladeleistungmodulold == "smaemd_ll\n") echo selected ?> value="smaemd_ll">smaemd_ll</option>
		<option <?php if($ladeleistungmodulold == "sdm120modbusll\n") echo selected ?> value="sdm120modbusll">sdm120modbusll</option>
	</select>
</div>
<div id="llmnone">
	
</div>
<div id="llmsdm">
	<div class="row bg-info">
		<b><label for="sdm630modbusllsource">SDM Modbus Ladeleistung Source:</label></b>
		<input type="text" name="sdm630modbusllsource" id="sdm630modbusllsource" value="<?php echo $sdm630modbusllsourceold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der SDM in der Wallbox angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm630modbusllid">SDM Modbus Ladeleistung ID:</label></b>
		<input type="text" name="sdm630modbusllid" id="sdm630modbusllid" value="<?php echo $sdm630modbusllidold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des SDM. Getestet SDM230 & SDM630v2.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm630modbuslllanip">IP des Modbus/Lan Konverter:</label></b>
		<input type="text" name="sdm630modbuslllanip" id="sdm630modbuslllanip" value="<?php echo $sdm630modbuslllanipold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte IP. Ist die source "virtualcomX" wird automatisch ein Lan Konverter genutzt.<br><br>
	</div>
</div>
	<div id="sdm120div">
	<div class="row bg-info">
		<b><label for="sdm120modbusllid1">Ladepunkt 1 SDM Zähler 1 ID:</label></b>
		<input type="text" name="sdm120modbusllid1" id="sdm120modbusllid1" value="<?php echo $sdm120modbusllid1old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 1 SDM Zählers in der WB.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid2">Ladepunkt 1 SDM Zähler 2 ID:</label></b>
		<input type="text" name="sdm120modbusllid2" id="sdm120modbusllid2" value="<?php echo $sdm120modbusllid2old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 1 SDM Zählers 2 in der WB.  Ist keine zweite Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid3">Ladepunkt 1 SDM Zähler 3 ID:</label></b>
		<input type="text" name="sdm120modbusllid3" id="sdm120modbusllid3" value="<?php echo $sdm120modbusllid3old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 2 SDM Zählers 3 in der WB. Ist keine dritte Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>
	</div>

<div id="llsma">
	<div class="row">
		<b><label for="smaemdllid">Seriennummer des SMA Energy Meter</label></b>
		<input type="text" name="smaemdllid" id="smaemdllid" value="<?php echo $smaemdllidold ?>"><br>
	</div>
	<div class="row">
		Gültige Werte Seriennummer. Hier die Seriennummer des SMA Meter für die Ladeleistung angeben<br>Infos zum SMA Energy Meter <a href="https://github.com/snaptec/openWB#extras">HIER</a><br>

	</div>
</div>


<script>
$(function() {
      if($('#ladeleistungmodul').val() == 'none') {
		$('#llmnone').show(); 
		$('#llmsdm').hide();
		$('#llsma, #sdm120div').hide();

      } 
      if($('#ladeleistungmodul').val() == 'sdm630modbusll') {
		$('#llmnone').hide(); 
		$('#llmsdm').show();
		$('#llsma, #sdm120div').hide();

      } 
      if($('#ladeleistungmodul').val() == 'smaemd_ll') {
		$('#llmnone').hide(); 
		$('#llmsdm, #sdm120div').hide();
		$('#llsma').show();

      } 
      if($('#ladeleistungmodul').val() == 'sdm120modbusll') {
		$('#llmnone').hide(); 
		$('#llmsdm, #llsma').hide();
		$('#sdm120div').show();

      } 



 

	$('#ladeleistungmodul').change(function(){
	        if($('#ladeleistungmodul').val() == 'none') {
			$('#llmnone').show(); 
			$('#llmsdm').hide();
			$('#llsma, #sdm120div').hide();

	        } 
      if($('#ladeleistungmodul').val() == 'sdm630modbusll') {
		$('#llmnone').hide(); 
		$('#llmsdm').show();
		$('#llsma, #sdm120div').hide();

      } 
      if($('#ladeleistungmodul').val() == 'smaemd_ll') {
		$('#llmnone').hide(); 
		$('#llmsdm, #sdm120div').hide();
		$('#llsma').show();

      } 
      if($('#ladeleistungmodul').val() == 'sdm120modbusll') {
		$('#llmnone').hide(); 
		$('#llmsdm, #llsma').hide();
		$('#sdm120div').show();

      } 

	});
});


</script>
<br>

<div class="row">
	<b><label for="socmodul">SOC Modul:</label></b>
	<select type="text" name="socmodul" id="socmodul">
		<option <?php if($socmodulold == "none\n") echo selected ?> value="none">Nicht vorhanden</option>
		<option <?php if($socmodulold == "soc_http\n") echo selected ?> value="soc_http">soc_http</option>
	</select>
</div>
<div id="socmnone">
	<br>
</div>
<div id="socmhttp">
	<div class="row bg-info">
		Gültige Werte none, soc_http. Wenn nicht vorhanden auf none setzen! Weitere Einstellungen im Modul selbst nötig. Andere auf Anfrage.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="hsocip">SOC Http Abfrage URL:</label></b>
		<input type="text" name="hsocip" id="hsocip" value="<?php echo htmlspecialchars($hsocipold) ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte none, "url". URL für die Abfrage des Soc, Antwort muss der reine Zahlenwert sein.<br><br>
	</div>
</div>

<script>
$(function() {
      if($('#socmodul').val() == 'none') {
		$('#socmnone').show(); 
		$('#socmhttp').hide();
      } else {
		$('#socmnone').hide();
	       	$('#socmhttp').show();	
      } 

	$('#socmodul').change(function(){
	        if($('#socmodul').val() == 'none') {
			$('#socmnone').show(); 
			$('#socmhttp').hide();
	        } else {
			$('#socmnone').hide();
		       	$('#socmhttp').show();	
	        } 
	    });
});
</script>


<hr>
<div class="row">
	<b><h4><label for="lastmanagement">Zweiter Ladepunkte:</label></b>
	<select type="text" name="lastmanagement" id="lastmanagement">
		<option <?php if($lastmanagementold == 0) echo selected ?> value="0">Aus</option>
		<option <?php if($lastmanagementold == 1) echo selected ?> value="1">An</option>
	</select></h4>
</div>
<div id="lastmmaus">
	<br>
</div>
<div id="lastmman" style="margin:5em;">


	

	<div class="row">
	</div>
	<div class="row">
		<b><label for="evsecons1">Anbindung der Ladepunkt 2 EVSE:</label></b>
		<select type="text" name="evsecons1" id="evsecons1">
			<option <?php if($evsecons1old == "modbusevse\n") echo selected ?> value="modbusevse">modbus</option>
			<option <?php if($evsecons1old == "dac\n") echo selected ?> value="dac">DAC</option>

		</select>
	</div>
	<div id="evseconmbs1">
		<div class="row">
			Modbus nur mit EVSE DIN getestet. Auf der EVSE muss Register 2003 auf 1 gesetzt werden (Deaktivierung analog Eingang), sonst kein beschreiben möglich<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="evsesources1">Ladepunkt 2 EVSE Source:</label></b>
			<input type="text" name="evsesources1" id="evsesources1" value="<?php echo $evsesources1old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte /dev/ttyUSB0, /dev/virtualcom0. Serieller Port an dem der Modbus der EVSE angeschlossen ist.<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="evseids1">Ladepunkt 2 EVSE ID:</label></b>
			<input type="text" name="evseids1" id="evseids1" value="<?php echo $evseids1old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte 1-254. Modbus ID der Slave 1 EVSE.<br><br>
		</div>
	</div>
	<div id="evsecondacs1">
		<div class="row bg-success">
			<b><label for="dacregisters1">Dacregister Ladepunkt 2:</label></b>
			<input type="text" name="dacregisters1" id="dacregisters1" value="<?php echo $dacregisters1old ?>"><br>
		</div>
		<div class="row bg-success">
		Gültige Werte 0-99. Bei EVSE Anbindung per DAC (MCP 4725) Standardwert meist 62, oft auch 60 oder 48. Abhängig vom verbauten MCP<br>Rauszufinden bei angeschlossenem MCP auf der shell mit dem Befehl: "sudo i2cdetect -y 1". Muss sich von bei Nutzung von zweimal DAC zum ersten unterscheiden!<br><br>
		</div>
	</div>
<script>
$(function() {
      if($('#evsecons1').val() == 'dac') {
		$('#evsecondacs1').show(); 
		$('#evseconmbs1').hide();
      } else {
		$('#evsecondacs1').hide();
	       	$('#evseconmbs1').show();	
      } 

	$('#evsecons1').change(function(){
	        if($('#evsecons1').val() == 'dac') {
			$('#evsecondacs1').show(); 
			$('#evseconmbs1').hide();
	        } else {
			$('#evsecondacs1').hide();
		       	$('#evseconmbs1').show();	
	        } 
	    });
});
</script>


	<div class="row">
		<b><label for="ladeleistungs1modul">Ladeleistung Ladepunkt 2 Modul:</label></b>
		<select type="text" name="ladeleistungs1modul" id="ladeleistungss1modul">
			<option <?php if($ladeleistungs1modulold == "sdm630modbuslls1\n") echo selected ?> value="sdm630modbuslls1">sdm630modbuslls1</option>
			<option <?php if($ladeleistungs1modulold == "sdm120modbuslls1\n") echo selected ?> value="sdm120modbuslls1">sdm120modbuslls1</option>
		</select>
	</div>
	<div class="row">
		Modul zur Messung der Ladeleistung des zweiten Ladepunktes.<br><br>
	</div>
	<div id="sdm630s1div">
		<div class="row bg-info">
			<b><label for="sdmids1">Ladepunkt 2 SDM Zähler ID:</label></b>
			<input type="text" name="sdmids1" id="sdmids1" value="<?php echo $sdmids1old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte 1-254. Modbus ID des Ladepunkt 2 SDM Zählers in der WB.<br><br>
		</div>
	</div>
	<div id="sdm120s1div">
	<div class="row bg-info">
		<b><label for="sdm120modbusllid1s1">Ladepunkt 2 SDM Zähler 1 ID:</label></b>
		<input type="text" name="sdm120modbusllid1s1" id="sdm120modbusllid1s1" value="<?php echo $sdm120modbusllid1s1old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 2 SDM Zählers in der WB.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid2s1">Ladepunkt 2 SDM Zähler 2 ID:</label></b>
		<input type="text" name="sdm120modbusllid2s1" id="sdm120modbusllid2s1" value="<?php echo $sdm120modbusllid2s1old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 2 SDM Zählers 2 in der WB.  Ist keine zweite Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid3s1">Ladepunkt 2 SDM Zähler 3 ID:</label></b>
		<input type="text" name="sdm120modbusllid3s1" id="sdm120modbusllid3s1" value="<?php echo $sdm120modbusllid3s1old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 2 SDM Zählers 3 in der WB. Ist keine dritte Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>
	</div>

	<div class="row bg-info">
		<b><label for="evselanips1">EVSE LanIP Konverter:</label></b>
		<input type="text" name="evselanips1" id="evselanips1" value="<?php echo $evselanips1old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte IP. IP Adresse des Modbus/Lan Konverter.<br><br>
	</div>
	<div class="row">
		<b><label for="socmodul1">SOC Modul für zweiten Ladepunkt:</label></b>
	<select type="text" name="socmodul1" id="socmodul1">
		<option <?php if($socmodul1old == "none\n") echo selected ?> value="none">Nicht vorhanden</option>
		<option <?php if($socmodul1old == "soc_http1\n") echo selected ?> value="soc_http1">soc_http</option>
	</select>
	</div>

	<div id="socmnone1">
	<br>
	</div>
	<div id="socmhttp1">
	<div class="row">
		Gültige Werte none, soc_http. Wenn nicht vorhanden auf none setzen!<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="hsocip1">SOC zweiter Ladepunkt Http Abfrage URL:</label></b>
		<input type="text" name="hsocip1" id="hsocip1" value="<?php echo $hsocip1old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte none, "url". URL für die Abfrage des Soc der zweiten WB, Antwort muss der reine Zahlenwert sein.<br><br>
	</div>
</div>
<script>
$(function() {
      if($('#ladeleistungss1modul').val() == 'sdm630modbuslls1') {
		$('#sdm630s1div').show(); 
		$('#sdm120s1div').hide();
      } else {
		$('#sdm630s1div').hide();
	       	$('#sdm120s1div').show();	
      } 

	$('#ladeleistungss1modul').change(function(){
	        if($('#ladeleistungss1modul').val() == 'sdm630modbuslls1') {
			$('#sdm630s1div').show(); 
			$('#sdm120s1div').hide();
	        } else {
			$('#sdm630s1div').hide();
		       	$('#sdm120s1div').show();	
	        } 
	    });
});
</script>
<script>
$(function() {
      if($('#socmodul1').val() == 'none') {
		$('#socmnone1').show(); 
		$('#socmhttp1').hide();
      } else {
		$('#socmnone1').hide();
	       	$('#socmhttp1').show();	
      } 

	$('#socmodul1').change(function(){
	        if($('#socmodul1').val() == 'none') {
			$('#socmnone1').show(); 
			$('#socmhttp1').hide();
	        } else {
			$('#socmnone1').hide();
		       	$('#socmhttp1').show();	
	        } 
	    });
});
</script>

</div>
<script>
$(function() {
      if($('#lastmanagement').val() == '0') {
		$('#lastmmaus').show(); 
		$('#lastmman').hide();
		$('#durchslp2').hide();
		$('#nachtls1div').hide();
      } else {
		$('#lastmmaus').hide();
		$('#lastmman').show();	
		$('#durchslp2').show();
		$('#nachtls1div').show();


      } 

	$('#lastmanagement').change(function(){
	        if($('#lastmanagement').val() == '0') {
			$('#lastmmaus').show(); 
			$('#lastmman').hide();
			$('#durchslp2').hide();
			$('#nachtls1div').hide();


	        } else {
			$('#lastmmaus').hide();
			$('#lastmman').show();
			$('#durchslp2').show();
			$('#nachtls1div').show();
       		} 
	    });
});
</script>

<div class="row">
	<b><h4><label for="lastmanagements2">Dritter Ladepunkt:</label></b>
	<select type="text" name="lastmanagements2" id="lastmanagements2">
		<option <?php if($lastmanagements2old == 0) echo selected ?> value="0">Aus</option>
		<option <?php if($lastmanagements2old == 1) echo selected ?> value="1">An</option>
	</select></h4>
</div>
<div class="row">
</div>
<div id="lasts2mmaus">
	<br>
</div>
<div id="lasts2mman" style="margin:5em;">


	

	<div class="row">
	</div>
	<div class="row">
		<b><label for="evsecons2">Anbindung der Ladepunkt 3 EVSE:</label></b>
		<select type="text" name="evsecons2" id="evsecons2">
			<option <?php if($evsecons2old == "modbusevse\n") echo selected ?> value="modbusevse">modbus</option>
			<option <?php if($evsecons2old == "dac\n") echo selected ?> value="dac">DAC</option>

		</select>
	</div>
	<div id="evseconmbs2">
		<div class="row">
			Modbus nur mit EVSE DIN getestet. Auf der EVSE muss Register 2003 auf 1 gesetzt werden (Deaktivierung analog Eingang), sonst kein beschreiben möglich<br>Zudem gibt es einen Bug das die EVSE ID der EVSE DIN sich nicht verstellen und speichern lässt!<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="evsesources2">Ladepunkt 3 EVSE Source:</label></b>
			<input type="text" name="evsesources2" id="evsesources2" value="<?php echo $evsesources2old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte /dev/ttyUSB0, /dev/virtualcom0. Serieller Port an dem der Modbus der EVSE angeschlossen ist.<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="evseids2">Ladepunkt 3 EVSE ID:</label></b>
			<input type="text" name="evseids2" id="evseids2" value="<?php echo $evseids2old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte 1-254. Modbus ID der Slave 2 EVSE.<br><br>
		</div>
	</div>
	<div id="evsecondacs2">
		<div class="row bg-success">
			<b><label for="dacregisters2">Dacregister Ladepunkt 3:</label></b>
			<input type="text" name="dacregisters2" id="dacregisters2" value="<?php echo $dacregisters2old ?>"><br>
		</div>
		<div class="row bg-success">
		Gültige Werte 0-99. Bei EVSE Anbindung per DAC (MCP 4725) Standardwert meist 62, oft auch 60 oder 48. Abhängig vom verbauten MCP<br>Rauszufinden bei angeschlossenem MCP auf der shell mit dem Befehl: "sudo i2cdetect -y 1". Muss sich von bei Nutzung von zweimal DAC zum ersten unterscheiden!<br><br>
		</div>
	</div>
<script>
$(function() {
      if($('#evsecons2').val() == 'dac') {
		$('#evsecondacs2').show(); 
		$('#evseconmbs2').hide();
      } else {
		$('#evsecondacs2').hide();
	       	$('#evseconmbs2').show();	
      } 

	$('#evsecons2').change(function(){
	        if($('#evsecons2').val() == 'dac') {
			$('#evsecondacs2').show(); 
			$('#evseconmbs2').hide();
	        } else {
			$('#evsecondacs2').hide();
		       	$('#evseconmbs2').show();	
	        } 
	    });
});
</script>


	<div class="row">
		<b><label for="ladeleistungs2modul">Ladeleistung Ladepunkt 3 Modul:</label></b>
		<select type="text" name="ladeleistungs2modul" id="ladeleistungss2modul">
			<option <?php if($ladeleistungs2modulold == sdm630modbuslls2) echo selected ?> value="sdm630modbuslls2">sdm630modbuslls2</option>
			<option <?php if($ladeleistungs2modulold == sdm120modbuslls2) echo selected ?> value="sdm120modbuslls2">sdm120modbuslls2</option>

		</select>
	</div>
	<div class="row">
		Modul zur Messung der Ladeleistung des dritten Ladepunktes.<br><br>
	</div>
	<div id="sdm630s2div">
		<div class="row bg-info">
			<b><label for="sdmids2">Ladepunkt 3 SDM Zähler ID:</label></b>
			<input type="text" name="sdmids2" id="sdmids2" value="<?php echo $sdmids2old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte 1-254. Modbus ID des Ladepunkt 3 SDM Zählers in der WB.<br><br>
		</div>
	</div>
	<div id="sdm120s2div">
	<div class="row bg-info">
		<b><label for="sdm120modbusllid1s2">Ladepunkt 3 SDM Zähler 1 ID:</label></b>
		<input type="text" name="sdm120modbusllid1s2" id="sdm120modbusllid1s2" value="<?php echo $sdm120modbusllid1s2old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 3 SDM Zählers in der WB.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid2s2">Ladepunkt 3 SDM Zähler 2 ID:</label></b>
		<input type="text" name="sdm120modbusllid2s2" id="sdm120modbusllid2s2" value="<?php echo $sdm120modbusllid2s2old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 3 SDM Zählers 2 in der WB.  Ist keine zweite Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid3s2">Ladepunkt 3 SDM Zähler 3 ID:</label></b>
		<input type="text" name="sdm120modbusllid3s2" id="sdm120modbusllid3s2" value="<?php echo $sdm120modbusllid3s2old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 2 SDM Zählers 3 in der WB. Ist keine dritte Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>
	</div>


	<div class="row bg-info">
		<b><label for="evselanips2">EVSE LanIP Konverter:</label></b>
		<input type="text" name="evselanips2" id="evselanips2" value="<?php echo $evselanips2old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte IP. IP Adresse des Modbus/Lan Konverter.<br><br>
	</div>

</div>
<script>
$(function() {
      if($('#ladeleistungss2modul').val() == 'sdm630modbuslls2') {
		$('#sdm630s2div').show(); 
		$('#sdm120s2div').hide();
      } else {
		$('#sdm630s2div').hide();
	       	$('#sdm120s2div').show();	
      } 

	$('#ladeleistungss2modul').change(function(){
	        if($('#ladeleistungss2modul').val() == 'sdm630modbuslls2') {
			$('#sdm630s2div').show(); 
			$('#sdm120s2div').hide();
	        } else {
			$('#sdm630s2div').hide();
		       	$('#sdm120s2div').show();	
	        } 
	    });
});
</script>

<script>
$(function() {
      if($('#lastmanagements2').val() == '0') {
		$('#lasts2mmaus').show(); 
		$('#lasts2mman').hide();
		$('#durchslp3').hide();
      } else {
		$('#lasts2mmaus').hide();
		$('#lasts2mman').show();
		$('#durchslp3').show();
      } 

	$('#lastmanagements2').change(function(){
	        if($('#lastmanagements2').val() == '0') {
			$('#lasts2mmaus').show(); 
			$('#lasts2mman').hide();
			$('#durchslp3').hide();
	        } else {
			$('#lasts2mmaus').hide();
			$('#lasts2mman').show();
			$('#durchslp3').show();
	        } 
	    });
});
</script>

<div class="row">	<hr>
	<h3> Strombezugsmessmodule (EVU-Übergabepunkt)</h3>
</div>
<div class="row">
	<b><label for="wattbezugmodul">Strombezugsmodul:</label></b>
	<select type="text" name="wattbezugmodul" id="wattbezugmodul">
		<option <?php if($wattbezugmodulold == "none\n") echo selected ?> value="none">Nicht vorhanden</option>
		<option <?php if($wattbezugmodulold == "vzlogger\n") echo selected ?> value="vzlogger">vzlogger</option>
		<option <?php if($wattbezugmodulold == "sdm630modbusbezug\n") echo selected ?> value="sdm630modbusbezug">sdm630modbusbezug</option>
		<option <?php if($wattbezugmodulold == "bezug_http\n") echo selected ?> value="bezug_http">bezug_http</option>
		<option <?php if($wattbezugmodulold == "smaemd_bezug\n") echo selected ?> value="smaemd_bezug">smaemd_bezug</option>
		<option <?php if($wattbezugmodulold == "bezug_fronius_sm\n") echo selected ?> value="bezug_fronius_sm">bezug_fronius_sm</option>
	</select>
</div>
<div class="row">
	Weitere Einstellungen je nach Modul beachten.<br><br>
</div>
<div id="wattbezugnone">
	<br>
</div>
<div id="wattbezugsdm">
<div class="row bg-info">
	<b><label for="sdm630modbusbezugsource">SDM Modbus Bezug Source:</label></b>
	<input type="text" name="sdm630modbusbezugsource" id="sdm630modbusbezugsource" value="<?php echo $sdm630modbusbezugsourceold ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte /dev/ttyUSB0, /dev/virtualcom. Serieller Port an dem der SDM angeschlossen ist.<br><br>
</div>
<div class="row bg-info">
	<b><label for="sdm630modbusbezugid">SDM Modbus Bezug ID:</label></b>
	<input type="text" name="sdm630modbusbezugid" id="sdm630modbusbezugid" value="<?php echo $sdm630modbusbezugidold ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte 1-254. Modbus ID des SDM. Getestet SDM230 & SDM630v2.<br><br>
</div>
<div class="row bg-info">
	<b><label for="sdm630modbusbezuglanip">IP des Modbus/Lan Konverter:</label></b>
	<input type="text" name="sdm630modbusbezuglanip" id="sdm630modbusbezuglanip" value="<?php echo $sdm630modbusbezuglanipold ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte IP. Ist die source "virtualcomX" wird automatisch ein Lan Konverter genutzt.<br><br>
</div>
</div>
<div id="wattbezugvz">
	<div class="row bg-warning">
		<b><label for="vzloggerip">Vzlogger IP Adresse inkl Port:</label></b>
		<input type="text" name="vzloggerip" id="vzloggerip" value="<?php echo $vzloggeripold ?>"><br>
	</div>
	<div class="row bg-warning">
		Gültige Werte IP:Port z.B. 192.168.0.12:8080. <br><br>
	</div>
	<div class="row bg-warning">
		<b><label for="vzloggerline">Vzlogger Watt Zeile:</label></b>
		<input type="text" name="vzloggerline" id="vzloggerline" value="<?php echo $vzloggerlineold ?>"><br>
	</div>
	<div class="row bg-warning">
		Gültige Werte z.B. Zahl. Bitte auf der Shell ausführen: "curl -s IPdesVZLogger:Port/ | jq ."<br> Nun zählen in welcher Zeile die aktullen Watt stehen und diesen hier eintragen. Der Wert dient rein dem Logging. Wird dieses nicht genutzt oder ist der Wert nicht verfügbar bitte auf "none" setzen, dann wird die Abfrage nicht ausgeführt.<br><br>
	</div>
	<div class="row bg-warning">
		<b><label for="vzloggerline">Vzlogger Bezug kWh Zeile:</label></b>
		<input type="text" name="vzloggerkwhline" id="vzloggerkwhline" value="<?php echo $vzloggerkwhlineold ?>"><br>
	</div>
	<div class="row bg-warning">
		Gültige Werte z.B. Zahl. Bitte auf der Shell ausführen: "curl -s IPdesVZLogger:Port/ | jq ."<br> Nun zählen in welcher Zeile die Gesamt kWh stehen und diesen hier eintragen. Der Wert dient rein dem Logging. Wird dieses nicht genutzt oder ist der Wert nicht verfügbar bitte auf "none" setzen, dann wird die Abfrage nicht ausgeführt.<br><br>
	</div>
	<div class="row bg-warning">
		<b><label for="vzloggerline">Vzlogger Einspeisung kWh Zeile:</label></b>
		<input type="text" name="vzloggerekwhline" id="vzloggerekwhline" value="<?php echo $vzloggerekwhlineold ?>"><br>
	</div>
	<div class="row bg-warning">
		Gültige Werte z.B. Zahl. Bitte auf der Shell ausführen: "curl -s IPdesVZLogger:Port/ | jq ."<br> Nun zählen in welcher Zeile die Gesamt eingespeisten kWh stehen und diesen hier eintragen.<br><br>
	</div>
</div>
<div id="wattbezughttp">
	<div class="row">
		<b><label for="bezug_http_w_url">Vollständige URL für den Watt Bezug</label></b>
		<input type="text" name="bezug_http_w_url" id="bezug_http_w_url" value="<?php echo htmlspecialchars($bezug_http_w_urlold) ?>"><br>
	</div>
	<div class="row">
		Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Enthält der Rückgabewert etwas anderes als "-" (für Einspeisung) oder "0-9" wird der Wert auf null gesetzt. Der Wert muss in Watt sein.<br>
	</div>
	<div class="row">
		<b><label for="bezug_http_ikwh_url">Vollständige URL für den kWh Bezug</label></b>
		<input type="text" name="bezug_http_ikwh_url" id="bezug_http_ikwh_url" value="<?php echo htmlspecialchars($bezug_http_ikwh_urlold) ?>"><br>
	</div>
	<div class="row">
		Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Der Wert muss in WattStunden sein. Der Wert dient rein dem Logging. Wird dieses nicht genutzt oder ist der Wert nicht verfügbar bitte auf "none" setzen, dann wird die Abfrage nicht ausgeführt.<br>
	</div>
	<div class="row">
		<b><label for="bezug_http_ekwh_url">Vollständige URL für die kWh Einspeisung</label></b>
		<input type="text" name="bezug_http_ekwh_url" id="bezug_http_ekwh_url" value="<?php echo htmlspecialchars($bezug_http_ekwh_urlold) ?>"><br>
	</div>
	<div class="row">
	Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Der Wert muss in WattStunden sein. Der Wert dient rein dem Logging. Wird dieses nicht genutzt oder ist der Wert nicht verfügbar bitte auf "none" setzen, dann wird die Abfrage nicht ausgeführt.<br>
	</div>
</div>
<div id="wattbezugsma">
	<div class="row">
		<b><label for="smaemdbezugid">Seriennummer des SMA Energy Meter</label></b>
		<input type="text" name="smaemdbezugid" id="smaemdbezugid" value="<?php echo $smaemdbezugidold ?>"><br>
	</div>
	<div class="row">
		Gültige Werte Seriennummer. Hier die Seriennummer des SMA Meter für Bezug/Einspeisung angeben<br> Infos zum SMA Energy Meter <a href="https://github.com/snaptec/openWB#extras">HIER</a><br>
	</div>
</div>
<div id="wattbezugfronius">
	<div class="row">
		Die IP des Wechselrichters wird im dazugehörigen Fronius PV Modul eingestellt.<br>
	</div>
</div>
	

<script>
$(function() {
      if($('#wattbezugmodul').val() == 'vzlogger') {
		$('#wattbezugvz').show(); 
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();


      } 
   if($('#wattbezugmodul').val() == 'sdm630modbusbezug')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').show();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();

      } 
   if($('#wattbezugmodul').val() == 'none')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').show();
		$('#wattbezughttp').hide();
		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();

      } 
   if($('#wattbezugmodul').val() == 'bezug_http')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').show();
 		$('#wattbezugsma').hide();
 		$('#wattbezugfronius').hide();
    } 
   if($('#wattbezugmodul').val() == 'smaemd_bezug')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').show();
 		$('#wattbezugfronius').hide();
   }
   if($('#wattbezugmodul').val() == 'bezug_fronius_sm')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
 		$('#wattbezugfronius').show();
    } 
   $('#wattbezugmodul').change(function(){
	      if($('#wattbezugmodul').val() == 'vzlogger') {
		$('#wattbezugvz').show(); 
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
 		$('#wattbezugfronius').hide();

      } 
   if($('#wattbezugmodul').val() == 'sdm630modbusbezug')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').show();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
 		$('#wattbezugfronius').hide();

      } 
   if($('#wattbezugmodul').val() == 'none')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').show();
		$('#wattbezughttp').hide();
  		$('#wattbezugsma').hide();
  		$('#wattbezugfronius').hide();
    } 
   if($('#wattbezugmodul').val() == 'bezug_http')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').show();
  		$('#wattbezugsma').hide();
  		$('#wattbezugfronius').hide();
    } 
   if($('#wattbezugmodul').val() == 'smaemd_bezug')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
  		$('#wattbezugsma').show();
  		$('#wattbezugfronius').hide();
   } 
   if($('#wattbezugmodul').val() == 'bezug_fronius_sm')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
  		$('#wattbezugsma').hide();
  		$('#wattbezugfronius').show();
    } 
	    });
});
</script>
<div class="row"><hr>
	<h3> PV Module </h3>
</div>
<div class="row">
	<b><label for="pvwattmodul">PV Modul:</label></b>
	<select type="text" name="pvwattmodul" id="pvwattmodul">
		<option <?php if($pvwattmodulold == "none\n") echo selected ?> value="none">Nicht vorhanden</option>
		<option <?php if($pvwattmodulold == "wr_fronius\n") echo selected ?> value="wr_fronius">wr_fronius</option>
		<option <?php if($pvwattmodulold == "sdm630modbuswr\n") echo selected ?> value="sdm630modbuswr">sdm630modbuswr</option>
		<option <?php if($pvwattmodulold == "vzloggerpv\n") echo selected ?> value="vzloggerpv">vzloggerpv</option>
		<option <?php if($pvwattmodulold == "wr_http\n") echo selected ?> value="wr_http">wr_http</option>
		<option <?php if($pvwattmodulold == "smaemd_pv\n") echo selected ?> value="smaemd_pv">smaemd_pv</option>
</select>
</div>
<div class="row">
	Weitere Module auf Anfrage.<br><br>
</div>
<div id="pvnone">
	<br>
</div>
<div id="pvwrfronius">
	<div class="row">
		<b><label for="wrfroniusip">WR Fronius IP:</label></b>
		<input type="text" name="wrfroniusip" id="wrfroniusip" value="<?php echo $wrfroniusipold ?>"><br>
	</div>
	<div class="row">
		Gültige Werte IP. IP Adresse Fronius Webinterface.<br><br>
	</div>
</div>
<div id="pvsdmwr">
	<div class="row bg-info">
		<b><label for="sdm630modbuswrsource">SDM Modbus Wechselrichterleistung Source:</label></b>
		<input type="text" name="sdm630modbuswrsource" id="sdm630modbuswrsource" value="<?php echo $sdm630modbuswrsourceold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der SDM in der Wallbox angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm630modbuswrid">SDM Modbus Wechselrichterleistung ID:</label></b>
		<input type="text" name="sdm630modbuswrid" id="sdm630modbuswrid" value="<?php echo $sdm630modbuswridold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des SDM. Getestet SDM230 & SDM630v2.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm630modbuswrlanip">IP des Modbus/Lan Konverter:</label></b>
		<input type="text" name="sdm630modbuswrlanip" id="sdm630modbuswrlanip" value="<?php echo $sdm630modbuswrlanipold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte IP. Ist die source "virtualcomX" wird automatisch ein Lan Konverter genutzt.<br><br>
	</div>
</div>
<div id="pvvzl">
	<div class="row bg-warning">
		<b><label for="vzloggerpvip">Vzloggerpv IP Adresse inkl Port:</label></b>
		<input type="text" name="vzloggerpvip" id="vzloggerpvip" value="<?php echo $vzloggerpvipold ?>"><br>
	</div>
	<div class="row bg-warning">
		Gültige Werte IP:Port z.B. 192.168.0.12:8080. <br><br>
	</div>
	<div class="row bg-warning">
		<b><label for="vzloggerpvline">Vzloggerpv Zeile:</label></b>
		<input type="text" name="vzloggerpvline" id="vzloggerpvline" value="<?php echo $vzloggerpvlineold ?>"><br>
	</div>
	<div class="row bg-warning">
		Gültige Werte z.B. Zahl. Bitte auf der Shell ausführen: "curl -s IPdesVZLogger:Port/ | jq ."<br> Nun zählen in welcher Zeile der gewünschte Wert steht und diesen hier eintragen.<br><br>
	</div>
</div>
<div id="pvhttp">
	<div class="row">
		<b><label for="wr_http_w_url">Vollständige URL für die Wechselrichter Watt</label></b>
		<input type="text" name="wr_http_w_url" id="wr_http_w_url" value="<?php echo htmlspecialchars($wr_http_w_urlold) ?>"><br>
	</div>
	<div class="row">
		Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Enthält der Rückgabewert etwas anderes als wird der Wert auf null gesetzt. Der Wert muss in Watt sein.
	</div>
	<div class="row">
		<b><label for="wr_http_kwh_url">Vollständige URL für die Wechselrichter absolut kWh</label></b>
		<input type="text" name="wr_http_kwh_url" id="wr_http_kwh_url" value="<?php echo htmlspecialchars($wr_http_kwh_urlold) ?>"><br>
	</div>
	<div class="row">
		Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Der Wert muss in WattStunden sein. Der Wert dient rein dem Logging. Wird dieses nicht genutzt oder ist der Wert nicht verfügbar bitte auf "none" setzen, dann wird die Abfrage nicht ausgeführt.<br>
	</div>


</div>
<div id="pvsma">
	<div class="row">
		<b><label for="smaemdpvid">Seriennummer des SMA Energy Meter</label></b>
		<input type="text" name="smaemdpvid" id="smaemdpvid" value="<?php echo $smaemdpvidold ?>"><br>
	</div>
	<div class="row">
		Gültige Werte Seriennummer. Hier die Seriennummer des SMA Meter für die PV angeben<br>Infos zum SMA Energy Meter <a href="https://github.com/snaptec/openWB#extras">HIER</a><br>

	</div>
</div>

<script>
$(function() {
      if($('#pvwattmodul').val() == 'vzloggerpv') {
		$('#pvvzl').show(); 
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();

      } 
   if($('#pvwattmodul').val() == 'sdm630modbuswr')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').show();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();

      } 
   if($('#pvwattmodul').val() == 'wr_fronius')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').show();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();

      } 
   if($('#pvwattmodul').val() == 'none')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').show();
		$('#pvhttp').hide();
		$('#pvsma').hide();

   } 
   if($('#pvwattmodul').val() == 'wr_http')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').show();
 		$('#pvsma').hide();
     } 
   if($('#pvwattmodul').val() == 'smaemd_pv')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
 		$('#pvsma').show();
     } 
	$('#pvwattmodul').change(function(){
             if($('#pvwattmodul').val() == 'vzloggerpv') {
		$('#pvvzl').show(); 
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
 		$('#pvhttp').hide();
   		$('#pvsma').hide();
   
	     } 
   if($('#pvwattmodul').val() == 'sdm630modbuswr')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').show();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();

      } 
   if($('#pvwattmodul').val() == 'wr_fronius')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').show();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();

      } 
   if($('#pvwattmodul').val() == 'none')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').show();
		$('#pvhttp').hide();
		$('#pvsma').hide();

   }
   if($('#pvwattmodul').val() == 'wr_http')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').show();
		$('#pvsma').hide();

   } 
   if($('#pvwattmodul').val() == 'smaemd_pv')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').show();

      } 

	});
});
</script>






<br><br>
<button type="submit" class="btn btn-primary btn-green">Save</button>	 
 </form><br><br />
<br><br>
<br><br>
 <button onclick="window.location.href='./index.php'" class="btn btn-primary btn-blue">Zurück</button>
<br><br>
<br><br>
</div>
</body></html>
