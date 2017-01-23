<?php

$app = [];

$app['config'] = require 'config.php';

$app['database'] = new QueryBuilder(Connector::make($app['config']['database']));