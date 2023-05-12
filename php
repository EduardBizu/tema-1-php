<?php

        echo 'Rezultatul este :' .((4 + 2) + (1 + 3)); // 10
        echo "</br>";
        echo 'Rezultatul este :' . (1 + ((1 + 2) + (3 + 3))); // 10
        echo "</br>";
        echo 'Rezultatul este :' . 2 * (3 + 4); // 14
        echo "</br>";
        echo 'Rezultatul este :' . (2 * 1) + 1; // 3
        echo "</br>";
        echo 'Rezultatul este :' . pow(2,4); // 16 => 2x2x2x2 = 16
        echo "</br>";
        echo 'Rezultatul este :' . 2 * pow(2,4) + 2;  // 34 => (2 x 16) + 2 => 32 + 2 => 34
        echo "</br>";
        echo 'Rezultatul este :' . ((10 * 1) +  (5 % 4)); // 11 => 10 x 1 => 10 rest 1 ( din 5 modulo 4 ) => 10 + 1 = 11
        echo "</br>";
        echo 'Rezultatul este :' . number_format((10 * pow(2,2) + pow(2,1) + (3 + 1 ))); //46


    
        echo  "</br>";

        echo  'Rezultatul este : ' . number_format(4.10);
        /*  Pentru a elimna virgula adaugam number_format

        Rezultatul este 4 => se va elimina virgula de dupa el adica ( punctul ala e considerat virgula => sau float

        automat .10 nu va mai aparea, incercati si voi

        */
        echo  "</br>";

        /* String-uri => text */

     //   Exemple de afisare a textului

        // 1 . Adaugand o variabila

        $name = "Eduard";
        echo $name; // afisam Cecilia => Putem folosi atat ghilimele duble cat si simple, dar nu COMBINATE!, ca produce o eroare fatala
        echo  "</br>";
        // 2. Adaugand 2 variabile si folosind simbolul .= ( punct si egal )
        $name_1 = "Eduard";
        $name_2 = "Salut! ";

      echo  $name_2 .= $name_1;  // va afisa Salut Cecilia

        // 2 Varianta 2 de la aceasta metoda utilizand doar . ( simbolul unirii )
        echo  "</br>";
        $n = "Salut!";
        $b = "Eduard";

        echo $n . " " . $b;//Salut Eduard
        echo  "</br>";
        // Utilizarea Heredoc

echo <<< CECILIA
Utilizand aceasta metoda putem afisa un string adica prin Heredoc  \r\n
CECILIA;
            // nu trebuie sa existe spatiiiiiiiiiii !!!!!!  :) :)

// Newdoc

echo  "</br>";
echo <<< 'CECILIA'
Textul la Newdoc, diferenta dintre acestea este ca la Heredoc nu se folosesc ghilimele, dar la Newdoc se folosesc
CECILIA;

echo  "</br>";
        // ARRAY Asociativ

        $member = [
            'id'=> 1,
            'name'=>'Edi',
            'country'=>'Romania',

        ];

        // ID => Key  => ( operator de asociere )
        // 1 => Valoare


        // Pentru a afisa putem folosi un foreach, dar momentan nu am trecut asa ca utilizam echo

        // afisare
        echo  'Numele este :' .$member['name']; // afisam Numele intre paranteze patrate punem key ( name ) => intre ghilimele
        echo  "</br>";
        echo   'Provine din  : '. $member['country']; // afisam Tara de origine intre paranteze patrate punem key ( country )=> intre ghilimele

    // Array indexat

        // lista de cumparaturi
        echo  "</br>";
        $list = ['MAR','PAR','CAPSUN','PORTOCAL']; // 3 elemente in lista !! ( totul incepe de la 0 nu de la 1 )

        echo $list[0]; // 0 este numar de index, adica totul incepe de la 0, nu de la 1 => "Painea" are nr 0, nu 1
        echo  "</br>";
        echo "<pre>"; // am afisat mai frumos
        var_dump($list); // am afisat cu var_dump => keya si valoarea

    // Array in array
        echo  "</br>";
    $lista_masini = array(
    array('Model' => 'BMW', 'TOYOTA'),
    array('Model' => 'Altu', 'aLTU'),
    array('Model' => 'BMW', 'ford', 'sub_array' => array('roti' => 4), 'sub_sub_array' => array('usi' => 5))
);

echo $lista_masini[0]['Model']; // afiseaza BMW din primul sub-tablou (sub-array)
echo "<br>";
echo $lista_masini[2]['sub_array']['roti']; // afiseaza 4 din sub-tabloul (sub-array) al treilea element al matricii principale
echo "<br>";


    // Actualizarea unui array + adaugare unei noi valori

    $famili = array('VAR','MATUSA');
    echo $famili[0]; // afisam VAR
    echo $famili[0] = "Sora"; // actualizam VAR cu Sora
    echo $famili[2] = "Sora 2";
        echo "<pre>";
        var_dump($famili);

 //  Conversia din Celsius in  Fahrenheit cu. urmatoarea formula  F = (C * 1.8) + 32  , 
 $gradeC = 10;
echo '10 grade C= ' . ($gradeC * 1.8)+32;  //50 grade F

  //inca un exercitiu ( calculati cat la suta din 500 reprezinta numarul 125. )
  echo "<br>";

  echo '500% din 125 este=' . 500/100*125;  // 625

  echo "<br>";
//   calcularea :  "2023" + "douamidouazecisitrei" + "36star3" = 



 $numar= 2023;
 $string="douamidouazecisitrei";
 $numar_string="36star3";

 $suma = $numar . $string . $numar_string;
 echo $suma ; 
