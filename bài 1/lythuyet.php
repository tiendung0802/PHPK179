<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo'xin  chao`';
       
        $tenBien;
         //bien trong php 
        //kiểu dữ liệu trong php là : số nguyên , số thực , chuỗi , logic , mảng , đối tương 
        // 1. số nguyên : 
        $songuyen =10;
        echo $songuyen;
        $soThuc = 3.14;
        echo $soThuc;
        // chuỗi
        $chuoi = ' <br> xin chào các bạn <br> ';  
        echo $chuoi;
        $logic= 5>3 ;  // trả về true bằng 1  fale thì không hiện 
        echo $logic ;
        // toán nối và gán 
        $abc = 'viet pro ';
        echo'xin chao cac ban '. $abc ; 
        // hằng 
        define('ABC',6.7);
        echo ABC;



    ?>
</body>
</html>