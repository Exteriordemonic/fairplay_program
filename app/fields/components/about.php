<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$about = new FieldsBuilder('about');

$about
    ->addText('title', ['title'=>'Tytuł'])
    ->addText('subtitle', ['title'=>'Subtitle'])
    ->addTextarea('text', ['title'=>'Tekst', 'new_lines'=>'br'])
    ->addLink('link', ['title'=>'Link']);
    ;
return $about;