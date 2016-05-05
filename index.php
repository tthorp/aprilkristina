<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
define('TITLE','Home | April Kristina: Sterling Silver Charm Beads');//what is the name of the page?
define('BODY', 'home');
head();
?>
<div class="sidebar">
    <p class="title">nantucket<br />
    sterling silver<br />
    charm beads</p>
    <p class="action"><a href="collections">view collections &raquo;</a></p>
</div>
<div class="main">
    <img src="/img/home_ribbon.jpg" class="product" alt="nantucket sterling silver charm beads" />
</div>
<?=foot()?>