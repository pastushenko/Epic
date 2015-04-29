<?php
/**
 * Created by PhpStorm.
 * User: pastushenko
 * Date: 29.04.15
 * Time: 20:38
 */

class IndexController
{
    /** @var PageModel */
    private $pageModel;
    /** @var ProductModel */
    private $productModel;

    /**
     * @param PageModel $pageModel
     * @param ProductModel $productModel
     */
    public function __construct(PageModel $pageModel, ProductModel $productModel)
    {
        $this->pageModel = $pageModel;
        $this->productModel = $productModel;
    }

    public function indexAction()
    {
        if (time() % 2) {
            $pageTitle = $this->pageModel->findPageTitleByAlias('index');
        } else {
            $pageTitle = $this->pageModel->findPageTitleByAlias('index2');
        }

        $products = $this->productModel->findAllProducts();

        include('view.php');
    }
}