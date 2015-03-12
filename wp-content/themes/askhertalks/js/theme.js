jQuery(document).ready(function ( $ ) {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });
  $(".readmorebtn").click(function(){
	    $(this).text(function(i,old){
	        return old=='Read More' ?  'Read Less' : 'Read More';
	    });
	});
});

// Source for Read More/Read Less button code: http://jsfiddle.net/fVpkm/