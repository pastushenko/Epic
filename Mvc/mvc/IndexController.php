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
        $pageTitle = $this->pageModel->findPageTitleByAlias('index');
        if (!$pageTitle) {
            $pageTitle = $this->pageModel->findPageTitleByAlias('default');
        }

        $products = $this->productModel->findAllProducts();

        include('view.php');
    }
}