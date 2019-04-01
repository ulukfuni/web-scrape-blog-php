<?php
require 'vendor/autoload.php';
use Goutte\Client;

$url = "https://www.basketball-reference.com/players/w/wadedw01.html";

$client = new Client();
$crawler = $client->request('GET', $url);
$output = $crawler->filter(".stats_pullout")->extract("_text");

var_dump($output);
