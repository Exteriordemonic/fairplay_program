<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$statistics = new FieldsBuilder('statistics');

$statistics

    ->addText('title', ['title'=>'Tytuł'])
    ->addRepeater('statistics', ['label'=>'Stats'])
        ->addImage('img', ['title'=>'Image'])
        ->addText('subtitle', ['title'=>'Tekst'])
        ->addTextarea('text', ['title'=>'Tekst'])
    ;
return $statistics;