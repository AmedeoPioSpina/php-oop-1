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

    $newMovie = new Movie("Transformers","Michael Bay","21 giugno 2007","IT");
    $otherNewMovie = new Movie("Spider-Man","Sam Raimi","7 giugno 2002","IT");

    echo $newMovie->getName() . "</br>";
    echo $otherNewMovie->getName();
?>

