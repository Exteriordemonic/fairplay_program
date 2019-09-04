<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
    ->addTextarea('hero', ['title'=>'Tytuł','new_lines'=>'br'])
    ->addImage('background_image')
    ;
return $hero;
