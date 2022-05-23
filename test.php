<?php
require_once 'vendor/autoload.php';

use Php\Rabbitmq\TestClass;

$class=new TestClass();

var_dump($class->str());