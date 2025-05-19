<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Anyrel - Template Engine - Twig',
    'description' => 'Use Twig Template Engine',
    'category' => 'be',
    'author' => 'Damian Ickler',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'version' => '2.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'dmf_core' => '2.0.0-2.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
