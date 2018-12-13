<?php

namespace Anax\View;

/**
 * View to display all books.
 */
// Show all incoming variables/functions
//var_dump(get_defined_functions());
//echo showEnvironment(get_defined_vars());

// Gather incoming variables and use default values if not set
$items = isset($items) ? $items : null;

// Create urls for navigation
$urlToCreate = url("book/create");
$urlToDelete = url("book/delete");



?><h1>Visa alla böcker</h1>

<p>
    <a href="<?= $urlToCreate ?>">Lägg till</a> |
    <a href="<?= $urlToDelete ?>">Radera</a>
</p>

    <?php if (!$items) : ?>
    <p>Finns inga böcker att visa.</p>
        <?php
        return;
    endif;
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titel</th>
            <th>Författare</th>
            <th>Bild</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $item) : ?>
        <tr>
            <td>
                <a href="<?= url("book/update/{$item->id}"); ?>"><?= $item->id ?></a>
            </td>
            <td><?= $item->title ?></td>
            <td><?= $item->author ?></td>
            <td><img src="<?= $item->image ?>"></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
