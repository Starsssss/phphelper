<?php

namespace Helper\v1;


class Helper
{
    public function ddd()
    {
        echo "当前时间" . date('Y-m-d H:i:s') . PHP_EOL;
    }
    public static function sddd()
    {
        echo 'static' . PHP_EOL;

        echo "当前时间:" . date('Y-m-d H:i:s')  . PHP_EOL;
    }
}
