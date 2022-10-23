<?php

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

require_once '../config/twig.php';


echo $twig->render('products.html.twig', ['tableaux' => $products]);