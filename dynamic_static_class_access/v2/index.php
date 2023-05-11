<?php

namespace v2;

use v2\vendor\smarty\smarty\libs\Smarty;

require_once 'vendor/autoload.php';

$smarty = new Smarty();

class Test
{
    public static function foo()
    {
        echo 'calling the object works!';
    }
}

$smarty->template_dir = './';
$smarty->compile_dir = './';
$smarty->cache_dir = './';

$smarty->assign('name', 'Ned');

$smarty->display('index.tpl');