<?php  $title = 'Work';  include '../header.php'; ?>

<div id="work">

	<section id="intro">
		<div class="container">
				<h2>Our Work</h2>
				<div id="nav">
					<ul id="filter">
						<li class="current"><a href=""><i class="ss-icon">&#xE9A3;</i><span>All</span></a></li>
						<li><a href=""><i class="ss-icon">&#x1F4BB;</i><span>Web</span></a></li>
						<li><a href=""><i class="ss-icon">&#x1F4F1;</i><span>Mobile</span></a></li>
					</ul>
				</div><!--/nav-->
		</div><!--/container-->
	</section><!--/intro-->

	<div class="container">
		<div id="page">
			<div class="content">

				<ul id="portfolio">
					<li class="g2 web">
						<a href="/work/statuschart/"><img src="/work/statuschart/statuschart.png"/></a>
					</li>
					<li class="g2 mobile">
						<a href="/work/gradespotter/"><img src="/work/gradespotter/gradespotter.png"/></a>
					</li>
					<li class="g2 web">
						<a href="/work/kristinastpeter/"><img src="/work/kristinastpeter/kristinastpeter.png"/></a>
					</li>
				</ul>

			</div><!--/content-->
		</div><!--/page-->
	</div><!--/container-->

</div><!--/work-->

<?php include("../footer.php"); ?>
