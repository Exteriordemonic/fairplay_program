<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$article = new FieldsBuilder('article');

$article
    ->addText('title', ['title'=>'Tytuł'])
    ->addText('subtitle', ['title'=>'Subtitle'])
    ->addTextarea('text', ['title'=>'Tekst'])
    ->addLink('link', ['title'=>'Link']);
    ;
return $article;