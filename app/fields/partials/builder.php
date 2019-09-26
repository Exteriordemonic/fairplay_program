<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout(get_field_partial('components.example'))
            ->addLayout(get_field_partial('components.hero'))
            ->addLayout(get_field_partial('components.about'))
            ->addLayout(get_field_partial('components.milestones'))
            ->addLayout(get_field_partial('components.statistics'))
            ->addLayout(get_field_partial('components.cooperation'))
            ->addLayout('example');
return $builder;
