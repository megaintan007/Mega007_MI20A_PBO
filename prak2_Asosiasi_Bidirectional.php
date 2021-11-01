<!-- Nama   : MEGA INTAN PRATIWI -->
<!-- NIM    : 20051397007 -->
<!-- Prodi  : D4 Manajemen Informatika 2020 A -->
<?php

        class Market 
            {

                private $category;
                public function __construct($category){
                    $this->category = $category;
                }

                public function getCategory(){
                    return $this->category;
                }

                /* Function section include: Title and Price */
                public function details(Art $title, $price){
                    echo "Title: " . $title->getTitle(). "<br>";              
                    echo "Price: " . $price->getPrice(). "<br><br>";        
                }
            }


        class Art 
            {
                private $title;
                private $price;
                public function __construct($title, $price){
                    $this->title = $title;
                    $this->price = $price;
                }

                public function getTitle(){
                    return $this->title;
                }

                public function getPrice(){
                    return $this->price;
                }

                /* Function section include: Category */
                public function section(Market $category){
                    echo "Art Category: " . $category->getCategory(). "<br><br>";          
                }
            }

                    $market1 = new Market("artCategory1");                
                        $art1 = new Art("artTitle1", "artPrice1");           
                    $market2 = new Market("artCategory2");                
                        $art2 = new Art("artTitle2", "artPrice2");           

                    /* Print function section and details */
                    $art1->section($market1);
                        $market1->details($art1, $art1);

                    $art2->section($market2);
                        $market2->details($art2, $art2);
?>
