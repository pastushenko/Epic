<?php
/**
 * Created by PhpStorm.
 * User: pastushenko
 * Date: 29.04.15
 * Time: 20:38
 */

require_once('config.php');

class BaseModel
{
    /** @var mysqli */
    private $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
        mysqli_select_db($this->connection, DB_NAME);
    }

    /**
     * @param string $query
     * @return mysqli_result
     */
    protected function query($query)
    {
        return mysqli_query($this->connection, $query);
    }

    /**
     * @param mysqli_result $mysqlResult
     * @return int
     */
    protected function getResultsCount(mysqli_result $mysqlResult)
    {
        return mysqli_num_rows($mysqlResult);
    }
}