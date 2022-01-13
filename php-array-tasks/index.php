<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <?php 
    $colors = ["red","green","white"];
    $long_para = "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$colors[0]." carpet, the ".$colors[1]." lawn, the ".$colors[2]." house, the leaden sky. The new president and his first lady.";
    echo $long_para;
    ?> -->

    <!-- <?php 
    $colors = ["red","green","white"];
    echo "<ul>
    <li>$colors[0]</li>
    <li>$colors[1]</li>
    <li>$colors[2]</li>
    </ul>";
    ?> -->

    <!-- <?php 
    $cities = array("Italy" => "Rome","France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens");
    asort($cities);
    foreach($cities as $val){
        echo $val;
    }
    ?> -->

    <!-- <?php 
    $colors = ["red","green","white"];
    echo $colors[0];
    ?> -->

    <!-- <?php 
    $numbers = [1,2,3,4,5];
    $new_entry = "$";
    array_splice($numbers,3,0,$new_entry);
    var_dump($numbers);
    ?> -->

    <!-- <?php 
    $fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
    asort($fruits);
    foreach($fruits as $key => $val){
        echo $key."=".$val."<br>";
    }
    ?> -->

    <!-- <?php 
    $temps = [78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73];
    echo array_sum($temps)/count($temps)."<br>";
    rsort($temps);
    echo var_dump(array_slice($temps,0,5))."<br>";
    sort($temps);
    echo var_dump(array_slice($temps,0,5));
    ?> -->


    <!-- <?php 
    $array1 = ["color" => "red", 2,4];
    $array2 = ["color" => "green", "a","b","shape"=>"square",4];
    print_r(array_merge($array2,$array1));
    ?> -->

    <!-- <?php 
    $colors = ["red", "green", "blue", "yellow"];
    foreach($colors as $val){
        echo strtoupper($val)."<br>";
    }
    ?> -->


    <!-- <?php 
    $colors = ["RED", "GREEN", "BLUE", "YELLOW"];
    foreach($colors as $val){
        echo strtolower($val)."<br>";
    }
    ?> -->

    <!-- <?php 
    $numbers = range(200,250);
    foreach($numbers as $val){
        if($val % 4 === 0){
            echo $val."<br>";
        }
    }
    ?> -->

    <!-- <?php 
    $words = ["abcd","abc","de","hjjj","g","wer"];
    $lengths = array_map('strlen', $words);
    echo "The shortest array length is ".min($lengths). " and the longest array length is ".max($lengths);
    ?> -->

    <!-- <?php 
    for($i=0;$i<=10;$i++){
        echo rand(11,20)."<br>";
    }
    ?> -->

    <!-- <?php 
    $array1 = [2,0,10,12,6];
    echo min(array_filter($array1));
    ?> -->


    

</body>
</html>