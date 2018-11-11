<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

?>

      <div class="container">
        <div class="row">
          <div class="span12">
              <h1>Result</h1>

                <?php if ($valid) : ?>
                  <p>IP-address <?= $ip ?> is valid according to class <?= $ipType ?>.</p>
                  <p><?= null !== $hostname ? 'Hostname is: ' . $hostname : null ?></p>
                <?php else : ?>
                  <p>IP-address <?= $ip ?> is not valid.</p>
                <?php endif; ?>

              <br><a href="<?= url("ip") ?>">Tillbaka</a>
          </div>
        </div>
