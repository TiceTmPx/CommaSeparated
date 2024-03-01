<?php

require_once __DIR__ . '/app/autoload.php';

use TiceTmP\GetSubQuery;

$commaSeparated = new GetSubQuery();
$sql = $commaSeparated->getRelationWithCommaSeparated('test1', 'test2', 'test3', 'test4','test5');
print_r($sql);