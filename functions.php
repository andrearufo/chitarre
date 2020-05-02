<?php

require_once 'vendor/autoload.php';

$space = 'tptq2jlkf1p1';
$token = 'cCS4byrNsP8zuQ_NoMXK4RsSRV_l_n3nLhye3C2ux3U';

$client = new \Contentful\Delivery\Client($token, $space);

$query = new \Contentful\Delivery\Query();
$query->setContentType('chitarra')->orderBy('fields.anno');

$entries = $client->getEntries($query);
// // echo json_encode($entries[0], 1);
// echo '<pre>'.print_r($entries[0]->getSystemProperties()->getCreatedAt(), 1).'</pre>';
// exit;
$chitarre = [];

foreach ($entries as $item) {
    $chitarre[] = new Chitarra($item);
}
