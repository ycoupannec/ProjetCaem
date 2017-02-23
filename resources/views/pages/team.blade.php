<!--CALLING THE DEFAULT LAYOUT-->
@extends('layouts.default')
<!------------------------------>



<!--HEAD TITLE :-->
@section('pageTitle')
CAEM - Mon parcours musical
@endsection
<!---------------->



<!--MAIN CONTENT :-->
@section('pageContent')
<main class="container mainEquipe">

        <section id="sectionContributors" class="row">

          <header>
            <p>Intervenants</p>
          </header>

            <div class="contribLine col-md-12">
                  <div class="col-md-3">
                      <img src="../assets/img/imgtest.png">
                      <h3>Martin Schiffmann</h3>
                      <p>Pianiste</p>
                  </div>
                  <div class="col-md-3">
                      <img src="../assets/img/imgtest.png">
                      <h3>Philippe Bregand</h3>
                      <p>Guitariste, musicien conseil</p>
                  </div>
                  <div class="col-md-3">
                      <img src="../assets/img/imgtest.png">
                      <h3>Jean-Christophe David</h3>
                      <p>Violoniste/altiste</p>
                  </div>
                  <div class="col-md-3">
                      <img src="../assets/img/imgtest.png">
                      <h3>Jean-Baptiste Chané</h3>
                      <p>Musicothérapeute</p>
                  </div>
            </div>

            <div class="contribLine col-md-12">
                  <div class="col-md-3">
                      <img src="../assets/img/imgtest.png">
                      <h3>Alexandre Joly</h3>
                      <p>Percussioniste</p>
                  </div>
                  <div class="col-md-3">
                      <img src="../assets/img/imgtest.png">
                      <h3>Gregory Tran</h3>
                      <p>Bassiste, pianiste</p>
                  </div>
                  <div class="col-md-3">
                      <img src="../assets/img/imgtest.png">
                      <h3>Robin Grisinelli</h3>
                      <p>Guitariste</p>
                  </div>
                  <div class="col-md-3">
                      <img src="../assets/img/imgtest.png">
                      <h3>Marcjean</h3>
                      <p>Saxophoniste, chanteur</p>
                  </div>
            </div>

            <div class="contribLine col-md-12">
                <div class="col-md-3">
                    <img src="../assets/img/imgtest.png">
                    <h3>Henri Alfred Suzon</h3>
                    <p>Trompettiste</p>
                </div>
                <div class="col-md-3">
                    <img src="../assets/img/imgtest.png">
                    <h3>Joseph Barbier</h3>
                    <p>Batteur</p>
                </div>
                <div class="col-md-3">
                    <img src="../assets/img/imgtest.png">
                    <h3>Claire David</h3>
                    <p>Chanteuse, tromboniste</p>
                </div>
                <div class="col-md-3">
                    <img src="../assets/img/imgtest.png">
                    <h3>Naty Andria</h3>
                    <p>Chanteuse</p>
                </div>
            </div>

            <div class="contribLine col-md-12">
                <div class="col-md-3">
                    <img src="../assets/img/imgtest.png">
                    <h3>Sébastion Goret</h3>
                    <p>Pianiste, Taï Ji</p>
                </div>
                <div class="col-md-3">
                    <img src="../assets/img/imgtest.png">
                    <h3>Abdellah Hireche</h3>
                    <p>Danseur hip-hop</p>
                </div>
            </div>

      </section>



        <section id="sectionAdministration" class="row">

          <header>
            <p>Administration</p>
          </header>

          <h2>Salariés d'administration</h2>

          <div class="adminLine col-md-12">
              <div class="col-md-3">
                  <img src="../assets/img/imgtest.png">
                  <h3>Jean-Basptiste Chané</h3>
                  <p>Directeur</p>
              </div>
              <div class="col-md-3">
                  <img src="../assets/img/imgtest.png">
                  <h3>Sonia Monnin</h3>
                  <p>Accueil, secrétariat</p>
              </div>
              <div class="col-md-3">
                  <img src="../assets/img/imgtest.png">
                  <h3>Robin Grisinelli</h3>
                  <p>Communication</p>
              </div>
          </div>

          <h2>Conseil d'administration</h2>

          <div class="adminLine col-md-12">
              <div class="col-md-3">
                  <img src="../assets/img/imgtest.png">
                  <h3>Yves Tannier</h3>
                  <p>Président</p>
              </div>
              <div class="col-md-3">
                  <img src="../assets/img/imgtest.png">
                  <h3>Christine Anaclet</h3>
                  <p>Vice-présidente</p>
              </div>
              <div class="col-md-3">
                  <img src="../assets/img/imgtest.png">
                  <h3>Bruno Berchoud</h3>
                  <p>Secrétaire</p>
              </div>
              <div class="col-md-3">
                  <img src="../assets/img/imgtest.png">
                  <h3>Olivier Pautot</h3>
                  <p>Secrétaire adjoint</p>
              </div>
          </div>

          <div class="adminLine col-md-12">
              <div class="col-md-3">
                  <img src="../assets/img/imgtest.png">
                  <h3>Jean-Luc Donier</h3>
                  <p>Trésorier</p>
              </div>
              <div class="col-md-3">
                  <img src="../assets/img/imgtest.png">
                  <h3>Mary Moritz</h3>
                  <p>Trésorière adjoint</p>
              </div>
          </div>

          <p class="col-md-12 adminOthers">Autres membres : Géraldine Gobet-Boillon, François Guillet, Jacqueline Martin, Christelle Mouchet, Claire Pourcelot</p>

      </section>


    </main>
@endsection
<!------------------>
