  // Getting data
  // http://nominatim.openstreetmap.org/search?q=baron%20de%20coubertinstraat%2019%20haarlem&format=xml

// lat="lat"
// lon="lon"
<?php
$gen=array();
function add2map($lat, $lon, $title)
{
    global $gen;
    $gen[] = array("pos".md5(md5(uniqid().uniqid()).uniqid()), $lat, $lon, $title);
}

add2map("52.356197",  "4.6679714", "Wesley De Groot is hier om 04.44");
add2map("52.3570657", "4.6546503", "Winkelcentrum Schalkwijk");
add2map("52.4323297", "4.65509",   "Edwin Huijboom");
add2map("52.3593382", "4.6656361", "Wesley De Groot");


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
