<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Anyrel - Template Engine - Twig',
    'description' => 'Use Twig Template Engine',
    'category' => 'be',
    'author' => 'Damian Ickler',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'version' => '4.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-14.99.99',
            'dmf_core' => '4.0.0-4.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
