<?php

$config = require 'config.php';

require 'database/Connector.php';
require 'Router.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(Connector::make($config['database']));