<?php
$EM_CONF['headless_mask'] = [
    'title' => 'Headless Mask',
    'description' => 'Support headless for the mask elements',
    'state' => 'stable',
    'author' => 'T3: Nilesh Malankiya',
    'author_email' => 'info@nitsan.in',
    'category' => 'fe',
    'internal' => '',
    'version' => '13.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.5.99',
            'frontend' => '13.0.0-13.5.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '4.0.0-4.9.9',
            'mask' => '9.0.0-9.9.9'
        ],
    ],
];
