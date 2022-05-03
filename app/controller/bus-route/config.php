<?php
$cpt = new VVerner\PostType('Rota de Ônibus', 'Rotas de Ônibus', 'bus-route');
$cpt->setIcon('dashicons-tickets');
$cpt->setSupports(['title', 'thumbnail', 'editor']);
$cpt->setPublic(true);
$cpt->register();