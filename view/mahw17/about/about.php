<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

?>


        <div class="row">
          <div class="span12">
            <h2>Om kursen Ramverk1</h2>
            <h5><i class=" icon-info-sign icon-circled icon-32 active"></i> Här är lite information...!</h5>
          </div>
        </div>
        <div class="row">
          <div class="span6">

            <!-- start: Accordion -->
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      <i class="icon-minus"></i> Kursen Ramverk1</a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    Kursen <a href= "https://dbwebb.se/kurser/ramverk1-v2">Webbaserade ramverk 1</a>, a.k.a. ramverk1, lär ut programmering och objektorienterade kodstrukturer med designmönster
                    och modultänkande kring återanvändbara moduler i webbaserade ramverk samt tekniker för automatiserad testning, byggsystem
                    och flöde för kontinuerlig integration av programvaran.
                    Mitt, Marcus Holmersson, kursrepo på GitHub finns via denna <a href="https://github.com/mahw17/ramverk1">länk</a>.
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      <i class="icon-plus"></i> Ramverk</a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                      Denna webbplats använder sig utav ramverket Anax. Initital bygger vi upp webbplatsen med enskilda
                      Anax-moduler och ska så småningom få ihop ett fullskalligt ramverk.
                      Anax finns dokumenterat på <a href="https://github.com/mosbth/anax">GitHub</a> och används i flertalet
                      kurser inom BTH:s webbprogrammeringsutbildning <a href="https://dbwebb.se/">dbwebb</a>.
                      Mikael Roos (lärare på BTH) är den som ursprungligen har byggt Anax och ligger nu som öppen källkod.
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                      <i class="icon-plus"></i> Designmall</a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                      Som designmall valde jag temat <a href="https://dbwebb.se/">Lumia</a> från <a href="https://bootstrapmade.com/">BootstrapMade</a>.
                      Temat tilltalade mig och hade de regioner/block som jag letade efter, så som ovanliggande navbar, en footer samt att sidan
                      inte var ihophängande utan bestod av fristående sidor.
                  </div>
                </div>
              </div>
            </div>
            <!--end: Accordion -->

          </div>
          <div class="span6">
            <div class="centered">
              <img src="assets/lib/img/dummies/about-img1.png" alt="" />
            </div>
          </div>
    </div>
