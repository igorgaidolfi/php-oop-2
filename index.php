<?php
    class Product{
        public $name;
        public $price;
        public $image;
        public $pet;

        function __construct($name,$image,$price,Pet $pet){
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            $this->pet = $pet;
        }
    }

    class Pet{
        public $pet;
        public $icon;
        
        function __construct($pet,$icon){
            $this->pet = $pet;
            $this->icon = $icon;
        }

    }

    class Item extends Product{
        public $type;

        function __construct($name,$image,$price,Pet $pet,$type){
            parent::__construct($name,$image,$price, $pet);
            $this->type = $type;
        }
    }
    $pet_1 = new Pet('dog', '<i class="fa-solid fa-dog"></i>');
    $pet_2 = new Pet('cat', '<i class="fa-solid fa-cat"></i>');
    $pet_3 = new Pet('bird', '<i class="fa-solid fa-crow"></i>');
    $pet_4 = new Pet('fish', '<i class="fa-solid fa-fish"></i>');
    $product_1 = new Item('Crocchette','https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000','5.8', $pet_1, 'cibo');

    ?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Php PetShop</title>
    </head>
    <body>
        
    </body>
</html>