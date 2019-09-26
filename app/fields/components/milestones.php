<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$milestones = new FieldsBuilder('milestones');

$milestones

    ->addText('title', ['title'=>'Tytuł'])
    ->addRepeater('milestones', ['label'=>'Milestones'])
        ->addTrueFalse('add_text')
        ->addText('subtitle', ['title'=>'Tekst'])
        ->addText('subtitle2', ['title'=>'Subtext'])
            ->conditional('add_text', '==','0')
        ->addTextarea('text', ['title'=>'Tekst'])
            ->conditional('add_text', '==','1')
    ;
return $milestones;