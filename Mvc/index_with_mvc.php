<?php
require_once('mvc/PageModel.php');
require_once('mvc/ProductModel.php');
require_once('mvc/IndexController.php');

$pageModel = new PageModel();
$productModel = new ProductModel();
$indexController = new IndexController($pageModel, $productModel);

$indexController->indexAction();