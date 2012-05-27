<?php  $title = 'Contact'; include 'header.php'; ?>

	<div class="container">
		<div class="g6">
			<h1>Contact Us</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
			
		</div><!--/g6-->
		<div class="g6">
			<form id="subForm">
			<ul>
				<li><label for="name">Your name...</label><input type="text" value="" id="name"/></li>
				<li><label type="text" for="email">Your email address...</label><input type="text" value="" id="email"/></li>
				<li><label type="text" for="comment">Your message...</label><textarea id="comment"></textarea></li>
				<li><input type="submit" value="Send" class="btn action"/></li>
			</ul>
			</form>
		</div><!--/g6-->
	</div><!--/container-->

<?php include("footer.php"); ?>