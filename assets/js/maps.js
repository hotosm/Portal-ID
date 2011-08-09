function map_home() {
  map = new OpenLayers.Map("map");
  var mapnik = new OpenLayers.Layer.OSM();
  map.addLayer(mapnik);
  map.setCenter(new OpenLayers.LonLat(116.9833, -2.4695) // Center of the map
    .transform(
      new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
      new OpenLayers.Projection("EPSG:900913") // to Spherical Mercator Projection
    ), 5 // Zoom level
  );
}

function map_baubau() {
  map = new OpenLayers.Map("map");
  var mapnik = new OpenLayers.Layer.OSM();
  map.addLayer(mapnik);
  map.setCenter(new OpenLayers.LonLat(116.9833, -2.4695) // Center of the map
    .transform(
      new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
      new OpenLayers.Projection("EPSG:900913") // to Spherical Mercator Projection
    ), 5 // Zoom level
  );
}

function map_waingapu() {
  map = new OpenLayers.Map("map");
  var mapnik = new OpenLayers.Layer.OSM();
  map.addLayer(mapnik);
  map.setCenter(new OpenLayers.LonLat(120.26292, -9.65313) // Center of the map
    .transform(
      new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
      new OpenLayers.Projection("EPSG:900913") // to Spherical Mercator Projection
    ), 17 // Zoom level
  );
}