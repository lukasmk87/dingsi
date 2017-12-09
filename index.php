<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!--
gentle - unicorn Template
copyright (c) 2012 marcos software, all rights reserved                  
                                                                        
this file may not be redistributed in whole or significant part and is subject to the marcos software license.
Dieses Designtemplate darf nur in Verbindung mit unicorn benutzt werden. Weitere Infos unter http://www.marcos-software.de/unicorn-rakuten/
Anderweitige Nutzung / Teilnutzung ist ohne schriftliche Genehmigung nicht erlaubt und wird geahndet. 
Weitere Informationen zu den Nutzungsbedingungen siehe http://www.marcos-software.de
License / Usage: http://www.marcos-software.de
@author: marcos software, <info@marcos-software.de>
@copyright: 2012, marcos-software.de, http://www.marcos-software.de   
-->
<html>
 
  <head>
  
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>$#Text.Artikelname#$</title>

		<script src="//code.jquery.com/jquery-1.12.4.js"></script>
	  
		<script>
			
		function showhidewhisky() {
			var div = document.getElementById("inhalt-whisky");
			if (div.className === "hide") {
				div.className = "show";
			} else {
				div.className = "hide";
			}
		}
			
		function showhidewein() {
			var div = document.getElementById("inhalt-wein");
			if (div.className === "hide") {
				div.className = "show";
			} else {
				div.className = "hide";
			}
		}
			
		function showhiderum() {
			var div = document.getElementById("inhalt-rum");
			if (div.className === "hide") {
				div.className = "show";
			} else {
				div.className = "hide";
			}
		}
			
		function showhidezigarren() {
			var div = document.getElementById("inhalt-zigarren");
			if (div.className === "hide") {
				div.className = "show";
			} else {
				div.className = "hide";
			}
		}
			
		</script>
		
		<style>
		
			.hide {
				display: none;
			}
			
			.show {
				display: block;
			}
			
	  	</style>
		
  </head>
  
  <body>
   
    <img src="http://storage.marcos-software.de/files/image/WK8e6S5x848Q2Bq9.png"><br><br><br>
    
    <font size="5">
    	<b>$#Text.Artikelname#$</b>
    </font>
    
    <br><br>
    
    <font size="2">
    	<!--$#Text.Hersteller#$<br>
    	$#Text.HAN#$<br>
    	$#Merkmal.Inhalt#$<br>
	-->
	<!--
	$#Merkmal.Abfüller#$<br>
	$#Merkmal.Abgefüllt am:#$<br>
	$#Merkmal.Alkoholgehalt#$<br>
	$#Merkmal.Alter#$<br>
	$#Merkmal.Anbaugebiet#$<br>
	$#Merkmal.Aroma#$<br>
	$#Merkmal.Aromatisiert#$<br>
	$#Merkmal.Aromatisierung#$<br>
	$#Merkmal.Ausbau#$<br>
	$#Merkmal.Außenmaterial#$<br>
	$#Merkmal.Biersorte#$<br>
	$#Merkmal.Bitterwert / IBU#$<br>
	$#Merkmal.Brauerei#$<br>
	$#Merkmal.Deckblatt#$<br>
	$#Merkmal.Destilliert am#$<br>
	$#Merkmal.Durchmesser#$<br>
	$#Merkmal.Einlage#$<br>
	$#Merkmal.Enthält#$<br>
	$#Merkmal.Fassstärke#$<br>
	$#Merkmal.Flamme#$<br>
	$#Merkmal.Flaschenanzahl#$<br>
	$#Merkmal.Format#$<br>
	$#Merkmal.Gefiltert#$<br>
	$#Merkmal.Hersteller / Vertrieb#$<br>
	$#Merkmal.Herstellungsart#$<br>
	$#Merkmal.Inverkehrbringer#$<br>
	$#Merkmal.Jahrgang#$<br>
	$#Merkmal.Länge#$<br>
	$#Merkmal.Marke#$<br>
	$#Merkmal.Mit Farbstoff#$<br>
	$#Merkmal.Qualität#$<br>
	$#Merkmal.Rauchdauer#$<br>
	$#Merkmal.Rauchfertig/angeschnitten#$<br>
	$#Merkmal.Raumnote#$<br>
	$#Merkmal.Rebsorten(n)#$<br>
	$#Merkmal.Region#$<br>
	$#Merkmal.Restsüße#$<br>
	$#Merkmal.Ringmaß#$<br>
	$#Merkmal.Säuregehalt#$<br>
	$#Merkmal.Schnittart#$<br>
	$#Merkmal.Sensorische Beschreibung#$<br>
	$#Merkmal.Stammwürze /Plato#$<br>
	$#Merkmal.Stärke#$<br>
	$#Merkmal.Tabak Stärke#$<br>
	$#Merkmal.Torfgehalt#$<br>
	$#Merkmal.Trinktemperatur#$<br>
	$#Merkmal.Typ#$<br>
	$#Merkmal.Umblatt#$<br>
	$#Merkmal.Weinart#$<br>
	$#Merkmal.Weingut#$<br>
	$#Merkmal.Whiskytyp#$<br>
	$#Merkmal.Zutaten#$<br>
	$#Merkmal.Zündung#$<br>
	-->
	
	</font>
	
	<br><br><br> 
	<!--
	<button onclick="showhidewhisky()">Whisky</button>
	
	<button onclick="showhidewein()">Wein</button>

	<button onclick="showhiderum()">Rum</button>
	
	<button onclick="showhidezigarren()">Zigarren</button>
	-->
	
	<div id="allgemein" class="hide">
		<div id="allgemein">
			<table align="left" border="1">
				<caption>Allgemein Inhalte</caption>
					<tr>
						<td>Alkoholgehalt</td> 
						<td>$#Merkmal.Alkoholgehalt#$</td> 
					</tr>
					<tr> 
						<td>HAN:</td>
						<td>$#Text.HAN#$</td> 
					</tr>
					<tr> 
						<td>Inhalt:</td>
						<td>$#Merkmal.Inhalt#$</td> 
					</tr>
					<tr> 
						<td>Hersteller:</td>
						<td>$#Text.Hersteller#$</td> 
					</tr>
					<tr> 
						<td>Hersteller/Vertrieb:</td>
						<td>$#Merkmal.Hersteller / Vertrieb#$</td> 
					</tr>
				
			</table>
		</div>
	</div>
	
<br><br>	
	
	<div id="inhalt-whisky" class="hide">
		<div id="whisky">
			<table align="left" border="1">
				<caption>Merkmale von Whisky</caption>
					<tr>
						<th>Merkmal</th>
						<th>Wert</th>
					</tr>
					<tr> 
						<td>Whiskytyp</td>
						<td>$#Merkmal.Whiskytyp#$</td> 
					</tr>	
					<tr>
						<td>Torfgehalt</td> 
						<td>$#Merkmal.Torfgehalt#$</td> 
					</tr>
					<tr>
						<td>Abfüller</td> 
						<td>$#Merkmal.Abfüller#$</td> 
					</tr>
					<tr>
						<td>Abgefüllt am:</td> 
						<td>$#Merkmal.Abgefüllt am:#$</td> 
					</tr>
					<tr>
						<td>Alkoholgehalt</td> 
						<td>$#Merkmal.Alkoholgehalt#$</td> 
					</tr>
					<tr>
						<td>Alter</td>
						<td>$#Merkmal.Alter#$</td>
					</tr>
					<tr>
						<td>Alter</td>
						<td>$#Merkmal.Alter#$</td>
					</tr>
				
			</table>
		</div>
	</div>
		
	<div id="inhalt-wein" class="hide">
		<div id="wein">
			<table align="left" border="1">
				<caption>Merkmale von Wein </caption>
					<tr>
						<th>Merkmal</th>
						<th>Wert</th>
					</tr>
					<tr>
						<td>Region:</td>
						<td>$#Merkmal.Region#$</td> 
					</tr>
					<tr> 
						<td>Anbaugebiet:</td>
						<td>$#Merkmal.Anbaugebiet#$</td> 
					</tr>
					<tr> 
						<td>Weingut:</td>
						<td>$#Merkmal.Weingut#$</td> 
					</tr>
					<tr>
						<td>Alkoholgehalt:</td> 
						<td>$#Merkmal.Alkoholgehalt#$</td> 
					</tr>
					<tr>
						<td>Enthält:</td>
						<td>$#Merkmal.Enthält#$<br></td>
					</tr>
					<tr>
						<td>Weinart:</td>
						<td>$#Merkmal.Weinart#$<br></td>
					</tr>
					<tr>
						<td>Sensorische Beschreibung:</td>
						<td>$#Merkmal.Sensorische Beschreibung#$<br></td>
					</tr>
					<tr>
						<td>Rebsorte(n):</td>
						<td>$#Merkmal.Rebsorten(n)#$<br></td>
					</tr>
					<tr>
						<td>Enthält:</td>
						<td>$#Merkmal.Enthält#$<br></td>
					</tr>
					<tr>
						<td>Enthält:</td>
						<td>$#Merkmal.Enthält#$<br></td>
					</tr>
					
			</table>
		</div>
	</div>
		
	<div id="inhalt-rum" class="hide">
	
		<div id="rum">
			<table align="left" border="1">
				<caption>Merkmale von Rum </caption>
					<tr>
						<th>Merkmal</th>
						<th>Wert</th>
					</tr>
					<tr> 
						<td>Spalte 1</td>
						<td>Spalte 2</td> 
					</tr>
			</table>
		</div>
	</div>
	
	<div id="inhalt-zigarren" class="hide">

		<div id="zigarren">
			<table align="left" border="1">
				<caption>Merkmale von Zigarren </caption>
					<tr>
						<th>Merkmal</th>
						<th>Wert</th>
					</tr>
					<tr> 
						<td>Spalte 1</td>
						<td>Spalte 2</td> 
					</tr>
			</table>
		</div>
	</div>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript">
			function toggleDiv(divId) {
				$("#"+divId).toggle();
			}
		</script>
<a href="javascript:toggleDiv('whisky');" style="background-color: ; padding: 5px 10px;">Whisky</a>
<div id="whisky" style="background-color: #aaa; padding: 5px 10px;">
	<table>
		<caption>Merkmale Whisky </caption>
		<tr>
			<th>Merkmal</th>
			<th>Wert</th>
		</tr>
		<tr> 
			<td>Spalte 1</td>
			<td>Spalte 2</td> 
		</tr>
	</table>
</div>
-->

<br>
	
    <table border="0" cellpadding="0" cellspacing="0">
     <tr>
     </tr>
     <tr>
       <td rowspan="3" align="left" valign="top" width="750">
       <br><br>
       $#Text.Beschreibung#$
	   <br>	   
	   </td>
     </tr>
     <tr>
        <td align="left" valign="top">
         <a href="$#Bild.URL1#$" style="text-decoration:none;" title="Zum Vergr&ouml;&szlig;ern bitte anklicken"><img src="$#Bild.URL1#$" width="150" border="0" alt="Zum Vergr&ouml;&szlig;ern bitte anklicken"></a><br>
         <font size="2">$#Bild.Kommentar1#$</font>           
       </td>
     </tr>
     <tr>
        <td align="left" valign="top">
        <br>
         <a href="$#Bild.URL2#$" style="text-decoration:none;" title="Zum Vergr&ouml;&szlig;ern bitte anklicken"><img src="$#Bild.URL2#$" width="150" border="0" alt="Zum Vergr&ouml;&szlig;ern bitte anklicken"></a><br>
         <font size="2">$#Bild.Kommentar2#$</font>           
       </td>
     </tr>
    </table>
    <br>
    <hr size="2" noshade="noshade"/>
    <br>
    <table border="0" cellpadding="0" cellspacing="0">
     <tr>
      <td>
       <img src="gfx/footer.png">
      </td>
      <td width="50">
      </td>
      <td>
      <b>Sie erreichen unsere Servicehotline von 10:00 - 13:00 u. 14:30 - 16:30 Uhr unter:</b><br><br>
      <font size="6"><b>05246-8381881</b></font>
      </td> 
     </tr>
    </table>
    <hr size="2" noshade="noshade"/>
    <div align="center">
     <font size="1" color="#bbbbbb">Template by marcos software</font>
    </div>   
  </body>
</html>
