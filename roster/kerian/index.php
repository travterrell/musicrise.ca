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
              <h1>Kerian</h1>
              <hr>
              <div class="col-sm-12">
                <ul class="rslides">
                  <li><img class="normal" src="../../assets/img/kerian2.jpg" alt="© <?php echo date("Y");?> MusicRISE - All Rights Reserved."></li>
                  <li><img class="normal" src="../../assets/img/kerian.jpg" alt="© <?php echo date("Y");?> MusicRISE - All Rights Reserved."></li>
                </ul>
              </div>
              <div class="col-sm-12">
                <div class="roster_info row" id="roster_info">
                  <div class="col-sm-12 col-xs-12">
                    <p>Toronto-based Soca artist Kerian Piper has been winning over fans
                    internationally with his powerful vocals and commanding stage presence.
                    Performing a unique brand of music he describes as meaningful,
                    inspiring, and loaded with energy, he combined his love of travel and his
                    dreams of making a mark in the music industry—performing all across
                    the globe, from the Caribbean and South Africa to Asia.</p>
                    <p>Born in the Caribbean Island of St. Lucia, Kerian found his voice while
                    singing in a small church, his love of music, though is eclectic, which gives his music an endearing edge. Beyond Soca, Reggae, and a splash of R&B
                    with soulful tones, he gleans influence from acts like The Scorpions, Kings
                    of Leon, and the Grammy Award-winning Foo Fighters.</p>
                    <p>“A seasoned performer, having brought his energetic aura to pubs, night
                    clubs, concert venues, and some of the most luxurious cruise liners
                    around the planet, he is making a return to the Soca music scene with the
                    release two new hit tracks: "Ah Feeling" and "Jenni."</p>
                    <p>“My music is about enjoyment and promoting good vibes to break
                    away from the stresses of life ... it is music to whine and dance to,
                    anywhere you are,”</p>
                    <p class="center red">KERIAN'S STORY IS FAR FROM OVER...</p>
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
