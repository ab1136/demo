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
                //dd($info);
                $class= '\web\controller\\' . ucfirst($info[0]);
                $action=$info[1];
            }
            else
            {
                $class="\web\controller\Index";
                $action='show';
            }

            var_export($class);
            echo '<br/>';
            var_export($action);
            echo '<br/>';
            var_export(new $class);
            echo '<br/>';



            //$obj=new $class;
            //$obj->$action;
            (new $class)->$action;

            echo '<br/>';

            $o=\web\controller\Index();

            var_export(new $o);

            $o->show();


        }
    }




    ?>