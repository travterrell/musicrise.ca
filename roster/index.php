s<!DOCTYPE html>
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
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
    <![endif]-->
  </head>

  <body>

      <!-- This is the video background -->
      <video id="bg_vid" poster="../assets/posterbg.jpg" autoplay loop>
        <source src="../assets/party-footage.mp4" type="video/mp4">
        <source src="../assets/party-footage.webm" type="video/webm">
      </video>

      <div class="main">

        <div class="content">

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

          <div class="roster row">
            <div class="col-sm-12 col-xs-12">
              <h1 id="roster_h1">Roster</h1>
            </div>
          </div>

          <div class="roster row">
            <div class="col-xs-6">
              <a href="/roster/ron-allen"><img style="width: 100%" src="../assets/img/ronallen1.jpg"></a>
              <h2>Ron Allen</h2>
            </div>
            <div class="col-xs-6">
              <a href="/roster/elephant-12"><img style="width: 100%" src="../assets/img/E12-1.jpg"></a>
              <h2>Elephant 12</h2>
            </div>
          </div>

          <div class="roster row">
            <div class="col-xs-6">
              <a href="/roster/julian-taylor-band"><img style="width: 100%" src="../assets/img/jt-1.jpg"></a>
              <h2>Julian Taylor Band</h2>
            </div>
            <div class="col-xs-6">
              <a href="/roster/selecta-q45"><img style="width: 100%" src="../assets/img/q45-3.jpg"></a>
              <h2>Selecta Q45</h2>
            </div>
          </div>

          <div class="roster row">
            <!-- <div class="col-xs-12">
              <a href="/roster/julian-taylor-band"><img style="width: 100%" src="../assets/img/jt-1.jpg"></a>
              <h2>Julian Taylor Band</h2>
            </div> -->
            <div class="col-xs-12">
              <a href="/roster/kerian"><img style="width: 46%" src="../assets/img/kerian.jpg"></a>
              <h2>Kerian</h2>
            </div>
          </div>


          <p class="footer">© <?php echo date("Y");?> MusicRISE<span>&trade;</span></p>
          <br>

        </div>

      </div>

    </div>
  <script src="../responsiveslides.js"></script>
      <script>
        $(function() {
          $(".rslides").responsiveSlides();
        });
      </script>
  </body>
</html>
