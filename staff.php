<html>
    <head>
        <title>Staff</title>
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
        <div id="staff-container" class="container text-center col-12-lg">
            <img class="auto-size-image" src="img/Bees.jpg">
            <h1>Andrea Sholenberger, Secretary</h1>
            <p>Is a daughter of St Paul's. Andi is responsible for day-to-day office duties and financial matters at St Paul's. She is the friendly and helpful voice that you hear on the telephone!</p>
            <img class="auto-size-image" src="img/Andi 2.jpg">
            <h1>Barbara Faison, Director of Music</h1>
            <p>A daughter of St Paul's, Barbara has been Director of Music for over 20 years. She is church organist, leads the cherub choir and worship team and is responsible for all aspects of the congregation's musical life. As a pre-school teacher, Barbara has a special gift for working with young children.</p>
            <img class="auto-size-image" src="img/Barb.jpg">
            <h1>Barb and Chub Stouch, Sextons.</h1>
            <p>Barb and Chub are responsible for keeping our church neat and clean.</p>
            <img class="auto-size-image" src="img/Barb and Chub.jpg">            
            <?php
                require_once("static/html/footer.html");
            ?>
        </div>
    </body>
</html>
