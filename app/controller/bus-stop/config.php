<?php
$cpt = new VVerner\PostType('Ponto de embarque', 'Pontos de embarque', 'bus-stop');
$cpt->setIcon('dashicons-flag');
$cpt->setSupports(['title', 'thumbnail', 'editor']);
$cpt->setPublic(true);
$cpt->register();