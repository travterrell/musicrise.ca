s<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MusicRise&trade; - Toronto's rising talent and entertainment agency">
    <meta name="keywords" content="MusicRise, Toronto, music, Canada, talent agency">
    <title>MusicRise&trade;</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="../../assets/musicrisefavicon.png">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
    <![endif]-->
  </head>

  <body>

      <!-- This is the video background -->
      <video id="bg_vid" poster="../../assets/posterbg.jpg" autoplay loop>
        <source src="../../assets/party-footage.mp4" type="video/mp4">
        <source src="../../assets/party-footage.webm" type="video/webm">
      </video>

      <div class="main">

        <div class="content">

          <div class="nav row" id="nav">
            <div class="col-sm-2 col-xs-2 navlinks">
              <a href="/">
              <img src="../../assets/musicrise-logo-small.png" id="index-logo-small">
            </a>
            </div>
            <div class="col-sm-2 col-xs-2 navlinks">
            </div>
            <div class="col-sm-2 col-xs-2 navlinks">
              <a href="/">Home</a>
            </div>
            <div class="col-sm-2 col-xs-2 navlinks">
              <a href="../../about">About</a>
            </div>
            <div class="col-sm-2 col-xs-2 navlinks">
              <a href="../../roster">Roster</a>
            </div>
            <div class="col-sm-2 col-xs-2 navlinks">
              <a href="../../contact">Contact</a>
            </div>
          </div>

          <div class="roster row">
            <div class="col-sm-12 col-xs-12">
              <h1>Elephant 12</h1>
              <hr>
              <div class="col-sm-12">
                <ul class="rslides">
                  <li><img class="normal" src="../../assets/img/E12-1.jpg" alt="© <?php echo date("Y");?> MusicRISE - All Rights Reserved."></li>
                  <li><img class="normal" src="../../assets/img/E12-2.jpg" alt="© <?php echo date("Y");?> MusicRISE - All Rights Reserved."></li>
                  <li><img class="normal" src="../../assets/img/E12-3.jpg" alt="© <?php echo date("Y");?> MusicRISE - All Rights Reserved."></li>
                </ul>
              </div>
              <div class="col-sm-12">
                <div class="roster_info row" id="roster_info">
                  <div class="col-sm-12 col-xs-12">
                    <p>Elephant 12's music is unapologetic punk rock laced with a magnetic punchy electro bass line. Originated in the depth of East London, the three piece band consist of Jerome (vocals), Robbie (guitar) and Manlio (programming) bringing a sonic sound that's captivating. Elephant 12 is known for their stage performances generating buzz as they are renowned for their sing along anthems Diet Coke, Holiday, Shut Up and many more.</p>
                    <p>Such impressive performances and songs have amassed huge a cult following for the band. In turn these boys have captured a new sound which is encouraging crowds onto the dance floor in droves plus winning over most skeptics.</p>
                    <p>YouTube<span>&trade;</span> is another testament of their growing popularity where live performances are regularly posted by fans. Their videos are a constant growth that's connecting with the world and amassing features on Blank TV, AfroPunk, Italian TV, Scuzz and Muzu TV, Funk Gumbo (England, USA, Spain, and Italy). You can expect catchy arrangements, entertaining lyrics dealing with love, daily realities and heartfelt emotions.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <p class="footer">© <?php echo date("Y");?> MusicRISE<span>&trade;</span></p>
          <br>

        </div>

    </div>
  <script src="../../responsiveslides.js"></script>
      <script>
        $(function() {
          $(".rslides").responsiveSlides();
        });
      </script>
  </body>
</html>
