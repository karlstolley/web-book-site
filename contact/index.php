<?php
include($_SERVER['DOCUMENT_ROOT'].'/book/includes/functions.php');

$swdbpage = array(
  'title'       => 'Contact the Author',
  'description' => 'Contact Karl Stolley, author of How to Design and Write Web Pages Today.',
  'swfobject'   => false,
  'js'          => '',
  'bodyclass'   => 'contact'
);

swdb_header($swdbpage);

?>
  <div id="promo">
    <div class="summary">
      <h2>Contact the Author</h2>
      <p>
        You can contact Karl by sending an @reply on Twitter to 
        <a href="http://twitter.com/karlstolley">@karlstolley</a> or by liking or writing on the wall for the
        <cite><a href="https://www.facebook.com/pages/How-to-Design-and-Write-Web-Pages-Today/145726625482580">How to Design and Write Web Pages Today</a></cite>
        page on Facebook. Or just use the email form below.
      </p>
    </div>
    <!--
      <div class="feature">
      </div>
    -->
  </div>

  <div id="content">

    <div id="main">
      <h2>Who Doesn’t Like a Nice Email?</h2>
      <?php
        /*Form functionality based on http://safalra.com/programming/php/contact-feedback-form/*/
        $to='karl.stolley@gmail.com';
        $messageSubject='[SWD/Book] A Message about How to Design and Write Web Pages Today';
        /*$confirmationSubject='Confirmation message subject';
        $confirmationBody="Confirmation message body";*/
        $email='';
        $body='';
        $displayForm=true;
        if ($_POST){
          $email=stripslashes($_POST['swde']);
          $body=stripslashes($_POST['swdm']);
          // validate e-mail address
          $valid=eregi('^([0-9a-z]+[-._+&])*[0-9a-z]+@([-0-9a-z]+[.])+[a-z]{2,6}$',$email);
          $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$body);
          if ($email && $body && $valid && !$crack){
            if (mail($to,$messageSubject,$body,'From: '.$email."\r\n")
                /*&& mail($email,$confirmationSubject,$confirmationBody.$body,'From: '.$to."\r\n")*/){
              $displayForm=false;
      ?>
      <p>
        Your message was sent just fine. I'll respond to you as soon as I can. Thanks!
        <br />—Karl
        <!--In addition, a confirmation copy was sent to your e-mail address.-->
      </p>
      <?php
              /*echo '<p>'.htmlspecialchars($body).'</p>';*/
            }else{ // the messages could not be sent
      ?>
      <p>
        Something went wrong when the server tried to send your message.
        This is usually due to a server error, and is probably not your fault.
        Send an email to karl.stolley@gmail.com if you'd like.
      </p>
      <?php
            }
          }else if ($crack){ // cracking attempt
      ?>
      <p><strong>
        Your message contained e-mail headers within the message body.
        This seems to be a cracking attempt and the message has not been sent.
      </strong></p>
      <?php
          }else{ // form not complete
      ?>
      <p><strong>
        Your message could not be sent.
        You must include both a valid e-mail address and a message.
      </strong></p>
      <?php
          }
        }
        if ($displayForm){
      ?>
      <form id="heydere" action="/book/contact/" method="post">
        <ul>
          <li><label for="swde">Your e-mail address:</label>
              <input type="text" name="swde" id="swde" value="<?php echo htmlspecialchars($email); ?>" size="30" />
          </li>
          <li><label for="swdm">Your message (make sure you put your name, too):</label>
              <textarea name="swdm" id="swdm" cols="60" rows="8"><?php echo htmlspecialchars($body); ?></textarea>
          </li>
          <li><input type="submit" value="Send Message" /></li>
        </ul>
      </form>
      <?php
        }
      ?>
    </div>

  <!--
    <div id="supporting">
    </div>
  -->
  </div>

<?php

swdb_footer($swdbpage);

?>