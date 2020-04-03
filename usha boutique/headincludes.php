<title>UB Kartt</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/lightbox.css">
<link href="https://fonts.googleapis.com/css?family=Barriecito|Satisfy|Courgette|Oleo+Script|Oleo+Script+Swash+Caps|Kaushan+Script|Josefin+Sans|DM+Serif+Text|Lato|Bree+Serif|Literata|Roboto|Stylish|Lobster|Parisienne|Barriecito&display=swap" rel="stylesheet">
<link rel="icon" href="images/logo1.jpg">
<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->
<script src="js/fa5.js"></script>
<script>
//navbar active
$(document).ready(function(){
	var url = window.location;
	$('ul.nav a[href="'+ url +'"]').parent().addClass('active');
	$('ul.nav a').filter(function(){
		return this.href == url;
	}).parent().addClass('active');
});
//!navbar active

//scroll to top    
jQuery(document).ready(function(){
	var offset = 220;
	var duration = 800;
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > offset){
			jQuery('.btscroll').fadeIn(duration);
		} else {
			jQuery('.btscroll').fadeOut(duration);
		}
	});
	jQuery('.btscroll').click(function(event){
		event.preventDefault();
		jQuery('html, body').animate({scrollTop: 0}, duration);
		return false;
	})
});
//!scroll to top

</script>
<style>
.navbar-right .dropdown-menu{right:auto;}
</style>