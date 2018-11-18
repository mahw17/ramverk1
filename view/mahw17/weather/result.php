<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

?>

      <div class="container">
        <div class="row">
          <div class="span12">
                <?php if ($results["valid"]) : ?>
                <h1><?= $weatherType === "forecast" ? "Väderprognos" : "Väderhistorik" ?><?= null !== $ipInfo->city ? ' för ' . $ipInfo->city : null ?></h1>
                <p>(Latitude:  <?= $weatherInfo->latitude ?> / Longitude:  <?= $weatherInfo->longitude ?>)</p>
                <hr>
                  <?php foreach ($weatherInfo->daily->data as $day): ?>
                      <h5>Datum: <?= date("Y-m-d", $day->time) ?></h5>
                      <h5>Prognos: <?= $day->summary ?></h5>
                      <hr>
                  <?php endforeach; ?>

                  <a onclick="ipMap.initMap(<?= $weatherInfo->latitude ?>, <?= $weatherInfo->longitude ?>)" class="btn btn-primary">Kartvy</a>
                <?php else : ?>
                  <p>IP-address <?= $ip ?> is not valid. Try again.</p>
                <?php endif; ?>

                <a href="<?= url("weather") ?>" class="btn btn-primary">Tillbaka</a>
              <div id="mapdiv"></div>
          </div>
        </div>
