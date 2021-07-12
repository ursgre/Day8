<!DOCTYPE html>
<html>
<body>

<?php

echo "Liczby ";

echo "<br>";
echo "<br>";

$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  

echo "Dodawanie : ";
echo "<br>";
echo "5 + 10 = ";
echo $y; 

echo "<br>";

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5,10) . "<br>";
  echo "7 + 13 = " . sum(7,13) . "<br>";
  echo "2 + 4 = " . sum(2,4);

echo "<br>";
$x = 75;
$y = 25; 
echo "75 + 25 = ";
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
echo "<br>";
echo "<br>";

echo "Kolejne liczby zaczynając od 1 : ";
function myTest1() {
    static $t = 1;
    echo $t;
    $t++;
  }
  echo "<br>";
  myTest1();
  echo "<br>";
  myTest1();
  echo "<br>";
  myTest1();

echo "<br>";
echo "<br>";

echo "Kolejne liczby zaczynając od 0 do 100 : ";
echo "<br>";

$x = 0;
 
while($x <= 100) {
    echo "$x <br>";
    $x+=10;
}

echo "<br>";
echo "Wartość bezwzględna z -6.7 : ";
echo(abs(-6.7));

echo "<br>";
echo "<br>";

echo "Ocenianie czy prawda czy fałsz";
echo "<br>";

$g = 10.365;
var_dump(is_float($g));

echo "<br>";

$a = 5985;
var_dump(is_numeric($a));

echo "<br>";

$b = "5985";
var_dump(is_numeric($b));

echo "<br>";

$c = "59.85" + 100;
var_dump(is_numeric($c));

echo "<br>";

$d = "Hello";
var_dump(is_numeric($d));

echo "<br>";
echo "<br>";

echo "Pierwiastkowanie:";
echo "<br>";
echo "Pierwiastek z 64 to ";
echo(sqrt(64) . "<br>");
echo "Pierwiastek z 49 to ";
echo(sqrt(49) . "<br>");
echo "Pierwiastek z 16 to ";
echo(sqrt(16) . "<br>");
echo "Pierwiastek z 9 to ";
echo(sqrt(9));

echo "<br>";
echo "<br>";

echo "Zaokrąglanie";
echo "<br>";
echo "Zaokrąglenie z 0.6 to ";
echo(round(0.60) . "<br>");
echo "Zaokrąglenie z 0.5 to ";
echo(round(0.50) . "<br>");
echo "Zaokrąglenie z 0.49 to ";
echo(round(0.49) . "<br>");
echo "Zaokrąglenie z -4.40 to ";
echo(round(-4.40) . "<br>");
echo "Zaokrąglenie z -4.60 to ";
echo(round(-4.60));

echo "<br>";
echo "<br>";

echo "Generowanie randomowej liczby :";
echo(rand());
echo "<br>";
echo "Generowanie randomowej liczby od 10 do 100 :";
echo(rand(10, 100));

echo "<br>";
echo "<br>";

echo "If i while : ";
echo "<br>";
$x = 0;
 
while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "$x <br>";
  $x++;
} 

echo "<br>";
echo "<br>";

echo "Sortowanie liczb : ";
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";

echo "Teksty i inne";

echo "<br>";
echo "<br>";

echo "Tablica :";
echo "<br>";
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[2];
  echo "<br>";
  echo cars[0];

echo "<br>";
echo "<br>";

echo "Liczenie elementów tablicy :";
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
echo "<br>";

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
$cars = array("Volvo", "BMW", "Toyota");
echo "Wynik : ";
echo count($cars);

echo "<br>";
echo "<br>";
  

echo "If i else : ";
echo "<br>";

$t = date("H");

    if ($t < "20") {
      echo "Dobrego dnia!";
    } else {
        echo "Dobrej nocy!";
        }

$t = date("H");
    echo "<p>Teraz jest " . $t; 
    echo ",dlatego życzymy Ci  ";
        
    if ($t < "10") {
    echo "dobrego dnia! </p>";
        } elseif ($t < "20") {
          echo "dobrego dnia!";
        } else {
          echo "dobrej nocy!";
        }
echo "<br>";
echo "<br>";

echo "Switch : ";
echo "<br>";

$favcolor = "zielony";

switch ($favcolor) {
  case "czerwony":
    echo "Twoim ulubionym kolorem jest czerwony!";
    break;
  case "niebieski":
    echo "Twoim ulubionym kolorem jest niebieski!";
    break;
  case "zielony":
    echo "Twoim ulubionym kolorem jest zielony!";
    break;
  default:
    echo "Twoim ulubionym kolorem nie jest czerwony,zielony ani niebieski!";
}
echo "<br>";
echo "<br>";

echo "Wiadomość :";
echo "<br>";
function writeMsg() {
    echo "Witaj świecie!";
  }
  writeMsg();

echo "<br>";
echo "<br>";
  
echo "Nazwisko rodzinne-spis rodzinny:";
echo "<br>"; 
function familyName($fname) {
    echo "$fname Słońce<br>";
  }
  
  familyName("-Janina");
  familyName("-Helena");
  familyName("-Andrzej");
  familyName("-Józef");
  familyName("-Marek");

echo "<br>";
echo "<br>";
    
echo "Nazwisko rodzinne i data urodzenia-spis rodzinny:";
echo "<br>"; 

function familyName1($fname, $year) {
    echo "$fname Słońce.Urodzona/Urodzony w $year roku.<br>";
  }
  
  familyName1("Janina","1975");
  familyName1("Helena","1978");
  familyName1("Andrzej","1983");

echo "<br>";
echo "<br>";
echo "Daty:";
echo "<br>";
echo "Jutro : ";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo "<br>";
echo "Przyszła sobota : ";
$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo "<br>";
echo "Za dokładnie 3 miesiące : ";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "<br>";
echo "<br>";
    
echo "Liczenie ilości liter : ";
function my_callback($item) {
    return strlen($item);
  }
  
  $strings = ["apple", "orange", "banana", "coconut"];
  $lengths = array_map("my_callback", $strings);
  print_r($lengths);
echo "<br>"; 

echo "<br>";
echo "<br>";
echo "<br>";

echo "Informacje i serwery";

echo "<br>";
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
</body>
</html>
