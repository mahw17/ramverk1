<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());
// if (!isset($navbar)) {
//     $navbar = 'report';
// };

$session    = $this->di->get("session");
$navbar     = $session->get('navbar', 'home');
$login      = $session->has('user', false);

?>

<navbar>
      <ul class="nav topnav">
        <li class="<?= $navbar == 'home' ? 'active' : ''; ?>">
          <a href="<?= url("") ?>"><i class="icon-home"></i> Hem </a>
        </li>
        <li class="dropdown <?= $navbar == 'report' ? 'active' : ''; ?>">
          <a href="#"><i class="icon-leaf"></i> Redovisning <i class="icon-angle-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="<?= url("report/kmom01") ?>">KMOM01</a></li>
            <li><a href="<?= url("report/kmom02") ?>">KMOM02</a></li>
            <li><a href="<?= url("report/kmom03") ?>">KMOM03</a></li>
            <li><a href="<?= url("report/kmom04") ?>">KMOM04</a></li>
            <li><a href="<?= url("report/kmom05") ?>">KMOM05</a></li>
            <li><a href="<?= url("report/kmom06") ?>">KMOM06</a></li>
            <li><a href="<?= url("report/kmom10") ?>">KMOM07-10</a></li>
          </ul>
        </li>
        <li class ="<?= $navbar == 'about' ? 'active' : ''; ?>">
            <a href="<?= url("about") ?>"><i class="icon-briefcase"></i> Om </a>
        </li>
        <li class ="<?= $navbar == 'tool' ? 'active' : ''; ?>">
            <a href="<?= url("tool") ?>"><i class="icon-wrench"></i> Verktyg </a>
        </li>
        <li class ="<?= $navbar == 'ip' ? 'active' : ''; ?>">
            <a href="<?= url("ip") ?>"><i class="icon-rss"></i> Validera IP-adress </a>
        </li>
        <li class ="<?= $navbar == 'api' ? 'active' : ''; ?>">
            <a href="<?= url("api") ?>"><i class="icon-exchange"></i> API </a>
        </li>
        <li class="dropdown <?= $navbar == 'login' ? 'active' : ''; ?>">
          <a href="<?= url("user/login") ?>"><i class="icon-user" style="color:<?= $login ? 'green' : 'red' ?>"></i></a>
          <ul class="dropdown-menu">
                <?= !$login ? "<li><a href=".url("user/login").">Logga in</a></li>" : "<li><a href=".url("user/logout").">Logga ut</a></li>" ?>
          </ul>
        </li>
      </ul>
</navbar>
