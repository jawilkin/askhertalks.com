jQuery(document).ready(function ( $ ) {
	$('button').click(function(){
	    $(this).text(function(i,old){
	        return old=='Read More' ?  'Read Less' : 'Read More';
	    });
	});
});