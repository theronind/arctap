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
                        <p>You're about to make that great first step in any project &ndash;explaining your vision. We don't wanna waste anyone's time, so we'll keep this questionnaire brief. After we've reviewed this little intro of your needs we'll get in touch <abbr title="as soon as possible">ASAP</abbr> (that's short for quick!).</p>
                    </div><!--/g4-->

                    <!-- FORM START -->
                    <?php require('hireMail.php'); ?>

                    <?php if ( ! isset ( $_POST ['submit'] ) OR $error ) { ?>
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" enctype="application/x-www-form-urlencoded" method="post" id="hireForm" role="form">
                          <input type="hidden" name="hide" value="Your message was sent securely. We will be in touch" />
                          <ul class="clearfix">
                                <li class="g2">
                                    <input type="name" class="form-input" id="name" name="name" value="<?php if ( isset( $_POST['name'] ) ) { echo htmlspecialchars( $_POST['name'] ); } ?>" placeholder="* Your Name" minlength="3" required>
                                    <?php
                                        if ( isset( $_POST['submit'] ) ) {
                                            if ( empty( $_POST['name'] ) ) {
                                                echo "<p class='server-error'><span class=\"ss-standard ss-alert\" title=\"empty name error\"></span> please enter your name</p>";
                                                $error = TRUE;
                                            }
                                            if ( strlen( $_POST['name'] ) < 3 ) {
                                                echo "<p class='server-error'><span class=\"ss-standard ss-alert\" title=\"name string length error\"></span>Your name must be more than 3 chars in length</p>";
                                                $error = TRUE;
                                            }
                                        } else { $error = TRUE; }
                                    ?>
                                </li>
                                <li class="g2">
                                    <input type="text" class="form-input" id="company" name="company" value="<?php if ( isset( $_POST['company'] ) ) { echo htmlspecialchars( $_POST['company'] ); } ?>" placeholder="Company Name">
                                </li>
                                <li class="g2">
                                    <input type="tel" class="form-input" id="phone" name="phone" value="<?php if ( isset( $_POST['phone'] ) ) { echo htmlspecialchars( $_POST['phone'] ); } ?>" placeholder="Phone Number" required>
                                </li>
                                <li class="g2">
                                    <input type="email" class="form-input" id="email" name="email" value="<?php if ( isset( $_POST['email'] ) ) { echo htmlspecialchars( $_POST['email'] ); } ?>" placeholder="* Your Email Address" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" required>
                                    <?php
                                        if ( isset( $_POST['submit'] ) ) {
                                            if ( empty( $_POST['email'] ) ) {
                                                echo "<p class='server-error'><span class=\"ss-standard ss-alert\" title=\"empty email error\"></span> We need your email address so we can get in touch. Don't leave it blank</p>";
                                                $error = TRUE;
                                            }

                                            if( !preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email) ) {
                                                echo "<p class='server-error'><span class=\"ss-standard ss-alert\" title=\"email syntax error\"></span> We need your email address syntax to be username@emailprovider.domain</p>";
                                                $error = true;
                                            }
                                        } else { $error = TRUE; }
                                    ?>
                                </li>
                                <li class="g2">
                                    <input type="url" class="form-input" id="website" name="website" value="<?php if ( isset( $_POST['website'] ) ) { echo htmlspecialchars( $_POST['website'] ); } ?>" placeholder="http://">
                                </li>
                                <li class="g2">
                                    <!-- required -->
                                    <select name="budget" id="budget">
                                        <option selected="selected" value="DEFAULT">* Estimated Budget</option>
                                        <option value="$20,000 &ndash; $40,000">$20,000 &ndash; $40,000</option>
                                        <option value="$40,000 &ndash; $60,000">$40,000 &ndash; $60,000</option>
                                        <option value="$60,000 &ndash; $80,000">$60,000 &ndash; $80,000</option>
                                        <option value="$80,000 &ndash; $140,000">$80,000 &ndash; $140,000</option>
                                        <option value="$140,000 &ndash; $200,000">$140,000 &ndash; $200,000</option>
                                        <option value="$200,000 Plus">$200,000 Plus</option>
                                    </select>
                                </li>
                                <li class="g4">
                                    <textarea id="message" name="message" placeholder="* Give us a brief description of your project and target launch date, if you have one." minlenght="10" required><?php if ( isset( $_POST['message'] ) ) { echo htmlspecialchars( $_POST['message'] ); } ?></textarea>
                                    <?php
                                        if ( isset( $_POST['submit'] ) ) {
                                            if ( empty( $_POST['message'] ) ) {
                                                echo "<p class='server-error'><span class=\"ss-standard ss-alert\" title=\"empty message error\"></span> Please let us know your message</p>";
                                                $error = TRUE;
                                            }
                                            if ( strlen( $_POST['message'] ) < 10 ) {
                                                echo "<p class='server-error'><span class=\"ss-standard ss-alert\" title=\"string length error\"></span> Please make sure your message is more than 10 chars in length</p>";
                                                $error = TRUE;
                                            }
                                        } else { $error = TRUE; }
                                    ?>
                                </li>
                            <li class="g4"><input type="submit" class="btn-action" value="Send" name="submit"></li>
                            <li class="success g4">Your message has been sent successfully.</li>
                        </ul>
                    </form>
                <?php } ?>
                <!-- FORM END -->

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