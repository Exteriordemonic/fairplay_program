<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$cooperation = new FieldsBuilder('cooperation');

$cooperation

    ->addText('title', ['title'=>'Tytuł'])
    ->addRepeater('cooperation', ['label'=>'Slide'])
        ->addImage('img', ['title'=>'Image'])
    ;
return $cooperation;