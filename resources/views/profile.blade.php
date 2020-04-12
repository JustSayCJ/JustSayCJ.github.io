@extends("layout")
@section("content")
    <div class="container-fluid about">
        <div class="row jumbotron">
            <div class="col-12 text-center">
                <hr>
                <p class="lead">
                    Aangenaam, mijn naam is Christian. Ik ben een eerstejaars student van de HZ University of Applied Sciences. Hier vind je alles over mij.
                </p>
                <hr>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center">
                <h4>
                    Ik ben bekend met:
                </h4>
                <hr>
                <ul>
                    <li>HTML / CSS</li>
                    <li>Javascript / Typescript</li>
                    <li>PhP</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center">
                <h4>
                    Dit ben ik:
                </h4>
                <hr>
                <img class=thick-black-border style="-webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);" src="./assets/profielfoto.jpg" width="250" height="250" alt="Ik, zittend op een kanon">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center">
                <h4>
                    Wat meer persoonlijke info:
                </h4>
                <hr>
                <p class="lead">
                    Mijn volledige naam is Christian van Zeventer. Ik ben op dit moment 20 jaar oud, en woonachtig in Zierikzee. Momenteel heb ik 3 bijbanen: verkoopmedewerker bij BCC Zierikzee, medewerker bij StudentAanHuis en eigenaar van mijn eigen bedrijf Van Zeventer Media. Ik hou van gamen, met name Rocket League. Daarnaast luister (en maak) ik graag muziek.
                </p>
            </div>
            <hr>
        </div>
    </div>
@endsection
