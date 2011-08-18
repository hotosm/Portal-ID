$(document).ready(function() {

var tilejson = {
  tilejson: '1.0.0',
  scheme: 'tms',
  tiles: [
    'http://a.tiles.mapbox.com/mapbox/1.0.0/mapbox.blue-marble-topo-jul/{z}/{x}/{y}.png',
    'http://b.tiles.mapbox.com/mapbox/1.0.0/mapbox.blue-marble-topo-jul/{z}/{x}/{y}.png',
    'http://c.tiles.mapbox.com/mapbox/1.0.0/mapbox.blue-marble-topo-jul/{z}/{x}/{y}.png',
    'http://d.tiles.mapbox.com/mapbox/1.0.0/mapbox.blue-marble-topo-jul/{z}/{x}/{y}.png',
	// 'http://a.tile.openstreetmap.org/{z}/{x}/{y}.png',
	// 'http://b.tile.openstreetmap.org/{z}/{x}/{y}.png',
	// 'http://c.tile.openstreetmap.org/{z}/{x}/{y}.png',
	// 'http://d.tile.openstreetmap.org/{z}/{x}/{y}.png',
  ]
};

var mm = com.modestmaps;


// homepage
if($('body').attr("class") == "home") {
  var home = new mm.Map('map_home',
    new wax.mm.connector(tilejson),
    new mm.Point(1110,450));
  wax.mm.zoomer(home, tilejson).appendTo(home.parent);
  home.setCenterZoom(new mm.Location(-2.8, 117), 5);
}

// LOCATIONS
// TODO: DRY this up
// Bantaeng
if($('body').attr("class") == "bantaeng") {
  var bantaeng = new mm.Map('map_bantaeng',
    new wax.mm.connector(tilejson),
    new mm.Point(550,550));
  wax.mm.zoomer(bantaeng, tilejson).appendTo(bantaeng.parent);
  bantaeng.setCenterZoom(new mm.Location(-5, 122.5), 8);
}

// Baubau
if($('body').attr("class") == "baubau") {
  var baubau = new mm.Map('map_baubau',
    new wax.mm.connector(tilejson),
    new mm.Point(550,550));
  wax.mm.zoomer(baubau, tilejson).appendTo(baubau.parent);
  baubau.setCenterZoom(new mm.Location(-5, 122.5), 8);
}

//Bima
if($('body').attr("class") == "bima") {
  var bima = new mm.Map('map_bima',
    new wax.mm.connector(tilejson),
    new mm.Point(550,550));
  wax.mm.zoomer(bima, tilejson).appendTo(bima.parent);
}

// Dompu
if($('body').attr("class") == "dompu") {
  var dompu = new mm.Map('map_dompu',
    new wax.mm.connector(tilejson),
    new mm.Point(550,550));
  wax.mm.zoomer(dompu, tilejson).appendTo(dompu.parent);
}

// Kupang
if($('body').attr("class") == "kupang") {
  var kupang = new mm.Map('map_kupang',
    new wax.mm.connector(tilejson),
    new mm.Point(550,550));
  wax.mm.zoomer(kupang, tilejson).appendTo(kupang.parent);
}

// Lombok
if($('body').attr("class") == "lombok") {
  var lombok = new mm.Map('map_lombok',
    new wax.mm.connector(tilejson),
    new mm.Point(550,550));
  wax.mm.zoomer(lombok, tilejson).appendTo(lombok.parent);
}

// Takalar
if($('body').attr("class") == "takalar") {
  var takalar = new mm.Map('map_takalar',
    new wax.mm.connector(tilejson),
    new mm.Point(550,550));
  wax.mm.zoomer(takalar, tilejson).appendTo(takalar.parent);
}

// Waingapu
if($('body').attr("class") == "waingapu") {
  var waingapu = new mm.Map('map_waingapu',
    new wax.mm.connector(tilejson),
    new mm.Point(550,550));
  wax.mm.zoomer(waingapu, tilejson).appendTo(waingapu.parent);
}

});