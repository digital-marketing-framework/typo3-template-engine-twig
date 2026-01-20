<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Anyrel - Template Engine - Twig',
    'description' => 'Use Twig Template Engine',
    'category' => 'be',
    'author' => 'Damian Ickler',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'version' => '3.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'dmf_core' => '3.0.0-3.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
