<?php
/**
 * Load the settings
 */
require 'settings.php';

if($navbar == "") echo "<div class=\"container\">";
?>

<nav class="navbar navbar-default <?php echo $navbar ?>">
  <div class="container<?php if($navbar == "") echo "-fluid"; ?>">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="#">Project name</a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
		<?php include 'menu.php'; ?>
	</div><!--/.nav-collapse -->
  </div>
</nav>
<?php if($navbar == "") echo "</div>"; ?>
