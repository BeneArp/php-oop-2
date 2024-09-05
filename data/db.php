<?php

    require_once __DIR__  . '/../Model/Product.php';
    require_once __DIR__  . '/../Model/Food.php';
    require_once __DIR__  . '/../Model/Toy.php';   
    require_once __DIR__  . '/../Model/Bed.php';


    $db = [
       "foods" =>[
            new Food('Monge Natural Superpremium Adult All Breeds con Anatra', 'Monge', 56.99, 'dog', 'https://arcaplanet.vtexassets.com/arquivos/ids/301087/monge-natural-superpremium-adult-all-breeds-con-anatra-10068869--1-.jpg?v=638511857339800000', 'Anatra', 'Adulto', 'Tutte le razze'),
            new Food('N&D Pumpkin Adult Medium Maxi Agnello Zucca e Mirtillo', 'N&D', 62.99, 'dog', 'https://arcaplanet.vtexassets.com/arquivos/ids/300829/n-d-pumpkin-adult-medium-maxi-agnello-zucca-e-mirtillo-10108833--1-.jpg?v=638508310712900000', 'Agnello', 'Adulto', 'Tutte le razze'),
            new Food('Gourmet Perle Filettini in Salsa Cat Busta Multipack 60x85G', 'Gourmet', 39.99, 'cat', 'https://arcaplanet.vtexassets.com/arquivos/ids/274367/MAIN.PNG.jpg?v=637955633053070000', 'Mix', 'Adulto', 'Tutte le razze'),
            new Food('Whiskas Pure Delight Kitten Busta Multipack 4x85G', 'Whiskas', 3.19, 'cat', 'https://arcaplanet.vtexassets.com/arquivos/ids/279264/WHI-Pure-Del.-Ten.-delic.-Jun.jpg?v=638103372629900000', 'Mix di pesce', 'Kitten', 'Tutte le razze'),
       ],

       "toys" =>[
            new Toy('Gioco per Cane con Anatra in Lattice', 'Trixie', 4.85, 'dog', 'https://arcaplanet.vtexassets.com/arquivos/ids/272928/trixie-gioco-in-lattice-per-cane.jpg?v=637915828836870000', 'Lattice'),
            new Toy('Peluche Lola&Miguel Gallina', 'Croci', 18.99, 'dog', 'https://arcaplanet.vtexassets.com/arquivos/ids/290480/Peluche-Loa-Miguel-Gallina-10170004..jpg?v=638337416705870000', 'Peluche'),
            new Toy('Gioco Bacchetta per Gatto con Topini', 'Croci', 3.14, 'cat', 'https://arcaplanet.vtexassets.com/arquivos/ids/273144/croci-gioco-gatto-topini.jpg?v=637921882035730000', 'Mix'),
        ],
       
        "beds" =>[
            new Bed('Cuccia gatti Igloo Livia', 'Trixie', 46.99, 'cat', 'https://arcaplanet.vtexassets.com/arquivos/ids/257703/36357--2-.jpg?v=637586781842200000', 'M', 45, 33),
            new Bed('Luna&Teo Cuccia Squalo', 'Luna&Teo', 48.60, 'cat', 'https://arcaplanet.vtexassets.com/arquivos/ids/287956/LD517_B_mod--1-.jpg?v=638236497894670000', 'S', 38, 38),
            new Bed('Luna&Teo Cuccia per Cani Rettangolare Borgo Verde', 'Luna&Teo', 69.66, 'dog', 'https://arcaplanet.vtexassets.com/arquivos/ids/294769/luna-teo-cuccia-per-cani-rettangolare-borgo-verde-10169822.jpg?v=638434135275370000', 'S', 75, 55),
        ],
    ]

?>