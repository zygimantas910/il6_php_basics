<?php
//
//$products = [
//
//[
//
//'name' => 'Siulai',
//
//'price' => 12.4,
//
//'specialprice' => 9.99,
//
//'img' => 'https://siulupinkles.lt/wp-content/uploads/2021/01/Mezgimo-siulai-ritese-italiski-siulai-kasmyras-kasmyro-siulai-silko-siulai-silkas.jpg'
//
//],
//
//[
//
//'name' => 'adata',
//
//'price' => 1.99,
//
//'specialprice'  => 0.99,
//
//'img' => 'https://www.vle.lt/uploads/_CGSmartImage/70839_3-26c56fce05f1ac6e0247f6daa86648aa.jpg'
//
//],
//
//[
//
//'name' => 'virbalai',
//
//'price' => 3.99,
//
//'img' => 'https://mezgimomanija.lt/wp-content/uploads/2019/02/3397.jpg'
//
//],
//
//
//];
//
//$x = 0;
//$count = 0;
//foreach($products as $product){
//    $count++;
//    echo '<img width="60" src="'. $product['img'] .'"/>';
//    echo '<h2>'. $product["name"] . '</h2>';
//    if($product["specialprice"]){
//        echo '<del>'.$product['price'].'</del>';
//    }else{
//        echo $product['specialprice'];
//    }
//    echo '<h3>'. $product["price"] . '</h3>';
//    if($count % 3 == 0) {
//        echo '<hr>';
//    }
//}

for($years = 2015; $years < 2022; $years++) {
    for ($months = 1; $months <= 12; $months++) {
        if ($months == 1 || $months == 3 || $months == 5 || $months == 8 || $months == 10 || $months == 12) {
            $to = 31;
        } elseif ($months == 2) {
            if ($years % 4 == 0) {
                $to = 29;
            } else {
                $to = 28;
            }
        } else {
            $to = 30;
        }
        for ($day = 1; $day <= $to; $day++) {
            echo $years . ' ' . $months . ' ' . $day;
            echo '<br>';
        }
    }
}