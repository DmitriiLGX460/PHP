<?php
echo "1)";
echo "<br> ";
$a = rand(0,100);
$b = rand(0,100);
echo "$a + $b = ". $a + $b;
echo "<br> ";
echo "$a * $b = ". $a * $b;
echo "<br> ";
echo "<br> ";
echo "<br> ";
echo "2) ";
echo "<br> ";
$str_one = "Июнь, Июль, Август ";
$str_two = "ЛЕТО ";
$str_sum = $str_one . $str_two;
echo "$str_one + $str_two = ". ($str_sum);
echo "<br> ";
echo "<br> ";
echo "<br> ";
echo "2.1) ";
echo "<br> ";

$dog = "Шарик";
$cat = "Барсик";
$fish = "Немо";

$type_animals = ["dog" , "cat" , "fish", "buldog "];

$i = 0;
while ($i < 10) {
    $type_animal = $type_animals[rand(0, count($type_animals) - 1)];

if (isset($$type_animal)){
    echo $$type_animal;
} else {
    echo "Error!!!";
}
echo "<br> ";
$i++;

}
?>
<br>
<br>
3)
<br>

<?php
require_once "form.html";

exit;