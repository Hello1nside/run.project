<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 30.03.2018
 * Time: 11:47
 */

namespace app\model;

use core\DB;

class Model
{
    static private $table = 'example_table';
    static private $db = 'example_db';

    static public function get($columns = '*', $where = [])
    {
        return DB::mysql(self::$db)->select(self::$table, $columns, $where);
    }

    static public function create($data)
    {
        DB::mysql(self::$db)->insert(self::$table, $data);
        return DB::mysql(self::$db)->id();
    }

    static public function update($data = [], $where = [])
    {
        DB::mysql(self::$db)->update(self::$table, $data, $where);
    }
}