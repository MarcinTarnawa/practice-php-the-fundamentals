<?php

$menu = [
    ['label' => 'home', 'url' => '/'],
    ['label' => 'about me', 'url' => '/about'],
    ['label' => 'contact', 'url' => '/contact'],
];

$items = $menu;

function generateMenu($items) {
    foreach ($items as $item) {
        echo $item['label']. " " . $item['url'] . "<br>";
      }
}

require "index.view.php";

