<?php
namespace Controller;

class indexController extends \Controller{

    public function main($string = ''){
        // M('demo');
        // exit();
        $this->assign('Xframe', M('demo')->Xframe().' '.$string);
        $this->display('index');
    }

}
