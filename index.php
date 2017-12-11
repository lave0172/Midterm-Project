<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Super Smash Bros. Switch</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="styles/css/main.css">
  </head>
  <body>
    <header>
        <div id="home-icon"><div>
        <h1>Super Smash Bros. for Switch</h1>
        <ul id="social-links">
            <li><i class="fa fa-envelope fa-fw"></i></li>
            <li><i class="fa fa-deviantart fa-fw"></i></li>
            <li><i class="fa fa-facebook fa-fw"></i></li>
            <li><i class="fa fa-tumblr fa-fw"></i></li>
            <li><i class="fa fa-twitter fa-fw"></i></li>
        </ul>
    </header>

    <nav>
        <ul>
            <li><a class="active" href="index.php">About</a></li>
            <li><a href="#Characters">Original Characters</a></li>
            <li><a href="#New-Challengers">New Challengers</a></li>
            <li><a href="#Stages">Stages</a></li>
            <li><a href="#Contact">Contact</a></li>
        </ul>
    </nav>

    <main class="container-fluid">

        <h2>About</h2>
        <p>A fan website where you can choose your favourite original character from the Super Smash Bros. series.
          Vote for a new challenger that you would want to see as a playable character. You can also visit the social links and see other information, posts, photos, and artwork</p>

        <h2>Vote for Favourite Original Character</h2>

        <div class="image-container">
            <div class="row">

                <?php
                    require_once('server/characters.php');

                    foreach ($characters as $character) {
                      if ($character['filter'] === "old") {
                          echo "<div class='image col-xs-12 col-sm-6 col-md-4 col-lg-3'>";
                          echo "<img src='" . $character['image'] . "' />";
                          echo $character['name'];
                          echo "</div>";
                      }

                    }
                ?>
            </div>
        </div>

        <h2>Vote for a New Challenger</h2>

        <!-- Comment -->

        <div class="image-container">
            <div class="row">
                <?php
                    foreach ($characters as $character) {
                      if ($character['filter'] === "new") {
                          echo "<div class='image col-xs-12 col-sm-6 col-md-4 col-lg-3'>";
                          echo $character['name'];
                          echo "</div>";
                        }
                    }
                ?>
            </div>
        </div>

        <h2> Contact </h2>
        <div class="clearfix row">
            <div class="column col-xs-12">
                    <form id="contact-form">
                    <input type="text" placeholder="Name" />
                    <input type="text" placeholder="Email"/>

                    <textarea placeholder="Message"></textarea>

                    <button>Submit</button>
                </form>

            </div>

            <!-- here is the google map, located to algonquin college-->

            <div class="column">
                <h2>Location</h2>
                <iframe id="map" width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=24&center=45.3471%2C-75.7595&key=AIzaSyAwUGeCj5pvik39bTiJEVHMhG4uSnKRWBo" allowfullscreen></iframe>
            </div>
        </div>

    </main>

    <footer>
        <p><a href="#About">About</a> | <a href="#Characters">Original Characters</a> | <a href="#New-Challengers">New Challengers</a> | <a href="#Stages">Stages</a> | <a href="#Contact">Contact</a></p>

        <ul id="social-links-footer">
            <li><i class="fa fa-envelope fa-fw"></i></li>
            <li><i class="fa fa-deviantart fa-fw"></i></li>
            <li><i class="fa fa-facebook fa-fw"></i></li>
            <li><i class="fa fa-tumblr fa-fw"></i></li>
            <li><i class="fa fa-twitter fa-fw"></i></li>
        </ul>

        <P class="back-to-top"><a href="#">Back to Top</a></P>
        <p class="copyright">
            &copy; 2017 - Jeff Lavergne
        </p>

        <p class="copyright">
            &copy; 2014 Nintendo
Original Game: © Nintendo / HAL Laboratory, Inc.
Characters: © Nintendo / HAL Laboratory, Inc. / Pokémon. / Creatures Inc. / GAME FREAK inc. / SHIGESATO ITOI / APE inc. / INTELLIGENT SYSTEMS /
SEGA / CAPCOM CO., LTD. / BANDAI NAMCO Games Inc. / MONOLITHSOFT / CAPCOM U.S.A., INC. / SQUARE ENIX CO., LTD.
        </p>

        <p>This website is a fansite and is in no way affiliated with Nintendo or any other mentioned companies.</p>

    </footer>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
