<?php

$menu = [
    ['label' => 'home', 'url' => '/'],
    ['label' => 'about me', 'url' => '/about'],
    ['label' => 'contact', 'url' => '/contact'],
];

$items = $menu;

function generateMenu($items) {
    foreach ($items as $item) {
        echo "<li><a href =". $item['url'].">" . " " . $item['label'] . "</a></li>";
      }
}

require "index.view.php";


