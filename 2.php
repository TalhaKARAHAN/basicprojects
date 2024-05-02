<?php
function randomValues($array, $count) {
    // Boş elemanları ve NULL değerleri temizle
    $cleanedArray = array_filter($array);

    // Temizlenmiş dizinin boyutunu al
    $arraySize = count($cleanedArray);

    // İstenen sayıda rastgele değerler seç
    $keys = array_rand($cleanedArray, min($count, $arraySize));

    // Seçilen rastgele değerleri yeni diziye ekle
    $result = array();
    foreach ($keys as $key) {
        $result[] = $cleanedArray[$key];
    }
    
    return $result;
}

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(randomValues($planets, 2));
print_r(randomValues($planets, 3));
print_r(randomValues($planets, 2));
print_r(randomValues($planets, 4));
print_r(randomValues($planets, 5));
?>
