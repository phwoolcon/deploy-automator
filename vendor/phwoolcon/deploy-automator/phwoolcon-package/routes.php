<?php
/* @var Phwoolcon\Router $this */

$this->prefix('/webhooks', [
    'POST' => [
        '/gitlab/push' => 'Phwoolcon\DeployAutomator\Controllers\Webhooks\GitlabController::postPush',
    ],
], MultiFilter::instance()
    ->add(DisableSessionFilter::instance())
    ->add(DisableCsrfFilter::instance())
);
