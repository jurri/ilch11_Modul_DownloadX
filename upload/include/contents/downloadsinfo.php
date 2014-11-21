<?php 

#  Copyright by honklords.de
#  erstellt von Topolino
#  seite: www.honklords.de
 
#  Support auf www.honklords.de
defined ('main') or die ( 'no direct access' );

$strip = "20";	//Wieviele Zeichen angezeigt werden sollen vor dem abbrechen....
$class = ( $class == 'Cmite' ? 'Cnorm' : 'Cmite' );

echo '<table width="410" border="0" cellspacing="0" cellpadding="5" align="center">
	<tr>
		<td align="center" valign="top">
			<table width="180" class="border" border="0" cellspacing="1" cellpadding="2">
        <tr>
					<td colspan="3" class="Chead" align="center"><b>Top 5 Downloads</b></td>
				</tr>';

$abf = "Select id,name,version,ssurl,`desc`,downs,DATE_FORMAT(time,'%d.%m.%Y') as datum FROM prefix_downloads ORDER BY downs DESC LIMIT 0,5";
  $erg = db_query($abf);
  $i = 1;
  while ($row = db_fetch_object($erg)) {
    $name = $row->name;
    echo'<tr class="'.$class.'">
					<td align="left">'.$i.'.&nbsp;<a href="index.php?downloads-show-'.$row->id.'">'.((strlen($name)<18) ? $name : substr($name,0,$strip).'...').'</a></td>
					</tr>';
$i++;
}

echo '</table><td width="50">&nbsp;</td><td align="center" valign="top">
<table width="180" class="border" border="0" cellspacing="1" cellpadding="2">
				<tr>
					<td colspan="3" class="Chead" align="center"><b>Neusten 5 Downloads</b></td>
				</tr>';

$abf = "Select id,name,version,ssurl,`desc`,downs,DATE_FORMAT(time,'%d.%m.%Y') as datum FROM prefix_downloads ORDER BY time DESC LIMIT 0,5";
  $erg = db_query($abf);
  $i = 1;
  while ($row = db_fetch_object($erg)) {
    $name = $row->name;
    echo'<tr class="'.$class.'">
					  <td align="left">'.$i.'.&nbsp;<a href="index.php?downloads-show-'.$row->id.'">'.((strlen($name)<18) ? $name : substr($name,0,$strip).'...').'</a></td>
         </tr>';
$i++;
}
echo '</table></td></tr></table>';

?>