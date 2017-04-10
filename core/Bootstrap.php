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
            if(isset($_GET['s']))
            {
                $info=explode('/',$_GET['s']);
                dd($info);
            }
            else
            {
                $class="\web\controller\Index";
                $action='show';
            }

            //dd2($_SERVER);
        }
    }




    ?>