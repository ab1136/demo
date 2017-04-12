<?php
    namespace web\controller;


    use core\View;

    class Index
    {

        protected $view;

        public function __construct()
        {
            $this->view=new View();
        }

        public function show()
        {
            $this->view->make('index');

            echo $this->view;
        }

        public function post()
        {
            echo 'post';
        }
    }


    ?>