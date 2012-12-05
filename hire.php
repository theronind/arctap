<?php  $title = 'Hire'; include 'header.php'; ?>

    <div id="hire">

        <section id="intro">
            <div class="container">
                <h2>Hire Us</h2>
            </div><!--/container-->
        </section><!--/intro-->

        <div class="container">
            <div id="page">
                <section class="content" role="main">
                    <div class="g4">
                        <p>You are about to make a great first step. We don't want to waste anyone's time, so we will keep this questionnaire brief. After we review this little intro of your needs we well get in touch. Thanks for your time and we look forward to speaking with you.</p>
                    </div><!--/g4-->

                    <form id="hireForm" method="post" role="form">
                        <ul class="clearfix">
                            <li class="g2">
                                <input type="name" id="name" name="name" placeholder="Your Name" required>
                            </li>
                            <li class="g2">
                                <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                            </li>
                            <li class="g2">
                                <input type="text" id="company" name="company" placeholder="Company Name" required>
                            </li>
                            <li class="g2">
                                <select name="budget" id="budget" required>
                                    <option selected="selected" value="DEFAULT">Estimated Budget</option>
                                    <option value="$20,000 &ndash; $40,000">$20,000 &ndash; $40,000</option>
                                    <option value="$40,000 &ndash; $60,000">$40,000 &ndash; $60,000</option>
                                    <option value="$60,000 &ndash; $80,000">$60,000 &ndash; $80,000</option>
                                    <option value="$80,000 &ndash; $140,000">$80,000 &ndash; $140,000</option>
                                    <option value="$140,000 &ndash; $200,000">$140,000 &ndash; $200,000</option>
                                    <option value="$200,000 Plus">$200,000 Plus</option>
                                </select>
                            </li>
                            <li class="g4">
                                <textarea id="message" name="message" placeholder="Give us a brief description and tell us why it will be awesome to work with you on this project." required></textarea>
                            </li>
                            <li class="g4">
                                <input type="submit" class="btn-action" value="Send" name="submit">
                            </li>
                            <li class="success g4" style="display:none">Your message has been sent successfully.</li>
                        </ul>
                    </form>

                    <hr/>

                    <div class="g1_5">
                        <h3>Rate</h3>
                        <p class="last">$10,000/week per resource. Why charge weekly? We have found that this enables us to deliver more features, at a higher quality, over the life of a project.</p>
                    </div><!--/g1_5-->
                    <div class="g1_5">
                        <h3>Need a MVP?</h3>
                        <p class="last">Just need that Minimum Viable Product to get your idea out there? We have a special team over at <a href="http://48hourapps.com/">48hourapps</a> designated just for that.</p>
                    </div><!--/g1_5-->
                    <div class="g1_5">
                        <h3>Just say Hi.</h3>
                        <p class="last">Feel free to reach out to us at anytime. Our group email is <a href="mailto:&#116;&#101;&#097;&#109;&#064;&#097;&#114;&#099;&#116;&#097;&#112;&#046;&#099;&#111;&#109;">&#116;&#101;&#097;&#109;&#064;&#097;&#114;&#099;&#116;&#097;&#112;&#046;&#099;&#111;&#109;</a> or for a quicker response say hello to us on twitter at <a href="http://twitter.com/arctap" rel="author me">@ArcTap</a>.</p>
                    </div><!--/g1_5-->
                </section><!--/content-->
            </div><!--/page-->
        </div><!--/container-->

    </div><!--/hire-->

<?php include("footer.php"); ?>