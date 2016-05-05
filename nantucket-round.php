<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
define('TITLE','Collections | April Kristina: Sterling Silver Charm Beads');//what is the name of the page?
define('BODY', 'collections');
head();
?>
<div class="sidebar">
    <p class="title">nantucket beads</p>
    <p class="action"><a href="collections">4-sided sterling silver charm bead &raquo;</a></p>
    <p class="action"><a href="nantucket-round">Round sterling silver charm bead &raquo;</a></p>
</div>
<div class="main">
	<div class="slideshow">
		<?php
		gallery('img/nantucket/round/');
		?>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade',
		timeout: 3000
	});
});
</script>

<?=foot()?>