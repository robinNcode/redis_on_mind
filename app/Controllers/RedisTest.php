<?php

namespace App\Controllers;

use Redis;

class RedisTest extends BaseController
{
    /**
     * @throws \RedisException
     */
    public function index(): string
    {
        $redis = new Redis();
        $redis->set('foo', 'bar');
        $value = $redis->get('foo');
        var_dump($value);

        return 'Hello Redis!';
    }
}
