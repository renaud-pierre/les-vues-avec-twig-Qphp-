<?php
/**
 * Created by PhpStorm.
 * User: brecl
 * Date: 08/04/2019
 * Time: 14:04
 */

require_once '../vendor/autoload.php';


$products = ['product01' => ['name' => 'CHAT1', 'desc' => 'PAS DE CHIEN_01'],
            'product02' => ['name' => 'CHAT2', 'desc' => 'PAS DE CHIEN_02'],
            'product03' => ['name' => 'CHAT3', 'desc' => 'PAS DE CHIEN_03'],
            'product04' => ['name' => 'CHAT4', 'desc' => 'PAS DE CHIEN_04'],
            'product05' => ['name' => 'CHAT5', 'desc' => 'PAS DE CHIEN_05'],
            'product06' => ['name' => 'CHAT6', 'desc' => 'PAS DE CHIEN_06']];

$loader = new \Twig\Loader\FilesystemLoader('../src/views/');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html.twig', ['product => $products]);
