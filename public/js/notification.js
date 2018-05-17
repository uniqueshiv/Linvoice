$(document).ready(function(){

$.get( "/notification", function( data ) {
  $( "#notification" ).html( data );
  // alert( "Load was performed." );
});

	});
