<?php
    class Product
    {
        public $name;
        public $desc;
        public $price;
        public $avaible_pieces;

        function __construct(string $name,string $description,float $price, int $avaible_pieces)
        {
           $this->name=$name; 
           $this->description=$description; 
           $this->price=$price; 
           $this->avaible_pieces=$avaible_pieces; 
        }



        public function getIsAvaiable($avaible_pieces)
        {
            if($avaible_pieces){
                return true;
            }else return false;
        }
    }

  

    
?>