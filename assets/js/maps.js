var tilejson = {
  tilejson: '1.0.0',
  scheme: 'tms',
  tiles: [
    'http://a.tiles.mapbox.com/hot/1.0.0/hot.hot_indonesia_country/{z}/{x}/{y}.png',
    'http://b.tiles.mapbox.com/hot/1.0.0/hot.hot_indonesia_country/{z}/{x}/{y}.png',
    'http://c.tiles.mapbox.com/hot/1.0.0/hot.hot_indonesia_country/{z}/{x}/{y}.png',
    'http://a.tiles.mapbox.com/hot/1.0.0/hot.hot_indonesia_country/{z}/{x}/{y}.png',
  ]
};

var mm = com.modestmaps;
var m = new mm.Map('map_home',
  new wax.mm.connector(tilejson),
  new mm.Point(900,450));

wax.mm.zoomer(m, tilejson).appendTo(m.parent);
m.setCenterZoom(new mm.Location(-3.35, -119), 4);