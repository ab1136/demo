<?php
    namespace core;

    class Bootstrap
    {
        public static function run ()
        {
            self::parseUrl();
        }

        public static function parseUrl()
        {
            if(isset($_GET['s']))
            {
                $info=explode('/',$_GET['s']);
                dd($info);
                $class= '\web\controller\\' . ucfirst($info[0]);

                echo $class;

                $action=$info[1];
                echo $action;
            }
            else
            {
                $class="\web\controller\Index";
                $action='show';
            }

            dd($class);
            dd($action);

            $obj=new $class;
            $obj->$action;

            dd($obj);

        }
    }




    ?>