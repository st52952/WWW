<?php

require_once 'vendor/autoload.php';

use GraphAware\Neo4j\Client\ClientBuilder;

$db = ClientBuilder::create()
    ->addConnection('bolt','bolt://neo4j:pass@word1@localhost:7687')
    ->build();

if(!$db){
    die('error connecting to database');
}

echo 'connected.';

?>