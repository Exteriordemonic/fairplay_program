<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');
  
$option_page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
    ->addTab('hero', ['label' => 'Hero', 'placement' => 'left'])
    ->addTab('about', ['label' => 'About', 'placement' => 'left'])
    ->addTab('milestones',['label' =>'Milestones','placement'=> 'left'])
    ->addTab('statistics',['label' =>'Statistics','placement'=> 'left'])
    ->addTab('cooperation',['label' =>'Cooperation','placement'=> 'left'])
    ->addTab('footer', ['label' => 'Stopka', 'placement' => 'left']);
        
return $option_page;