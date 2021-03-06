<?php

return [
    'order' => 4,
    'role' => ['name' => 'monitoring', 'display_name' => 'monitoring'],
    'default_menu' => '',
    'permissions' => [
        'apis.controlPanel.statistics',
        'apis.controlPanel.actions',
        'apis.controlPanel.action',
        'system.localisation.options',
        'export.cancel',
        'core.files.favorite',
        'core.files.browse',
        'core.files.recent',
        'core.files.favorites',
        'core.files.makePublic',
        'core.files.makePrivate',
        'core.files.update',
    ],
];
