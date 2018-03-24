<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MusicRise&trade;</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../musicrisestyles2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="../assets/musicrisefavicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <a href="../index.php">
            <img src="../assets/musicrise-logo-small.png" id="index-logo-small">
          </a>
          </div>
          <div class="col-sm-2 col-xs-2 navlinks">
          </div>
          <div class="col-sm-2 col-xs-2 navlinks">
            <a href="../index.php">Home</a>
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

        <div class="roster row" id="roster">
          <div class="col-sm-12 col-xs-12">
            <h1 id="roster_h1">Roster</h1>
            <div class="col-sm-12">
              <ul class="rslides">
                <li><img src="../assets/img/ronallen1.jpg" alt="© 2017 MusicRISE - All Rights Reserved."></li>
                <li><img src="../assets/img/ronallen2.jpg" alt="© 2017 MusicRISE - All Rights Reserved."></li>
                <li><img src="../assets/img/ronallen3.jpg" alt="© 2017 MusicRISE - All Rights Reserved."></li>
              </ul>
            </div>
            <div class="col-sm-12">
              <h2>Ron Allen</h2>
              <div class="roster_info row" id="roster_info">
                <div class="col-sm-12 col-xs-12">
                  <p>Ron Allen is a Toronto-based, JUNO-nominated, music producer, songwriter, and DJ. Ron is also the founder of legendary dance music imprint, Strobe Records, an instrumental label in developing the sounds of house music and techno in the early 90’s. Ron began his musical career as a DJ and his love for music eventually led him into the studio to write and produce his own music. His prowess in the studio has also led Ron to work with countless artists in many different genres including pop, urban, dance, hip-hop, R&B, rock, and country.</p>
                  <p>After moving to Toronto in 1988, Ron signed to Bigshot Records, owned by Gerry Fumo, Andrew Komis and Nick Fiorucci (Hi-Bias). “My first meeting was with Andrew Komis AKA “Komix” (RIP). I played Andrew my demo that up until that point had only been heard Derek May (Transmat), a legendary producer and DJ that gave me the inspiration to do this music thing. Andrew signed me to Bigshot and I became a studio rat from that point on.”</p>
                  <p>“Time To Feel The Rhythm” was Ron’s first recording project. “The track was made basically with a JUNO 106 and an SP1200 sampler recorded to 1/2 inch tape and then edited with a razor blade to the final product. I will never forget walking into TRAX and Carnival records in Toronto to buy records for my next DJ set when I saw it on the shelves... talked about hooked!” The track hit the dance charts in a big way and was eventually licensed to Outer Rhythm in the UK.</p>
                  <p>In 1991, producer/DJ’s Ron Allen and Hayden Andre fused their talents and formed Strobe Records, one of the most influential house music labels of its time. The popularity of Strobe grew very quickly and its unique sound spread throughout North America, Europe, South America, and Asia. With classic releases such as Subculture “The Voyage”, Helen Sharpe “Got 2 Have Your Love”, Hayden Andre “Tribal Life”, The R.A.S.E. “Get On Up” and Afterglow “Come Back 2 Me”, Strobe was one of the hottest selling house music labels in the industry. Strobe’s vision even gave birth to producer/DJ Nick Holder, owner of world renowned DNH Records, with the release of the critically acclaimed “Digital Age” EP.</p>
                  <p>Since ‘91, Ron has had countless soulful house, deep house and techno releases on Strobe Records, and has also had many features on some of the finest labels in the dance music industry, including Strictly Rhythm, Plus 8, Stickman, Definitve, DNH, Poker Flat, ClubStar, Soul Candi, Tresor, T’s Box, Crosstown Rebels, Defected (Nikki Beach Compilation, Bargrooves Ibiza 2014) and Glitterbox 2017. Ron also made the 2013 Traxsource TOP 200 Afro House and Soulful House Charts with Ron Allen Featuring Chach “Wunder Y” (Dino and Terry Remix) and Ron Allen featuring Affrica “Wordz” (Steve Bug Remix).</p>
                  <p>Ron Allen’s love for music is as strong now as it was when he first started out in the industry. With no signs of slowing down, expect more heat from one of Toronto’s brightest lights.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="footer">© 2017 MusicRISE<span>&trade;</span></p>
        <br>

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
