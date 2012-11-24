<?php  $title = 'Hire'; $css = '/css/style.css'; include 'header.php'; ?>

<?
    // Attention! Please read the following.
    // It is important you do not edit pieces of code that aren't tagged as a configurable options identified by the following:

        // Configuration option.

    // Each option that is easily editable has a modified example given.


        $error    = '';
        $name     = '';
        $email    = '';
        $company  = '';
        $comments = '';
        $verify   = '';

        if(isset($_POST['contactus'])) {

        $name     = $_POST['name'];
        $email    = $_POST['email'];
        $company     = $_POST['company'];
        $comments = $_POST['comments'];
        $verify   = $_POST['verify'];


        // Error Messages
        if(trim($name) == '') {
          $error = '<div class="error_message">Attention! You must enter your name.</div>';
        } else if(trim($email) == '') {
          $error = '<div class="error_message">Attention! Please enter a valid email address.</div>';
        } else if(trim($company) == '') {
          $error = '<div class="error_message">Attention! Please enter in your company\'s name.</div>';
        } else if(!isEmail($email)) {
          $error = '<div class="error_message">Attention! You have enter an invalid e-mail address, try again.</div>';
        }else if(trim($comments) == '') {
          $error = '<div class="error_message">Attention! Please give us some details about your project.</div>';
        } else if(trim($verify) == '') {
        $error = '<div class="error_message">Attention! Please enter the verification number.</div>';
      } else if(trim($verify) != '4') {
        $error = '<div class="error_message">Attention! The verification number you entered is incorrect.</div>';
      }

        if($error == '') {

      if(get_magic_quotes_gpc()) {
              $comments = stripslashes($comments);
            }


         // The email address that you want to emails to be sent to.
         $address = "kennedy@arctap.com";

         // Subject Line
         $e_subject = 'You\'ve been contacted by ' . $name . '.';

         // Content
        $e_body = "You have been contacted by $name, their additional message is as follows.\r\n\n";
        $e_content = "\"$comments\"\r\n\n";
        $e_reply = "You can contact $name via email, $email";

         $msg = $e_body . $e_content . $e_reply;

         mail($address, $e_subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");


     // Email has sent successfully, echo a success page.

     echo "<div id='succsess_page'>";
     echo "<h1>Email Sent Successfully.</h1>";
     echo "<p>Thank you <strong>$name</strong>, your details have been submitted to us.</p>";
     echo "</div>";

    }
  }

         if(!isset($_POST['contactus']) || $error != '') // Do not edit.
         {
?>

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
  		<form id="subForm"  method="post" action="">
        <ul class="clearfix">
          <li class="g2"><input type="text" value="<?=$name;?>" id="name" name="name" placeholder="Your Name"/></li>
          <li class="g2"><input type="email" value="<?=$email;?>" id="email" name="email" placeholder="Your Email Address"/></li>
          <li class="g2"><input type="text" value="<?=$company;?>" id="company" name="company" placeholder="Company Name"/></li>
          <li class="g2">
            <select id="budget" name="budget">
              <option value="$25,000-50,000" selected="selected">$25,000 - 50,000</option>
              <option value="$50,000-75,000">$50,000 - 75,000</option>
              <option value="$75,000-100,000">$75,000 - 100,000</option>
              <option value="$100,000-250,000">$100,000 - 250,000</option>
              <option value="$250,000+">$250,000 Plus</option>
            </select>
          </li>
          <li class="g4"><textarea id="comments" name="comments" placeholder="Give us a brief description and tell us why it will be awesome to work with you on this project."><?=$comments;?></textarea></li>
          <li class="g4"><input name="verify" type="text" id="verify" value="<?=$verify;?>" placeholder="What is 3+1 ?"/></li>
          <li class="g4"><input type="submit" class="btn btn-action" id="contactus" value="Submit" name="contactus"/></li>
        </ul>
        <div class="g4"><? echo $error; ?></div>
      </form>
    </div><!--/g4-->
	</div><!--/content-->
</div><!--/page-->
</div><!--/container-->

</div><!--/hire-->

<? }

function isEmail($email) { // Email address verification, do not edit.
return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

?>

<?php include("footer.php"); ?>
