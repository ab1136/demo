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
            dd2($_SESSION);
        }
    }




    ?>