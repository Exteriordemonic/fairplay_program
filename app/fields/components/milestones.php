<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$milestones = new FieldsBuilder('milestones');

$milestones

    ->addText('title', ['title'=>'Tytuł'])
    ->addRepeater('milestones', ['label'=>'Milestones'])
        ->addTrueFalse('add_text')
        ->addText('subtitle', ['title'=>'Tekst'])
        ->addTextarea('text', ['title'=>'Tekst'])
            ->conditional('add_text', '==','1')
    ;
return $milestones;