<?php  $title = 'ArcOffice';  include '../header.php'; ?>

    <div id="arcoffice">

        <section id="intro">
            <div class="container">
                <h2>ArcOffice</h2>
            </div><!--/container-->
        </section><!--/intro-->

        <div class="container">
            <div id="page">
                <section class="content" role="main">
                    <p>We are going to build out some of the basic page here on the front-end then later move then over to the backend.</p>
                    <h3>Notes:</h3>
                        <ul>
                            <li>I think the design that we current have could work for the ArcOffice. With the exception of maybe the "ArcTap Header", "ArcTap Footer", and "Hire Me bar". Maybe the footer could be modified for each client.</li>
                            <li>Put all extra style for ArcOffice in `arcoffice.scss`.</li>
                        </ul>
                    <h3>Client Pages:</h3>
                    <ul>
                        <li><a href="">Home - Profile</a></li>
                        <li><a href="">Profile Edit</a></li>
                        <li><a href="">Invoice</a></li>
                        <li><a href="">Payment Processing</a></li>
                    </ul>
                    <h3>Admin Pages:</h3>
                    <ul>
                        <li><a href="">Home - List of clients, activity</a></li>
                        <li><a href="">Profile</a></li>
                        <li><a href="">Status updates</a></li>
                    </ul>
                </section><!--/content-->
            </div><!--/page-->
        </div><!--/container-->

    </div><!--/arcoffice-->

<?php include("../footer.php"); ?>
