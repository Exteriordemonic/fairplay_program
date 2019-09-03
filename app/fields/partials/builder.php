<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout(get_field_partial('components.example'))
            ->addLayout(get_field_partial('components.hero'))
            ->addLayout(get_field_partial('components.article'))
            ->addLayout(get_field_partial('components.milestones'))
            ->addLayout(get_field_partial('components.statistics'))
            ->addLayout('example');
return $builder;
