<?php

require_once "index.php";
$ids = $argv[1];
$product = $entityManager->find('Product', $ids);
if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());