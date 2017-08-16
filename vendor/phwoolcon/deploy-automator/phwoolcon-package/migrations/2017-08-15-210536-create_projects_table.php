<?php

use Phalcon\Db\Adapter\Pdo as Adapter;
use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phwoolcon\Cli\Command\Migrate;

return [
    'up' => function (Adapter $db, Migrate $migrate) {
        $db->createTable('projects', null, [
            'columns' => [
                new Column('id', [
                    'type' => Column::TYPE_INTEGER,
                    'size' => 20,
                    'unsigned' => true,
                    'notNull' => true,
                    'primary' => true,
                    'autoIncrement' => true,
                ]),
                new Column('project_id', [
                    'type' => Column::TYPE_VARCHAR,
                    'size' => 16,
                    'notNull' => false,
                ]),
                new Column('gitlab_token', [
                    'type' => Column::TYPE_VARCHAR,
                    'size' => 32,
                    'notNull' => true,
                    'default' => '',
                ]),
                new Column('github_token', [
                    'type' => Column::TYPE_VARCHAR,
                    'size' => 32,
                    'notNull' => true,
                    'default' => '',
                ]),
                new Column('repository', [
                    'type' => Column::TYPE_VARCHAR,
                    'size' => 255,
                    'notNull' => true,
                    'default' => '',
                ]),
                new Column('branch', [
                    'type' => Column::TYPE_VARCHAR,
                    'size' => 255,
                    'notNull' => true,
                    'default' => '',
                ]),
                new Column('extra_data', [
                    'type' => Column::TYPE_TEXT,
                    'notNull' => false,
                ]),
            ],
            'options' => [
                'TABLE_COLLATION' => $migrate->getDefaultTableCharset(),
            ],
        ]);
    },
    'down' => function (Adapter $db, Migrate $migrate) {
        $db->dropTable('projects');
    },
];
