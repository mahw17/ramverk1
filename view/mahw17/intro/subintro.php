<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

$intro_path = isset($intro_path) ? $intro_path : $this->di->get("session")->get('subintro', 'saknas..');

?>



<!-- Subintro
================================================== -->
      <div class="span8">
        <ul class="breadcrumb">
          <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
          <li><a href="#"><?= $intro_mount ?></a><i class="icon-angle-right"></i></li>
          <li class="active"><?= $intro_path ?></li>
        </ul>
      </div>
      <!-- <div class="span4">
        <div class="search">
          <form class="input-append">
            <input class="search-form" id="appendedPrependedInput" type="text" placeholder="Sök här.." />
            <button class="btn btn-dark" type="submit">Sök</button>
          </form>
        </div>
      </div> -->


      <!-- MAKE DYNAMIC -->


      <!-- <div class="span8">
        <ul class="breadcrumb">
          <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
          <li><a href="#">Blog</a><i class="icon-angle-right"></i></li>
          <li class="active">Blog with left sidebar</li>
        </ul>
      </div>
      <div class="span4">
        <div class="search">
          <form class="input-append">
            <input class="search-form" id="appendedPrependedInput" type="text" placeholder="Search here.." />
            <button class="btn btn-dark" type="submit">Search</button>
          </form>
        </div>
      </div> -->
