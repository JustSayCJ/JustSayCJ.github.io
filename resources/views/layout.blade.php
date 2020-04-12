<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Christian's pagina</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <div class=topnav>
        <a class="{{ Request::path() === "/" ? "active" : "" }}" href="/">Home</a>
        <a class="{{ Request::path() === "profile" ? "active" : "" }}" href="/profile">Over mij</a>
        <a class="{{ Request::path() === "dashboard" ? "active" : "" }}" href="/dashboard">Dashboard</a>
        <a class="{{ Request::path() === "motivatie" ? "active" : "" }}" href="/motivatie">Motivatie</a>
        <a class="{{ Request::path() === "beroepsbeeld" ? "active" : "" }}" href="/beroepsbeeld">Beroepsbeeld</a>
    </div>
</head>
<body>
    @yield("content")
    <footer class="footer">
        <div class="container-fluid padding">
            <hr class="light"/>
            <div class="row text-center">
                <div class="col-md-6">
                    <h5>Christian van Zeventer</h5>
                    <hr class="light"/>
                    <p>XReateHD@gmail.com</p>
                </div>
                <div class="col-md-6">
                    <h5>Mijn bedrijf:</h5>
                    <hr class="light"/>
                    <a href="www.vanzeventermedia.nl">Van Zeventer Media</a>
                </div>
                <div class="col-12">
                    <hr class="light-100"/>
                    <h5>&copy; Christian van Zeventer 2020</h5>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
