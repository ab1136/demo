<?php

    namespace core;

    class View
    {
        protected $file;

        protected $vars = [];

        public function make ($file)
        {
            $this->file = "view/".$file.".html";
        }

        public function with($name,$value)
        {
            $this->vars[$name]=$value;
        }

        public function __toString()
        {
            include $this->file;
            return '';
        }

    }

    ?>