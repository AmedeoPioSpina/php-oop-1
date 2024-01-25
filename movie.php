<?php 
    class Movie {
        public $name;
        public $register;
        public $relaceDate;
        public $language;

        function __construct(string $name, string $register, string $relaceDate, string $language)
        {
             $this->name = $name;
             $this->register = $register;
             $this->relaceDate = $relaceDate;
             $this->language = $language;
        }

        public function getName(){
            return $this->name;
        }
    }
?>

