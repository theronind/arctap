<?php include 'header.php'; ?>

	<div class="page">

		<header role="banner">

			<img src="/img/ginger.svg" alt="">

			<div class="welcome">
				<h1>ArcTap</h1>

				<p>We're a community of amazing web professionals with the common goal of working together with other like-minded freelancers. Our passion is to help clients build amazing experiences for their customers.</p>
			</div>
			<!--/welcome-->

		</header>

		<section role="main">

			<ul class="members clearfix">
				<li data-toggle="modal" data-target="#myModal">
					<img src="/img/members/kennedy.jpg" alt="">
				</li>
				<li><img src="/img/members/dennis-gaebel.png" alt=""></li>
				<li><img src="/img/members/tim-smith.png" alt=""></li>
				<li><img src="/img/members/nicole-dominguez.jpg" alt=""></li>
				<li><img src="/img/members/frank-denbow.jpg" alt=""></li>
				<li><img src="/img/members/brian-revak.jpg" alt=""></li>
				<li><img src="/img/members/aaron-hall.jpg" alt=""></li>
				<li><img src="/img/members/chris-jeane.jpg" alt=""></li>
				<li><img src="/img/members/jarod-reyes.jpg" alt=""></li>
				<li><img src="/img/members/john-britton.jpg" alt=""></li>
				<li><img src="/img/members/rodrigo-sanchez.jpg" alt=""></li>
				<li><img src="/img/members/jon-gottfried.jpg" alt=""></li>
				<li><img src="/img/members/kevin-quinn.jpg" alt=""></li>
				<li><p>Interested in hiring one of us?<br/>Feel free to shoot us an email<br/><a href="mailto:hello@arctap.com">Hello@ArcTap.com</a></p></li>
			</ul>

		</section>

		<footer role="contentinfo">

			<img src="/img/logo.svg" alt="">

			<h2>ArcTap</h2>

			<p>a freelance collective</p>

		</footer>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<img src="/img/members/kennedy.jpg" alt="">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>

				<div class="modal-body">
					<p>Hello Mr. Modal!</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn" data-dismiss="modal">Close</button>
					<button type="button" class="btn">Save changes</button>
				</div>
			</div>
		</div>
	</div>


<?php include("footer.php"); ?>
