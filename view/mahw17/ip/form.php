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
              <form role="form" method="post" action="#">
                <div class="form-group">
                  <label for="IP-adress">Ange IP-adress</label>
                  <input type="text" class="form-control" name="ip" placeholder="Enter ip-adress (ex. 194.103.20.10)">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
