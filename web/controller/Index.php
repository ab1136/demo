<?php
    namespace web\controller;


    use core\View;

    use Gregwar\Captcha\CaptchaBuilder;

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

        public function code()
        {
            //$builder = new CaptchaBuilder;
            //$builder->build();

            header('Content-type: image/jpeg');
            $builder=new CaptchaBuilder();
            $builder->output();

        }
    }


    ?>