<head>
	<meta charset="utf-8" />
	<title><?php echo $titre_page ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/games.css">
    <link rel="stylesheet" type="text/css" href="css/back_top.css" />
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>

<script>
$(document).ready(function(){

	// cacher le #back-top au debut
	$("#back-top").hide();
	
	// effet "fondu" du #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// defillement de la page au click de souris
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
</script>