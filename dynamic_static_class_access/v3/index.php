<?php

require_once './vendor/autoload.php';

$smarty = new Smarty();

class Test
{
    public static function foo()
    {
        echo 'calling the object works!';
    }
}

$smarty->setTemplateDir('./');
$smarty->setCompileDir('./');
$smarty->setCacheDir('./');

$smarty->assign('name', 'Ned');

$smarty->display('index.tpl');