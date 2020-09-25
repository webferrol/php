<?php
require_once(LIBS_ROUTE.'controller.php');

class Home extends Controller{
    public function __construct(){
        echo "Soy ".__CLASS__;
    }
}