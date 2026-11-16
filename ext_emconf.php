<?php
$EM_CONF['headless_mask'] = [
    'title' => 'Headless Mask',
    'description' => 'Support headless for the mask elements',
    'state' => 'stable',
    'author' => 'T3: Nilesh Malankiya',
    'author_email' => 'info@nitsan.in',
    'category' => 'fe',
    'internal' => '',
    'version' => '14.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.5.99',
            'frontend' => '14.0.0-14.5.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '5.0.0-5.9.9',
            'mask' => '14.0.0-14.9.9'
        ],
    ],
];
