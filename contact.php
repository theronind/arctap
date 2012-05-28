<?php  $title = 'Contact'; include 'header.php'; ?>

	<div class="container" id="contact">
		<div class="g6">
			<h1>Get in Touch</h1>
			<p>ArcTap is located in the concrete jungle of New York City. Most of us work out of General Assembly located right around the corner of the Flat Iron building. Tell us something about your project, we will take a look and follow up soon.</p>
			<a href="https://twitter.com/ArcTap" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @ArcTap</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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
		
		<div class="g12">
			<img src="/img/bolts.png"/>
		</div><!--/g12-->
		
	</div><!--/container-->

<?php include("footer.php"); ?>