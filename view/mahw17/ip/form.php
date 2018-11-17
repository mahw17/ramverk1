<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */



?>

      <div class="container">
        <div class="row">
          <div class="span12">
              <form role="form" method="post" action="#">
                <div class="form-group">
                  <label for="IP-adress">Ange IP-adress</label>
                  <input type="text" class="form-control" name="ip" value="<?= $currentIp ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
