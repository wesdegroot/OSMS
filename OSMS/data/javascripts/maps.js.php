<?php
header("content-type: text/javascript");
?>  // Getting data
  // http://nominatim.openstreetmap.org/search?q=baron%20de%20coubertinstraat%2019%20haarlem&format=xml

// lat="lat"
// lon="lon"
<?php

$gen=array();
function addmap($adress, $title)
{
    $sData = file_get_contents("http://nominatim.openstreetmap.org/search?q=" . urlencode($adress) . "&format=xml");
    //echo $sData;
    //preg_match('/^(\-?\d+(\.\d+)?),\s*(\-?\d+(\.\d+)?)$/')

    preg_match_all("/lat=(\"|')(\-?\d+(\.\d+)?)(\"|') lon=(\"|')(\-?\d+(\.\d+)?)(\"|')/", $sData, $matches, PREG_SET_ORDER);
    //print_r($matches);
    add2map($matches[0][2], $matches[0][6], $title);
}

function add2map($lat, $lon, $title)
{
    global $gen;
    $gen[] = array("pos".md5(md5(uniqid().uniqid()).uniqid()), $lat, $lon, $title);
}


add2map("52.356197",  "4.6679714", "Wesley De Groot is hier om 04.44");
add2map("52.3570657", "4.6546503", "Winkelcentrum Schalkwijk");
add2map("52.4323297", "4.65509",   "Edwin Huijboom");
add2map("52.3593382", "4.6656361", "Wesley De Groot");
addmap("parallelweg beverwijk", 'IWNH');
addmap('Baron de Coubertinstraat, Haarlem', 'www');
addmap('New York', 'New York');
addmap('Antwerp, Belgium', 'Antwerp');
addmap('Berlin, Germany', 'Berlin');
addmap('Amsterdam, Netherlands', 'AmsterDam');
addmap('Ten kate straat 110, amsterdam', 'Cafe Bax');
addmap('somalia', 'Somalie');
addmap('china', 'Made in China.');
addmap('utrecht', 'utrecht');
addmap('willem schuylenburglaan, utrecht', 'SaRa');

for($i=0; $i<sizeof($gen); $i++) 
{
    echo "var {$gen[$i][0]} = new google.maps.LatLng({$gen[$i][1]}, {$gen[$i][2]});\r\n";
}
?>
  var myLatlng = new google.maps.LatLng(52.3593382, 4.6656361);

            var element = document.getElementById("map");
 
            var map = new google.maps.Map(element, {
                center: myLatlng,
                zoom: 10,
                mapTypeId: "OSM",
                mapTypeControlOptions: {
                    mapTypeIds: ["OSM"]
                }
            });
 
            map.mapTypes.set("OSM", new google.maps.ImageMapType({
                getTileUrl: function(coord, zoom) {
                    return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
                },
                tileSize: new google.maps.Size(256, 256),
                name: "OSM",
                maxZoom: 18
            }));
 <?php
for($i=0; $i<sizeof($gen); $i++) 
{
    echo "var marker = new google.maps.Marker({
                position: {$gen[$i][0]},
                map: map,
                title:\"{$gen[$i][3]}\"
            });\r\n";
}
?>
function toggle_logo() {
var source = document.getElementById('map');

//Terms of use link
var divs = source.getElementsByTagName('div');
var current = (divs[14].style.display == 'none') ? 'block' : 'none';
divs[14].style.display = current;

//Google Logo link
var links = source.getElementsByTagName('a');
var current = (links[1].style.display == 'none') ? 'block' : 'none';
links[1].style.display = current;
}

toggle_logo();
