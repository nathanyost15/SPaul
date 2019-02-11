<html>
    <head>
        <title>Church History</title>
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
        <div class="container container-style">
            <img class="auto-size-image" src="img/Church History.jpg" alt="">
            <h1>Church History</h1>
            <div class="row">
                <div class="col-6">
                    <p>
                        St. Paul's United Church of Christ was founded in 1884 by members from Zion's Reformed Church in Pottstown. Our first church building was located at Penn and Walnut Streets. Because of our close proximity to two other churches of our own denomination, we eventually relocated to the growing north end of the borough.
                        In 1957, the original church at our present site at the corner of Grace and Franklin Streets was dedicated. Here, in this rapidly developing neighborhood, our church began to grow. Our Christian Education wing was built in 1962 to meet the needs of our expanding congregation. In 1978, another building program was undertaken to meet the needs of our growing church family. The result of this program was our present sanctuary which was dedicated in 1980.
                        In 2019, our 135th year, St. Paul's continues to grow in faith and service with an expanding ministry to its members, our community, and the world. We invite you to join us and to make St. Paul's your church home.
                    </p>
                </div>
                <div class="col-6 text-center">
                    <img class="auto-size-image" src="img/CH1.jpg" alt="">
                    <img id="ch-hist-quilt-img" src="img/Banner 5.jpg" title="A Signature Quilt reflects our rich history." alt="A Signature Quilt reflects our rich history.">
                </div>
            </div>
            <div class="text-center">
                <?php require_once("static/html/footer.html") ?>
            </div>
        </div>
    </body>
</html>
