<?php
 #New Php File
 # Created With  Macbook Pro, 13", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 # 
 # OPENSOURCE
 # => CC BY-SA 
 # => => That means you may use, edit, improve the code, as long you share it also; you MUST leave the names of 'WDG.P'
 #
 # => Rules: 
 # => http://wdgp.nl/#conditions

    $module[] = array(
                        'maps',
                        'maps module',
                        array('mod_maps_func', 'mod_maps_view') //For Help!
                     );

    function mod_maps_module_install () {
        // run here "install" commands (e.g. sql, writeconfig)
         $cfg->value("./data/config/configuration.ini", "autoload", "maps_module", "false"); //SET AUTO LOAD!!!
    }

    function mod_maps_module_uninstall () {
        // uninstall parameters
    }

    function mod_maps_func ( $parameters = null )
    {
        return "implent some functions !!!";
    }

    function mod_maps_view ($lat, $long, $width, $height)
    {
echo <<<QuickAndDirty
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Simple SlippyMap using Google Maps v3 API</title>
        <style>
            /* Style inspired by http://osm.lonvia.de/world_hiking.html */
            html, body, .slippymap {
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
            }
            .slippymap {
                width: 99.5%;
                height: 99.5%;
                outline: 1px solid gray;
            }
            header, footer{
                position: fixed;
                left: 0;
                right: 0;
                width: 100%
                margin: 0;
                padding: 0.21em;
                z-index: 2;
                background: #eed;
            }
            h1 {
                font-size: 1.5em;
                font-weight: bold;
                margin: 0;
            }
            header {
                border-bottom: 2px solid #531;
                top: 0;
            }
            footer {
                border-top: 2px solid #531;
                bottom: 0;
            }
        </style> 
    </head>
    <body>
        <header>
            <h1>Slippy OpenStreetMap Map</h1>
        </header>
        <div id="map" class="slippymap" style="float: left;"></div>
        <footer>
            <p>Mapdata © <a href="http://www.openstreetmap.org/">OpenStreetMap</a> contributors
            (<a href="http://www.openstreetmap.org/copyright">license</a>).</p>
        </footer>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            var element = document.getElementById("map");
 
            var map = new google.maps.Map(element, {
                center: new google.maps.LatLng(57, 21),
                zoom: 3,
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
                name: "OpenStreetMap",
                maxZoom: 18
            }));
        </script>
    </body>
</html>
QuickAndDirty;

    }

?>