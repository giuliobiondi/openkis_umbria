<?php
function parseDate($date_full)
{
	$date = date_parse($date_full);
	if($date['error_count'] == 0 && $date['warning_count'] == 0){
		return $date['day']."/".$date['month']."/".$date['year'];
	} else {
		return $date_full;
	}
}
$icon = "{$_FN['siteurl']}" . openkis_GetIcon($row, $_FN['mod']);


if (!empty($row['latitude']))
{
    $zoom = 17;
    $baselayer = "";
    if (false !== strstr($row['coordinates_type'], "IGM") || false !== strstr($row['original_coordinates_type'], "IGM")) //
    {
        $baselayer = "IGM 1:25000";
    }
    echo "<iframe style=\"border:0px;width:100%;height:400px;\" src=\"{$_FN['siteurl']}bs_map.htm?mod={$_FN['mod']}&baselayer={$baselayer}&point=circle&lat={$row['latitude']}&lon={$row['longitude']}&zoom=$zoom&history={$row['id']}\"></iframe>";

    $gmap_link = "//www.google.it/maps/dir//" . $row['latitude'] . "," . $row['longitude'] . "/@" . $row['latitude'] . "," . $row['longitude'] . ",18z";
    echo "<div class=\"alert alert-info\">";
    echo "<h5>" . FN_Translate("calculate the route") . ":</h5>";

    echo " <a class=\"btn btn-secondary\" target=\"_blank\" href=\"$gmap_link\">GMaps</a>";

    $gmap_link = "https://maps.openrouteservice.org/directions?n1=44.075342&n2=9.807849&n3=17&a=null,null," . $row['latitude'] . "," . $row['longitude'] . "&b=0&c=0&k1=it&k2=km";
    echo " <a class=\"btn btn-secondary\" target=\"_blank\" href=\"$gmap_link\">OpenRouteService</a>";


    $osmanLink = "https://www.openstreetmap.org/directions?engine=graphhopper_foot&route={$row['latitude']}%2C{$row['longitude']}%3B{$row['latitude']}%2C{$row['longitude']}";
    echo " <a class=\"btn btn-secondary\" target=\"_blank\" href=\"$osmanLink\">OpenStreetmap</a>";
    $forcename = openkis_TextToAscii($row['name']);
    echo " <a class=\"btn btn-secondary\" target=\"_blank\" href=\"{$_FN['siteurl']}openkis_kml.php?mod={$_FN['mod']}&big_icons=1&filter_code=" . urlencode($row['code']) . "&filename=$forcename&absolute=1\">Scarica kml</a>";
    echo "</div><br />";


    $position=openkis_GetItemPosition($row);
    echo "<div>Coordinate  WGS84 (Lon,Lat):<input class=\"form-input\" value=\"{$row['longitude']},{$row['latitude']}\" onclick=\"this.select();\" /></div>";
    
    echo "<div>Coordinate  WGS84 (Lon,Lat):<input class=\"form-input\" value=\"{$position['lon_dms']},{$position['lat_dms']}\" onclick=\"this.select();\" /></div>";
   
    echo "<div>Coordinate  WGS84 UTM (x,y,zone):<input class=\"form-input\" value=\"{$position['x']},{$position['y']},{$position['zone']}\" onclick=\"this.select();\" /></div>";
    
    
    
}

//----survey------------------------------------------------------------------->
$config = FN_LoadConfig("", "survey");
$survey = new FNDBVIEW($config);
$params['appendquery'] = "codecave LIKE '{$row['code']}'";
$params['fields'] = "id,name,filelox,priority";

$items = array();
if (FN_IsAdmin() || FN_UserInGroup($_FN['user'], "r_caves")){
	
	$items = $survey->GetResults($config, $params);
	if (is_array($items) && count($items))
	{
		$items = FN_ArraySortByKey($items, "priority");
		foreach ($items as $survey_item)
		{
			if (!empty($survey_item['filelox']) && file_exists("misc/fndatabase/ctl_surveys/{$survey_item['id']}/filelox/{$survey_item['filelox']}"))
			{
				$file = urlencode("misc/fndatabase/ctl_surveys/{$survey_item['id']}/filelox/{$survey_item['filelox']}");
				$iframe_href = "{$_FN['siteurl']}openkis_cave_viewer.php?f={$file}";
			   echo "<iframe style=\"width:100%;height:800px;border:0px\" src=\"$iframe_href\"></iframe>";
	 //           dprint_r($survey_item);
				echo "<br/>{$survey_item['name']}: <a class=\"btn btn-primary\" href=\"$iframe_href\" target=\"_blank\">" . FN_Translate("3D Viewer") . "</a><br />";
			}
		}
	}
}
//----bibliography------------------------------------------------------------------->

$config = FN_LoadConfig("", "bibliography");
$biblio = new FNDBVIEW($config);
$params['appendquery'] = "codecaves LIKE '{$row['code']}' OR codecaves LIKE '{$row['code']},%' OR codecaves LIKE '%,{$row['code']},%' OR codecaves LIKE '%,{$row['code']}' ";
$params['fields'] = "id,title,authors,year";
$biblio_items = $biblio->GetResults(false, $params);
$biblio_items = FN_ArraySortByKey($biblio_items, "year");
if (is_array($biblio_items) && count($biblio_items))
{
    echo "<div class=\"alert alert-warning\">";
    echo "<h3>" . FN_Translate("bibliography") . "</h3>";
    echo "<table class=\"table table-responsive\">";
    foreach ($biblio_items as $biblio_item)
    {
        $url = FN_RewriteLink("index.php?mod=bibliography&op=view&id={$biblio_item['id']}");
        echo "<tr><td>{$biblio_item['year']}</td><td>{$biblio_item['title']}</td><td>{$biblio_item['authors']}</td><td><a class=\"btn btn-primary\" href=\"$url\">" . FN_Translate("view") . "</a></td></tr>";
    }
    echo "</table>";
    echo "</div>";
}


    //explorations------------------------------------------------------------------->
    $config = FN_LoadConfig("", "explorations");
    $explorations = new FNDBVIEW($config);
    $params['appendquery'] = "codecave = '{$row['code']}'";
    $params['fields'] = "id,start_date,end_date,explorers,description";
    $expl_items = $explorations->GetResults(false, $params);
    $expl_items = FN_ArraySortByKey($expl_items, "start_date");
if (is_array($expl_items) && count($expl_items))
{
    echo "<div class=\"alert alert-warning\">";
    echo "<h3>" . FN_Translate("explorations") . "</h3>";
    echo "<table class=\"table table-responsive\">";
    foreach ($expl_items as $expl_item)
    {
		$expl_item['start_date'] = parseDate($expl_item['start_date']);
		$expl_item['end_date'] = parseDate($expl_item['end_date']);
        $url = FN_RewriteLink("index.php?mod=explorations&op=view&id={$expl_item['id']}");
        echo "<tr><td>{$expl_item['start_date']}</td><td>{$expl_item['end_date']}</td><td>{$expl_item['description']}</td><td>{$expl_item['explorers']}</td><td><a class=\"btn btn-primary\" href=\"$url\">" . FN_Translate("view") . "</a></td></tr>";
    }
    echo "</table>";
    echo "</div>";
}
    //------------------generazione scheda catastale------------------------>
/*if (!empty($_GET['export_pdf']))
{
    include(__DIR__."/pdf/pdf.php");
    die();
}
$urlexport = FN_RewriteLink("index.php?mod={$_FN['mod']}&op=view&id={$row['id']}&export_pdf=1");
echo "<br/><a class=\"btn btn-primary\" href=\"$urlexport\" target=\"_blank\">" . FN_Translate("Genera scheda catastale") . "</a><br />";
*/
?>
