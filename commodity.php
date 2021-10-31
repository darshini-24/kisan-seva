<?php
$server = "remotemysql.com";
    $username = "kQmgA03SRm";
    $password="flTxmyD6Gr";
    $database="kQmgA03SRm";

    $conn = mysqli_connect($server,$username,$password,$database);
    
    if(!$conn){
        die("Sorry, we failed to connect ". mysqli_connect_error); 
    }

    $jsondata = file_get_contents('data.json');
    $data = json_decode($jsondata, true);

    $array = $data['records'];

    for($i=0 ; $i<1000 ; $i++){
        $state = $array[$i]['state'];
        $district = $array[$i]['district'];
        $market = $array[$i]['market'];
        $commodity = $array[$i]['commodity'];
        $variety = $array[$i]['variety'];
        $arrival_date = $array[$i]['arrival_date'];
        $min_price = $array[$i]['min_price'];
        $max_price = $array[$i]['max_price'];
        $modal_price = $array[$i]['modal_price'];

        $sql = "INSERT INTO `data` (`state`, `district`, `market`, `commodity`, `variety`, `arrival_date`, `min_price`, `max_price`, `modal_price`) VALUES ('$state', '$district', '$market', '$commodity', '$variety', '$arrival_date', '$min_price', '$max_price', '$modal_price');";
        $result = mysqli_query($conn,$sql);
    }
?>