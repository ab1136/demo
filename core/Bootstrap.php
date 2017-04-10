<?php
    namespace core;

    class Bootstrap
    {
        public static function run ()
        {
            echo 'Bootstrap';
        }

        public static function parseUrl()
        {
            dd($_SESSION);
        }
    }




    ?>