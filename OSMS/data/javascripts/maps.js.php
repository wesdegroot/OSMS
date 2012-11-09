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
                name: "OSM",
                maxZoom: 18
            }));
 