(function($){
	// preloader

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 12,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		styles: [{"featureType":"water","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]}]
	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map,
		icon		:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAABXCAYAAAEvyBZ9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzVFQTYzNEUxM0Q3MTFFNzlDRjFGQkY3OUZCOTg4QjAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzVFQTYzNEYxM0Q3MTFFNzlDRjFGQkY3OUZCOTg4QjAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozNUVBNjM0QzEzRDcxMUU3OUNGMUZCRjc5RkI5ODhCMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozNUVBNjM0RDEzRDcxMUU3OUNGMUZCRjc5RkI5ODhCMCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PrYnlVQAABXuSURBVHjaYvj79y8D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"
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 12 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
	
	
