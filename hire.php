<?php  $title = 'Hire'; include 'header.php'; ?>

<div id="hire">

<section id="intro">
  <div class="container">
      <h2>Hire Us</h2>
  </div><!--/container-->
</section><!--/intro-->

<div class="container">
<div id="page">
  <div class="content">
    <div class="g4">
      <p>You are about to make a great first step. We don't want to waste anyone's time, so we will keep this questionnaire brief. After we review this little intro of your needs we well get in touch. Thanks for your time and we look forward to speaking with you.</p>
    </div><!--/g4-->
      <form id="hireForm"  method="post">
        <ul class="clearfix">
          <li class="g2">
            <input type="text" id="name" name="name" placeholder="Your Name"/>
          </li>
          <li class="g2">
            <input type="email" id="email" name="email" placeholder="Your Email Address"/>
          </li>
          <li class="g2">
            <input type="text" id="company" name="company" placeholder="Company Name"/>
          </li>
          <li class="g2">
            <select name="budget" id="budget">
              <option selected="selected" value="$25,000 - 50,000">$25,000 - 50,000</option>
              <option value="$50,000 - 75,000">$50,000 - 75,000</option>
              <option value="$75,000 - 100,000">$75,000 - 100,000</option>
              <option value="$100,000 - 250,000">$100,000 - 250,000</option>
              <option value="$250,000 Plus">$250,000 Plus</option>
            </select>
          </li>
          <li class="g4">
            <textarea id="message" name="message" placeholder="Give us a brief description and tell us why it will be awesome to work with you on this project."></textarea>
          </li>
          <li class="g4">
            <input type="submit" class="btn btn-action" value="Submit" name="submit"/>
          </li>
          <li class="success g4" style="display:none">Your message has been sent successfully.</li>
        </ul>
      </form>
      <hr/>
      <div class="g1_5">
        <h3>Cash/Equity?</h3>
        <p class="last">We normally try to stay away from things like this. If you must know we charge a minimum of $250/hr and we can chat about percentages later.</p>
      </div><!--/g1_5-->
      <div class="g1_5">
        <h3>Need a MVP?</h3>
        <p class="last">Just need that Minimum Viable Product to get your idea out there? We have a special team over at <a href="http://48hourapps.com/">48hourapps</a> designated just for that.</p>
      </div><!--/g1_5-->
      <div class="g1_5">
        <h3>Just say Hi.</h3>
        <p class="last">Feel free to reach out to us at anytime. Our group email is <a href="mailto:team@arctap.com">team@arctap.com</a> or for a quicker response say hello to us on twitter at <a href="http://twitter.com/arctap">@ArcTap</a>.</p>
      </div><!--/g1_5-->
  </div><!--/content-->
</div><!--/page-->
</div><!--/container-->

</div><!--/hire-->

<?php include("footer.php"); ?>
