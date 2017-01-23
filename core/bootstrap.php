<?php

$app = [];

$app['config'] = require 'config.php';

require 'database/Connector.php';
require 'Router.php';
require 'Request.php';
require 'database/QueryBuilder.php';

$app['database'] = new QueryBuilder(Connector::make($app['config']['database']));