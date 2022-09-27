async function load_log( file, callback ) {
	var object = await fetch( file );

	var data = await object.json();

	var json = Object
				.values(
					data.reduce( ( a, { lat, lon } ) => {
						a = [ lat, lon ];
						return a;
					}, {} )
				);

	callback( json );
};

var map = L.map('map').setView([51.505, -0.09], 13);
var href = window.location.href;
var url = new URL( href );
var gpx = url.searchParams.get("gpx");

var tile_settings = {
		maxZoom: 18,
		attribution: '© OpenStreetMap'
};
var tile_layer = L.tileLayer( '//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', tile_settings ).on( 'tileload', function ( e ) {
	e.tile.setAttribute('alt', 'Map tile image');
}).addTo(map);

var route = new L.GPX( gpx, { async: true }).on( 'loaded', function( e ) {
	map.fitBounds( e.target.getBounds() );
}).addTo(map);

load_log( 'log/log.json', function ( json ) {
	// At thois point, add to map.
	return json;

	// This should be a polyline or something.
	return L.geoJSON( json, { async: true }).on( 'loaded', function( e ) {
		map.fitBounds( e.target.getBounds() );
	}).addTo(map);
});