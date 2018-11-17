<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

?>

      <div class="container">
        <div class="row">
          <div class="span12">
              <h1>Result</h1>
                <?php if ($results["valid"]) : ?>
                  <p>IP-address <b><?= $ip ?></b> is valid according to class <?= $results["ipType"] ?>.</p>
                  <p><?= null !== $results["hostname"] ? 'Hostname: ' . $results["hostname"] : null ?></p>

                  <p>Latitude:  <?= $info->latitude ?></p>
                  <p>Longitude:  <?= $info->longitude ?></p>
                  <p><?= null !== $info->city ? 'City: ' . $info->city : null ?></p>

                  <a onclick="ipMap.initMap(<?= $info->latitude ?>, <?= $info->longitude ?>)" class="btn btn-primary">Kartvy</a>
                <?php else : ?>
                  <p>IP-address <?= $ip ?> is not valid.</p>
                <?php endif; ?>

                <a href="<?= url("ip") ?>" class="btn btn-primary">Tillbaka</a>
              <div id="mapdiv"></div>
          </div>
        </div>
