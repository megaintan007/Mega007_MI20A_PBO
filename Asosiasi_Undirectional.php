<!-- Nama   : MEGA INTAN PRATIWI -->
<!-- NIM    : 20051397007 -->
<!-- Prodi  : D4 Manajemen Informatika 2020 A -->

<?php

        class Artist 
            {
            
                private $name;

                public function __construct($name){
                    $this->name = $name;
                }

                public function getName(){
                    return $this->name;
                }
            }

        class Painting 
            {
                
                /* Function details include: Artist Name */
                public function details (Artist $artist){
                    echo "Artist name: " . $artist->getName() . "<br>";         /* Artist Name */
                }
            
            }

                $artist1 = new Artist("artistName1");
                    $art1 = new Painting();
                $artist2 = new Artist("artistName2");
                    $art2 = new Painting();

                /* Print function details */
                $art1->details($artist1);
                $art2->details($artist2);

?>