<?php
// CONTACT FORM VALIDATION CODE
// define variables and set to empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";
$feedback = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "E-mail is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$message)) {
      $messageErr = "Invalid message";
    }
    if (strlen($message) > 320) {
      $messageErr = "Message too long. Please shorten.";
    }
  }

  // this is the mail function with paramenters to send email.  Email sends ONLY if there are no errors
  $to = "crossnationsmgt@gmail.com, travterrell@gmail.com";
  $from = $email;
  $subject = "MusicRISE Inquiry";
  // $name is already set from validation above
  $email_message = "From: {$name}\n\n".$message;
  $headers = "From: {$from}";
  if ($nameErr == "" && $emailErr == "" && $messageErr == "") {
    if (mail($to,$subject,$email_message,$headers)) {
      $feedback = "<span class='success'>SUCCESS!</span> Thanks for the e-mail!";
    } else {
      $feedback = "<span class='error'>ERROR.</span> Your e-mail didn't send. Please try again.";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MusicRise - Coming Soon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="musicrisestyles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="assets/musicrisefavicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>

      <!-- This is the video background -->
      <video id="bg_vid" poster="assets/posterbg.jpg" autoplay loop>
        <source src="assets/party-footage.mp4" type="video/mp4">
        <source src="assets/party-footage.webm" type="video/webm">
      </video>

      <div class="main">
        <svg id="index-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 713 138" style="enable-background:new 0 0 713 138;" xml:space="preserve">
        <style type="text/css">
        	.st0{display:none;}
        	.st1{display:inline;fill:#00FFDA;stroke:#FFFFFF;`stroke-miterlimit:10;}
        	.st2{stroke:#FFFFFF;stroke-miterlimit:10;}
        	.st3{fill:#FF0000;stroke:#FFFFFF;stroke-miterlimit:10;}
        	.st4{fill:#231F20;}
        	.st5{font-family:'MyriadPro-Regular';}
        	.st6{font-size:6.7551px;}
        	.st7{fill:#FF0000;}
        </style>
        <g id="Layer_2" class="st0">
        	<rect x="-33" y="-50" class="st1" width="779" height="235"/>
        </g>
        <g id="Layer_4">
        	<g id="M_with_black_headphones">
        		<g id="Headphones_Base">
        			<path class="st2" d="M129,90.2v39.3H96.4V90.2h5.8v-12c0-10.2-2.1-17.8-6.2-23c-6.9-8.6-15-12.9-24.4-12.9h-1.3
        				c-9.3,0-17.4,4.3-24.3,12.9c-4.2,5.2-6.2,12.8-6.2,23v12h5.7v39.3H12.9V90.2h6c0-13.4,0.2-21.5,0.6-24.5c0.1-0.6,0.6-2.9,0.8-3.6
        				c0.5-2.2,1.7-5.5,3.3-9.9c2.5-5.5,5.9-10.5,10.2-15c5.5-5.4,10.4-9.1,14.9-10.9c6.9-3.4,14.3-5,22.2-5c7.9,0,15.4,1.7,22.3,5
        				c4.5,1.8,9.4,5.5,14.9,10.9c4.3,4.5,7.7,9.5,10.2,15c2.3,6.1,3.9,10.9,4.1,12.9c0,0.1,0.7,8.2,0.7,25.1H129z"/>
        			<rect x="60.7" y="72.8" class="st2" width="20.5" height="55"/>
        		</g>
        	</g>
        </g>
        <g id="Layer_1">
        	<g id="MusicRIse_Text">
        		<path id="U" class="st2" d="M171.7,127.9c-12,0-22-5-30.1-14.9c-1.5-2-2.6-3.7-3.3-5.2c-1-1.7-1.9-4-2.8-6.9
        			c-1-3.5-1.6-8.2-1.6-14.2V52.9H149v35.5c0,11.9,5.4,19.9,16.2,23.9c2.4,0.7,4.6,1.1,6.5,1.1s4-0.4,6.5-1.1
        			c10.8-4,16.2-12,16.2-23.9V52.9h15v33.9c0,6-0.5,10.7-1.6,14.2c-0.9,2.9-1.8,5.2-2.8,6.9c-0.7,1.4-1.7,3.1-3.2,5.2
        			C193.7,122.9,183.7,127.9,171.7,127.9z"/>
        		<path id="S_1_" class="st2" d="M241,52.9h50.5v15.4h-51c-4,0-6.4,2-7.3,5.9v1.1c0,2.3,1.3,4.3,3.9,5.8c0.8,0.3,1.6,0.5,2.5,0.5
        			h25.7c6.6,0,11.1,0.7,13.4,2c5.8,2.6,9.9,6.6,12.1,11.9c1.2,3.3,1.9,6.5,1.9,9.6c0,7.5-3.5,13.8-10.5,18.9
        			c-2.1,1.3-4.5,2.3-7.2,3.1c-2,0.5-5.4,0.7-10,0.7h-47.7l-0.1-15.4h51.2c4.3,0,7-2.1,8.2-6.3l0.1-1.4c0-3-1.5-5.3-4.4-6.9
        			c-1-0.6-2.4-0.8-4-0.8h-28.8c-7.5,0-13.8-3.3-18.8-9.9c-2.2-3.6-3.3-7.3-3.3-11.1v-2c0-7.7,3.7-13.8,11.2-18.3
        			C231.8,53.9,235.9,52.9,241,52.9z"/>
        		<path id="I_1_" class="st2" d="M300.5,52.9h15v74.9h-15V52.9z"/>
        		<path id="C" class="st2" d="M399.1,52.9v14.6H364c-6.9,0-12.1,1.5-15.8,4.5c-2,1.3-3.8,3.2-5.5,5.6c-2.7,4.3-4,8.6-4,13
        			s1.5,8.9,4.6,13.5c2.5,3.6,6.5,6.4,11.9,8.2c2,0.7,4.9,1,8.7,1H399v14.3l-1.7,0.3h-31.9c-8.7,0-15.2-1.1-19.4-3.2
        			c-9.1-4-15.6-10.5-19.5-19.5c-2-4.6-3-9.5-3-14.7c0-8.9,2.8-16.8,8.4-23.8c3.2-3.6,6.2-6.2,9-8c5.1-2.9,9.7-4.7,13.8-5.2
        			c1.5-0.5,7.2-0.7,17.4-0.7L399.1,52.9L399.1,52.9z"/>
        		<path id="R" class="st3" d="M407.5,41.2h50.3c8.9,0,15.3,2.7,19.2,8c1.8,2.1,2.9,4.1,3.4,6.1c1.1,3.9,1.2,7.7,0.5,11.5l-0.5,2.2
        			c-1.2,5.7-4.9,11.3-11,16.8c-3.8,3-7.1,5-9.9,5.9c5.1,7,6.4,16.3,4,27.9h-15.8l0.3-1.2c1.8-8.5-0.2-15.3-6.1-20.4
        			c-3.3-2.8-8.2-4.2-14.6-4.2h-30.9l3.2-15.1h51.3c5.6,0,10-2.8,13.2-8.3c0.5-1.1,0.8-2.1,1.1-2.8c0.7-3.1-0.1-5.9-2.1-8.4
        			c-1.8-1.7-4-2.6-6.5-2.6c0-0.1-0.8-0.2-2.3-0.2h-49.9L407.5,41.2z"/>
        		<path id="I" class="st3" d="M494.4,41.2h15.7l-16.6,78.3h-15.7L494.4,41.2z"/>
        		<path id="S" class="st3" d="M543.5,41.2h52.8l-3.4,16.1h-53.3c-4.2,0-7.2,2-9,6.1l-0.2,1.1c-0.5,2.4,0.4,4.5,2.8,6.1
        			c0.8,0.3,1.6,0.5,2.5,0.5h26.8c6.9,0,11.4,0.7,13.6,2.1c5.5,2.7,8.8,6.9,9.9,12.4c0.6,3.4,0.5,6.8-0.2,10.1
        			c-1.7,7.8-6.7,14.4-15.2,19.8c-2.5,1.4-5.2,2.4-8.2,3.2c-2.2,0.5-5.8,0.7-10.7,0.7H502l3.4-16.1h53.5c4.5,0,7.8-2.2,10-6.6
        			l0.4-1.5c0.7-3.1-0.3-5.5-3-7.2c-1-0.6-2.3-0.9-4-0.9h-30.1c-7.9,0-13.7-3.4-17.5-10.3c-1.4-3.8-1.8-7.7-0.9-11.6l0.4-2.1
        			c1.7-8,7-14.4,15.8-19.1C533.6,42.2,538.1,41.2,543.5,41.2z"/>
        		<path id="E" class="st3" d="M649.9,41.2h34.3l-3.3,15.2h-36.5c-6.6,0-11.8,1.2-15.8,3.6c-5.2,2.4-9.7,7.1-13.6,14.1
        			c-1.1,2.4-1.8,4.4-2.1,6.1c-1.3,5.9-0.2,11.4,3.1,16.6c2.3,2.8,4.6,4.6,7,5.5c2.5,1.3,6.2,1.9,11.1,1.9h36.7l-3.3,15.2h-35
        			c-8.9,0-15.3-1.1-19.2-3.3c-8.8-4.2-14.2-11.1-16.3-20.7c-1-4.8-0.9-9.9,0.2-15.3c2.5-11.7,9.2-21.6,20.2-29.9
        			c7-4.6,13.1-7.3,18.2-8.1C638.2,41.6,643,41.2,649.9,41.2z M636.5,72.8h40.9l-3.2,15.1h-40.9L636.5,72.8z"/>
        	</g>
        	<g id="TM">
        		<text transform="matrix(1 0 0 1 672.4287 124.4707)" class="st4 st5 st6">TM</text>
        	</g>
        	<g id="Red_Headphones">
        		<rect id="Right_Headphone" x="97.4" y="91.2" class="st7" width="30.6" height="37.3"/>
        		<rect id="Left_Headphone" x="13.9" y="91.2" class="st7" width="30.6" height="37.3"/>
        	</g>
        </g>
        <g id="Layer_3">
        </g>
        </svg>
        <!-- End MusicRise SVG -->
        <h1>Coming Soon</h1>
        <br>
        <p>For inquiries drop us a note below:</p>
        <p id="feedback"><?php echo $feedback?></p>
        <br>
        <div id="contact_form">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            Name:<span style="color: red; margin-left: 20px;"><?php echo $nameErr?></span><br>
            <input type="text" name="name"><br>
            E-mail Address:<span style="color: red; margin-left: 20px;"><?php echo $emailErr?></span><br>
            <input type="text" name="email"><br>
            Message:<span style="color: red; margin-left: 20px;"><?php echo $messageErr?></span><br>
            <textarea id="message" name="message" maxlength="320"></textarea>
            <br>
            <div id="form_buttons">
              <input class="button" name="send" type="submit" value="Send">
              <input class="button" type="reset" value="Reset">
            </div>
          </form>
        <p class="footer">© 2017 MusicRISE</p>
        <p class="footer">Design by <a href="http://www.travterrell.com" target="_blank"><img id="travlogo" src="assets/trav-logo.png" alt="Design by Travis Terrell - www.travterrell.com"></p>
        </div>
      </div>

  </body>
</html>
