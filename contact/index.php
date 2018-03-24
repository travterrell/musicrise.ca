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
  $to = "gregory@musicrise.ca, travterrell@gmail.com";
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MusicRise&trade; - Toronto's rising talent and entertainment agency">
    <meta name="keywords" content="MusicRise, Toronto, music, Canada, talent agency">
    <title>MusicRise&trade;</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="../assets/musicrisefavicon.png">
  </head>

  <body>

      <!-- This is the video background -->
      <video id="bg_vid" poster="../assets/posterbg.jpg" autoplay loop>
        <source src="../assets/party-footage.mp4" type="video/mp4">
        <source src="../assets/party-footage.webm" type="video/webm">
      </video>

      <div class="main">

        <div class="nav row" id="nav">
          <div class="col-sm-2 col-xs-2 navlinks">
            <a href="/">
            <img src="../assets/musicrise-logo-small.png" id="index-logo-small">
          </a>
          </div>
          <div class="col-sm-2 col-xs-2 navlinks">
          </div>
          <div class="col-sm-2 col-xs-2 navlinks">
            <a href="/">Home</a>
          </div>
          <div class="col-sm-2 col-xs-2 navlinks">
            <a href="../about">About</a>
          </div>
          <div class="col-sm-2 col-xs-2 navlinks">
            <a href="../roster">Roster</a>
          </div>
          <div class="col-sm-2 col-xs-2 navlinks">
            <a href="../contact">Contact</a>
          </div>
        </div>

        <div class="contact row" id="contact">
          <div class="col-sm-12 col-xs-12">
            <h1 id="contact_h1">Contact</h1>
            <p>Principal Talent Manager:</p>
            <p>Gregory Scott - "Cali"</p>
            <img src="../assets/img/cali.jpg" alt="Gregory Scott - 'Cali'">
            <br>
            <p>For booking inquiries drop us a note below:</p>
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
            </div>
            <p class="footer">© <?php echo date("Y");?> MusicRISE<span>&trade;</span></p>
            <br>
          </div>
        </div>

      </div>

    </div>

  </body>
</html>
