<?php

    $cpt = new VVerner\PostType('Horário', 'Horários', 'time');
    $cpt->setIcon('dashicons-clock');
    $cpt->setSupports(['title', 'thumbnail', 'editor']);
    $cpt->setPublic(true);
    $cpt->register();
