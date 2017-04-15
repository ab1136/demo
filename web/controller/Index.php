<?php
    namespace web\controller;


    use core\View;

    class Index
    {

        protected $view;

        public function __construct ()
        {
            $this->view = new View();
        }

        public function show ()
        {
            return $this->view->make( 'index' )->with('version','版本 1.0');
        }

        public function post ()
        {
            return $this->view->make('login');
        }
    }


    ?>