<?php
    class Product{
        public $name;
        public $price;
        public $image;
        public $pet;

        function __construct($name,$price,Pet $pet,$image){
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

        function __construct($name,$price,Pet $pet,$type,$image ){
            parent::__construct($name,$price, $pet,$image);
            $this->type = $type;
        }
    }
    $cane = new Pet('dog', '<i class="fa-solid fa-dog"></i>');
    $gatto = new Pet('cat', '<i class="fa-solid fa-cat"></i>');
    $uccelli = new Pet('bird', '<i class="fa-solid fa-crow"></i>');
    $pesci = new Pet('fish', '<i class="fa-solid fa-fish"></i>');
    $product_1 = new Item('Croccantini per cane adulto di piccola taglia', 7, $cane, 'Cibo','https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000');
    $product_2 = new Item('Croccatini per cane adulto di media taglia', 8, $cane, 'Cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg');
    $product_3 = new Item('Carne di vitello per gatto adulto', 2, $gatto, 'Cibo','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');
    $product_4 = new Item('Mangime per pesci', 4,$pesci, 'Cibo','https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg');
    $product_5 = new Item('Voliera per uccellini - Wilma', 50, 'Accessori',$uccelli,'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg');
    $product_6 = new Item('Ricambio cartuccie per filtro acquario', 10, $pesci, 'Accessori','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg');
    $product_7 = new Item('Kong - Giocattolo per cani', 2, $cani, 'Giochi', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg');
    $product_8 = new Item('Topolino di peluche', 5,$gatti, 'Giochi', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg');
    // var_dump($product_1->name);
    // var_dump($product_1->image);
    // var_dump($product_1->price);
    // var_dump($product_1->type);
    // var_dump($product_1->pet->pet);
    // var_dump($product_1->pet->icon);


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