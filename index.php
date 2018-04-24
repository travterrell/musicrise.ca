<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MusicRise&trade; - Toronto's rising talent and entertainment agency">
    <meta name="keywords" content="MusicRise, Toronto, music, Canada, talent agency">
    <title>MusicRise&trade;</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="assets/musicrisefavicon.png">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
    <![endif]-->
  </head>

  <body>

    <!-- This is the video background -->
    <video id="bg_vid" poster="assets/posterbg.jpg" autoplay loop>
      <source src="assets/party-footage.mp4" type="video/mp4">
      <source src="assets/party-footage.webm" type="video/webm">
    </video>

    <div class="main">

      <div class="home">
        <img id="index-logo" src="assets/musicrise_logo.png">
        <h1 id="tagline">Rising talent and entertainment agency</h1>
      </div>

      <div class="content">
        <div class="nav_home row">
          <div class="col-sm-3 col-xs-3 navlinks">
            <a href="/">Home</a>
          </div>
          <div class="col-sm-3 col-xs-3 navlinks">
            <a href="/about">About</a>
          </div>
          <div class="col-sm-3 col-xs-3 navlinks">
            <a href="/roster">Roster</a>
          </div>
          <div class="col-sm-3 col-xs-3 navlinks">
            <a href="/contact">Contact</a>
          </div>
          <br>
          <p class="footer">© <?php echo date("Y");?> MusicRISE<span>&trade;</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Design by <a href="http://www.travterrell.com" target="_blank"><img id="travlogo_index" src="../assets/trav-logo.png" alt="Design by Travis Terrell - www.travterrell.com"></p>
        </div>
      </div>

    </div>

  </body>
</html>
