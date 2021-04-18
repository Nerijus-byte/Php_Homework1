<?php
//Sukurkite 3 kintamuosius: skaičių, raidinės vertės bei tuščią kintamąjį ir juos išveskite į ekraną.
$space = "";
$number = 1;
$word = "Hello";

var_dump($space, $number, $word);
echo "<br>";

//Parašykite skriptą, kuris išspausdintų paskutiniąsias 3 stringo raides.
$new_word = "Horse";
$last_3characters = substr($new_word,-3);

var_dump($last_3characters);
echo "<br>";

//Sukurkite funkciją negative, kuri priimtų vieną argumentą "$skaicius" ir išvestų į ekraną atitinkamą neigiamą skaičių. (Įvedame 3, išveda -3).

function negative($num){
    $numb = $num <= 0 ? $num : -$num;
    return $numb;
}

echo negative(10);
echo "<br>";

//Sukurkite funkciją kauliukas, kuri imituotų kauliuko metimą. (Į ekraną atspaudintų atsitiktinį skaičių nuo 1 iki 6); Užuomina: rand();.

function random_Numbers($random1,$random2){
    $randomNumber = rand($random1,$random2);
    return $randomNumber;
}

echo random_Numbers(1,6);
echo "<br>";

//Parašykite funkciją pusePloto, kuri priimtų 2 argumentus ir išvestų į ekraną pusę abiejų skaičių sandaugą.

function half_Area($side1,$side2){
    $h_Area = $side1 * $side2 / 2;
    return $h_Area;
}

echo half_Area(5,10);
echo "<br>";

//Sukurkite funkciją 'arEsiDarJaunas', kuri priimtų vieną argumentą amžius ir į ekraną išvestų pranešimą, kiek metų trūksta iki 100. (Pvž.: "Iki šimto jūms trūksta 70 metų! Dar gyventi liko daug!").

function are_You_Young($age_number){
    $age = 100 - $age_number;
    echo("Iki šimto jums trūksta $age metų! Dar gyventi liko daug!");
}

echo are_You_Young(54);
echo "<br>";

//Sukurkite funkciją, kuri priimtų argumentą farenheitas ir laipsnius iš farenheito konvertuotų į celsijų.

function temperature($fahrenheit){
    $celsius = ($fahrenheit - 32) / 1.8;
    return $celsius;
}

echo temperature(80);

?>