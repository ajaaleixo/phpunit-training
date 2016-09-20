<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'day1\\exercise1\\counter' => '/Day1/Exercise1/Counter.php',
                'day1\\exercise2\\contracts\\logger' => '/Day1/Exercise2/Contracts/Logger.php',
                'day1\\exercise2\\contracts\\shoppingcartitem' => '/Day1/Exercise2/Contracts/ShoppingCartItem.php',
                'day1\\exercise2\\shoppingcart' => '/Day1/Exercise2/ShoppingCart.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd