<?php
namespace singleton;

class RedisSingleton {
        private static $_redis = NULL;

        private function __construct(){}

    public static function getInstance(){
        if (self::$_redis == NULL) {
            $_redis = new \Redis();
            $_redis->connect("127.0.0.1", 6379);
        }
        return self::$_redis;
    }
    
        public static function close(){
                if (self::$_redis !== NULL) {
                        self::$_redis->close();
                        self::$_redis = NULL;
                }
    }
}
