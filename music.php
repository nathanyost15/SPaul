<html>
    <head>
        <title>Music</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="static/styles/style.css">
    </head>
    <body>
        <?php
            // Inserts navbar to page.
            require_once("static/html/navbar.html");
        ?>
        <div class="container container-style text-center col-12-lg">

            <div id="music-head-img" class="text-left">
                <img class="auto-size-image" src="img/Music at St Pauls.jpg">
            </div>

            <div class="row">
                <div class="col-6 text-left">
                    <p>
                        Music is a large part of the life and community at St. Paul's. If you enjoy music, we hope you will find a place to plug in. The Adult Choir rehearses on Wednesday evenings at 7:30 p.m. The Adult Choir shares in worship September through June. Additional singers join the Adult choir seasonally to form the special Festival Choir, which adds joyously to seasonal services. The Worship Team (our contemporary music group) rehearses on Thursday evenings at 7:00 p.m. The Worship Team includes a guitarist, a keyboard player and vocalists and shares music during the 9:45 a.m. service all year. Both the Cherub and Oasis choirs rehearse Wednesdays at the Oasis program, under the direction of our Music Director, Barbara Faison ("Ms. Barb"). and the children share their musical talents in worship during the school year.
                    </p>
                </div>
                <div class="col-6 text-right">
                    <img class="auto-size-image" src="img/Worship Team.jpg">
                </div>
            </div>

            <div id="music-btm-row-imgs" class="row">
                <div class="col-6 text-left">
                    <img class="auto-size-image" src="img/Oasis 25.jpg">
                </div>
                <div class="col-6 text-right">
                    <img class="auto-size-image" src="img/Oasis 26.jpg">
                </div>
            </div>
            <?php
                require_once("static/html/footer.html");
            ?>
        </div>
    </body>
</html>
