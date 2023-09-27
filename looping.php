<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php
    echo "<h3>soal no 1 Looping I Love PHP</h3>";
    /*
    SOAL NO 1
    LOOPING PERTAMA
    2 - I Love PHP
    4 - I Love PHP
    6 - I Love PHP
    8 - I Love PHP
    10 - I Love PHP
    12 - I Love PHP
    14 - I Love PHP
    16 - I Love PHP
    18 - I Love PHP
    20 - I Love PHP
    LOOPING KEDUA
    20 - I Love PHP
    18 - I Love PHP
    16 - I Love PHP
    14 - I Love PHP
    12 - I Love PHP
    10 - I Love PHP
    8 - I Love PHP
    6 - I Love PHP
    4 - I Love PHP
    2 - I Love PHP
    */
    //Lakukan loping di sini
    echo "<h3>Looping pertama</h3>";
    for($i=1; $i<=10;$i++){
        $out = $i*2;
        echo "$out- I Love PHP";
        echo  "<br/>";
    }
    echo "<h3>Looping kedua</h3>";
    for($i=10; $i>=1;$i--){
        $out = $i*2;
        echo "$out- I Love PHP";
        echo  "<br/>";
    }

    echo "<h3>soal no 2 Looping Aray Modulu</h3>";
    $numbers = [18, 45, 29, 61, 47, 34];
    echo "Array Numbers";
    echo "<br/>";
    print_r($numbers);
    echo "<br/>";
    $rest=[];
    foreach($numbers as $number){
        $sisabagi=$number % 5;
        $rest[] = $sisabagi;
        // print_r($rest);
    }
    echo "<br/>";
    echo "Array sisa baginya adalah: <br/>";
    print_r($rest);
    echo "<br/>";

    echo "<h3>soal NO 3 Looping Asociaive Array</h3>";
    /*
     Output: 
     Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg )
    Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg )
    Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg )
    Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg )
    
    //lakukan Looping disini
    */
    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Merryouse J', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']

    ];
    
    $items = array(
        array(
            "id" => "001", 
            "name" => "keyboard Logistik",
            "price" => 60000,
            "description" =>"Keyboard yang mantap untuk kantoran",
            "source" => "logitek.jpeg"
        ),
        array(
            "id" => "002", 
            "name" => "Keyboard MSI",
            "price" => 300000,
            "description" =>"Keyboard gaming MSI mekanik",
            "source" => "msi.jpeg"
        ),
        array(
            "id" => "003", 
            "name" => "Mouse Genius",
            "price" => 500000,
            "description" =>"Mouse Genius biar lebih pinter",
            "source" => "genius.jpeg"
        ),
        array(
            "id" => "004", 
            "name" => "Merryouse J",
            "price" => 300000,
            "description" =>"Mouse yang disukai kucing",
            "source" => "jerry.jpeg"
        )

    );

    foreach ($items as $item) {
        print_r($item);
        echo "<br>";
    }

    echo "<h3>Soal NO 4 Asterix</h3>";
    /*
    Soal No 4
    Asterix 5x5
    Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
    Output: 
    *
    * *
    * * *
    * * * *
    * * * * * 
    */

    echo "Asterix:";
    echo "<br/>";
    for($i=1; $i<=5; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo "* ";
    }
            echo "<br/>";   
    }

    ?>
</body>
</html>