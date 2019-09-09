<?php //php 7.0.8

    class Singleton
    {
     
        private static $instance;
        
        public static function getInstance() {
                
            if(self::$instance === null) {
               self::$instance = new static;
            }
            
            return self::$instance;
        }
        
        protected function __construct() {
            echo 'conn';
        }
    }
    

    class Config extends Singleton
    {
        public $data = [                
               'db' => [ 
                    'host' => 'hostaddress'
                   ]
           ];
        
    }

    $config = Config::getInstance();
    //$newConfig = new Config;
    $newConfig = Config::getInstance();
    //var_dump($config->data);
    var_dump($newConfig->data);
    var_dump($config === $newConfig);
?>
