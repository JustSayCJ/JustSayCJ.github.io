@extends("layout")
@section("content")
    <div class="container-fluid row text-center">
        <h2>Hoe sta ik ervoor?</h2>
    </div>
        <div class="jumbotron col-12 dashboardTable">
        <table>
                <tr style="background-color: #324f39; color: white">
                    <th>Cursus</th>
                    <th>Toets</th>
                    <th>Weging</th>
                    <th>EC</th>
                    <th>Cijfer</th>
                </tr>
                <tr>
                    <th colspan="8" style="background-color: #32A88B; color: white">Blok 1</th>
                </tr>
                <tr>
                    <td>Opleidings- en beroepsori&#235;ntatie</td>
                    <td>Eindgesprek</td>
                    <td>100%</td>
                    <td>2.5</td>
                    <td class="cijfer">5,5</td>
                </tr>
                <tr>
                    <td>Computer science basics</td>
                    <td>Theorietentamen</td>
                    <td>100%</td>
                    <td>7.5</td>
                    <td class="cijfer">6,9</td>
                </tr>
                <tr>
                    <td>Programming basics</td>
                    <td>Casustoets</td>
                    <td>100%</td>
                    <td>5</td>
                    <td class="cijfer">8</td>
                </tr>
                <tr>
                    <th colspan="8" style="background-color: #32A88B; color: white">Blok 2</th>
                </tr>
                <tr>
                    <td>Professional skills 1</td>
                    <td>Hogeschooltaal NL</td>
                    <td>33%</td>
                    <td>2.5</td>
                    <td class="cijfer">9,1</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Verslag</td>
                    <td>33%</td>
                    <td></td>
                    <td class="cijfer">5,5</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Functioneringsgesprek</td>
                    <td>33%</td>
                    <td></td>
                    <td class="cijfer">-</td>
                </tr>
                <tr>
                    <td>HZ Personality</td>
                    <td>Portfolio</td>
                    <td>100%</td>
                    <td>2.5</td>
                    <td class="cijfer"></td>
                </tr>
                <tr>
                    <td>Object-oriented programming</td>
                    <td>Casustoets</td>
                    <td>50%</td>
                    <td>5</td>
                    <td class="cijfer">5,6</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Groepsproject</td>
                    <td>50%</td>
                    <td>5</td>
                    <td class="cijfer">8,5</td>
                </tr>
                <tr>
                    <th colspan="8" style="background-color: #32A88B; color: white">Blok 3</th>
                </tr>
                <tr>
                    <td>Professional skills 2</td>
                    <td>Agile functioneren</td>
                    <td>50%</td>
                    <td>2.5</td>
                    <td class="cijfer">4,0</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Engels opdrachten</td>
                    <td>25%</td>
                    <td></td>
                    <td class="cijfer">9,6</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Engels werkstuk</td>
                    <td>25%</td>
                    <td></td>
                    <td class="cijfer">-</td>
                </tr>
                <tr>
                    <td>Professionele werkplek</td>
                    <td>Eindgesprek</td>
                    <td>100%</td>
                    <td>2.5</td>
                    <td class="cijfer"></td>
                </tr>
                <tr>
                    <td>Framework development 1</td>
                    <td>Casustoets</td>
                    <td>100%</td>
                    <td>5</td>
                    <td class="cijfer">6,7</td>
                </tr>
                <tr>
                    <td>Framework project 1</td>
                    <td>Requirementsverslag</td>
                    <td>50%</td>
                    <td>5</td>
                    <td class="cijfer"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Projectresultaat</td>
                    <td>50%</td>
                    <td></td>
                    <td class="cijfer">8,9</td>
                </tr>
                <tr>
                    <th colspan="8" style="background-color: #32A88B; color: white">Blok 4</th>
                </tr>
                <tr>
                    <td>Professional skills 3</td>
                    <td>Agile functioneren</td>
                    <td>50%</td>
                    <td>2.5</td>
                    <td class="cijfer"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Engels opdrachten</td>
                    <td>25%</td>
                    <td></td>
                    <td class="cijfer"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Engels werkstuk</td>
                    <td>25%</td>
                    <td></td>
                    <td class="cijfer"></td>
                </tr>
                <tr>
                    <td>IT Personality 1</td>
                    <td>Portfolio</td>
                    <td>100%</td>
                    <td>2.5</td>
                    <td class="cijfer"></td>
                </tr>
                <tr>
                    <td>Framework development 2</td>
                    <td>Opdrachten</td>
                    <td>100%</td>
                    <td>5</td>
                    <td class="cijfer"></td>
                </tr>
                <tr>
                    <td>Framework project 2</td>
                    <td>Code reviews</td>
                    <td>50%</td>
                    <td>5</td>
                    <td class="cijfer"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Projectresultaat</td>
                    <td>50%</td>
                    <td></td>
                    <td class="cijfer"></td>
                </tr>
        </table>
        </div>
    <div class="container-fluid">
        <div class="box" style="text-align: left">
            <p style="margin-left: 25px">Behaalde EC: 27.5</p>
            <p style="margin-left: 25px">NBSA grens: 45EC</p>
            <p style="margin-left: 25px">Propedeuse: 60EC</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="box">
            <h2>Studiewijzer</h2>
            <p id="studiewijzer">
                <ul>
                    <li id="studiewijzer"><a id="studiewijzer" href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen">Onderwijs- en examenregelingen</a></li>
                    <li id="studiewijzer"><a id="studiewijzer" href="https://hz.nl/uploads/documents/Regelingen/OERS/2018-2019/9.-HBO-ICT-vt-Uitvoeringsregeling-HZ-2018%E2%80%932019.pdf">Uitvoeringsregeling</a></li>
                    <li id="studiewijzer"><a id="studiewijzer" href="https://learn.hz.nl/">HZ Learn</a></li>
                    <li id="studiewijzer"><a id="studiewijzer" href="https://teams.microsoft.com/l/channel/19%3a827654897ab746089c081f24aff1c984%40thread.skype/Algemeen?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">HBO-ICT Teams pagina</a></li>
                    <li id="studiewijzer"><a id="studiewijzer" href="https://apps.hz.nl/angular/studievoortgang/studiestatus">Studievoortgang</a></li>
                    <li id="studiewijzer"><a id="studiewijzer" href="https://github.com/HZ-HBO-ICT">HBO-ICT Github pagina</a></li>
                </ul>
            </p>
        </div>
    </div>
        <script src="./app.js"></script>
@endsection
