<?php

require 'database/Connector.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(Connector::make());