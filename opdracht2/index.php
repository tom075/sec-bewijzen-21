<?php



echo "<br><br>OPGAVE 1<br><br>";
$hallo = "hallo";

$length = strlen($hallo);

for ($i = 0; $i < $length; $i++) {
    if ($i % 2 == 0) {
        $halloCijfers = ord($hallo[$i]);
        $nieuwHalloCijfers = $halloCijfers + $i;
//        echo $nieuwHalloCijfers . '<br>';
        echo chr($nieuwHalloCijfers) . '<br>';
//        echo 'even' . '<br>';
    } else {
        $halloCijfers = ord($hallo[$i]);
        $nieuwHalloCijfers = $halloCijfers - $i;
//        echo $nieuwHalloCijfers . '<br>';
        echo chr($nieuwHalloCijfers) . '<br>';
//        echo 'oneven' . '<br>';
    }
}


echo "<br><br>OPGAVE 2<br><br>";


$ciphers = openssl_get_cipher_methods();
foreach ($ciphers as $cipher) {
    print_r($cipher);
    echo '<br />';
}


echo "<br><br>OPGAVE 3<br><br>";

echo "encrypt: openssl_encrypt<br />
decrypt: openssl_decrypt";


echo "<br><br>OPGAVE 4<br><br>";

echo "GEKEKEN";


echo "<br><br>OPGAVE 5<br><br>";

echo "ONDUIDELIJK GRAAG UITLEG IN DE VOLGENDE LES";