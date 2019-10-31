<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return "123456";
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
