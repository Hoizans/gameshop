<?php
require_once './model/logic.php';

class Controller
{

    public function __construct()
    {
        $this->Logic = new Logic();
    }

    public function __destruct()
    {
    }

    public function handleRequest()
    {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
            switch ($op) {

                case 'cart':
                    $this->collectCart();
                    break;

                default:
                    $this->collectHome();
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();
        }
    }

    public function collectHome()
    {
        include 'view/home.php';
    }

    public function collectCart(){
        include 'view/cart.php';
    }

}

?>