<?php
/**
 * Created by PhpStorm.
 * User: pastushenko
 * Date: 29.04.15
 * Time: 20:38
 */
require_once('BaseModel.php');

class PageModel extends BaseModel
{
    /**
     * @param string $pageName
     * @return string|null
     */
    public function findPageTitleByAlias($pageName)
    {
        $query = sprintf('SELECT `title` FROM `page` WHERE `alias` = "%s" LIMIT 1;', $pageName);
        $result = $this->query($query);
        if ($this->getResultsCount($result)) {
            $pageData = mysqli_fetch_array($result);
            return $pageData['title'];
        }

        return null;
    }
}