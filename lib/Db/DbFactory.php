<?php
/**
 * Created by PhpStorm.
 * User: Sébastien CHOMY
 * Date: 07/12/2017
 * Time: 15:56
 */

namespace Lib\Db;

/**
 * Class DbFactory
 *
 * @package Lib\Db
 */
class DbFactory
{

    /**
     * @param string $adapter
     * @param array  $config
     *
     * @throws \RuntimeException
     *
     * @return \Lib\Db\Adapter\AbstractDB
     */
    public static function create(string $adapter, array $config = [])
    {
        $class = "Lib\\Db\\Adapter\\" . $adapter;

        $dbAdapter = new $class($config);

        if (!$dbAdapter instanceof \Lib\Db\Adapter\AbstractDB) {
            throw new \RuntimeException("Adapter class '\Lib\Db\Adapter\AbstractDB' does not extend Abstract Class ");
        }

        return $dbAdapter;
    }
}
