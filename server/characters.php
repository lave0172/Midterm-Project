


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




<?php
  $characters = [
    [
      "name" => "Boo",
      "series" => "Super Mario Bros.",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Dr. Luigi",
      "series" => "Super Mario Bros.",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Dry Bowser",
      "series" => "Super Mario Bros.",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Ice Climbers",
      "series" => "Ice Climbers",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Knuckles",
      "series" => "Sonic",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Krystal",
      "series" => "Starfox Adventures",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Pyra",
      "series" => "Xenoblade Chronicles",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Shadow",
      "series" => "Sonic",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Tails",
      "series" => "Sonic",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Toad",
      "series" => "Super Mario Bros.",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Wolf",
      "series" => "Starfox",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Gengar",
      "series" => "Pokemon",
      "image" => "",
      "filter" => "new"
    ],

    [
      "name" => "Mario",
      "series" => "Super Mario Bros.",
      "image" => "images/mario.png",
      "filter" => "old"
    ],

    [
      "name" => "Donkey Kong",
      "series" => "Donkey Kong",
      "image" => "images/donkeykong.png",
      "filter" => "old"
    ],

    [
      "name" => "Link",
      "series" => "The Legend of Zelda",
      "image" => "images/link.png",
      "filter" => "old"
    ],

    [
      "name" => "Samus",
      "series" => "Metroid",
      "image" => "images/samus.png",
      "filter" => "old"
    ],

    [
      "name" => "Yoshi",
      "series" => "Super Mario Bros.",
      "image" => "images/yoshi.png",
      "filter" => "old"
    ],

    [
      "name" => "Kirby",
      "series" => "Kirby",
      "image" => "images/kirby.png",
      "filter" => "old"
    ],

    [
      "name" => "Fox",
      "series" => "Starfox",
      "image" => "images/fox.png",
      "filter" => "old"
    ],

    [
      "name" => "Pikachu",
      "series" => "Pokemon",
      "image" => "images/pikachu.png",
      "filter" => "old"
    ],

    [
      "name" => "Luigi",
      "series" => "Super Mario Bros.",
      "image" => "images/luigi.png",
      "filter" => "old"
    ],

    [
      "name" => "Captain Falcon",
      "series" => "F-Zero",
      "image" => "images/captainfalcon.png",
      "filter" => "old"
    ],

    [
      "name" => "Ness",
      "series" => "Earthbound",
      "image" => "images/ness.png",
      "filter" => "old"
    ],

    [
      "name" => "Jigglypuff",
      "series" => "Pokemon",
      "image" => "images/jigglypuff.png",
      "filter" => "old"
    ],

  ];
 ?>
