<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
    ->addText('hero', ['title'=>'Tytuł'])
    ->addImage('background_image')
    ;
return $hero;
