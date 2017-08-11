<?php
return [
    'queues' => [
        'deployer' => [
            'connection' => 'db',
            'options' => [
                'default' => 'deploy',
                'table' => 'deploy_queue',
                'time_to_run' => 120,
            ],
        ],
    ],
];
