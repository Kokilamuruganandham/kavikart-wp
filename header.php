<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title(); ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gabarito:wght@600&family=Heebo:wght@300&family=Inter:wght@300&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>

</head>
<body>
    <div class="container-fluid main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="first-logo">KaviKart</div>
                </div>
                <div class="col-sm-5">
                    <div class="search-box">
                        <form action="/action_page.php">
                            <input type="text" class="top-search" placeholder=" Search For Products and More.... "
                                name="search">
                        </form>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="nav-items">
                        <ul class="nav">
                            <a class="nav-link" href="#">Home</a>
                            <a class="nav-link" href="#">Men</a>
                            <a class="nav-link" href="#">Kids</a>
                            <a class="nav-link" href="#">Fashion</a>
                            <a class="nav-link" href="#">Sign in <i class="fa-solid fa-user"></i></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>