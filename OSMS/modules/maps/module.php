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

    function mod_maps_view()
    {
        echo mod_maps_view_view(0,0,0,0);
    }

    function mod_maps_view_view ($lat, $long, $width, $height)
    {
return <<<QuickAndDirty
        <div id="map" style="float: left;">

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
QuickAndDirty;

    }

//mod_maps_view();

?>