<?php
require_once('app/PageModel.php');
require_once('app/ProductModel.php');
require_once('app/IndexController.php');

$pageModel = new PageModel();
$productModel = new ProductModel();
$indexController = new IndexController($pageModel, $productModel);

$indexController->indexAction();