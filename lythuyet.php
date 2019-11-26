<?php
// biểu thức điều kiện if 
// $soNguyen = -10;
// if($soNguyen > 0 ){
//     echo' đây là số nguyên dương ';
// }
// biểu thức điều kiện if else 

// if($soNguyen > 0){
//     echo'đây là số nguyên dương';
// }else if($soNguyen==0){
//     echo'đây là số 0 ';
// }else{
//     echo'đây là số nguyên âm';
// }
 
// vòng lặp while 

// while(biểu thức ){
//     code thực thi 
// }
// vi dụ : in ra các số chạy từ 5 đến 9 và mỗi số tương đương với 1 dòng 
// $i = 5;
// while($i<10){
//     echo $i.'<br>'; 
//     $i++;
// }
// // in ra các số từ 10-1 và có dấu phẩy , dấu chấm sau số 1 

// $i = 10 ; 

// while($i > 0){
//     if($i > 1 ){
//         echo $i.',';
//     }else{
//         echo $i.'.';
//     }
//     $i--;
// }

// vòng lặp for

// for(khởi tạo biểu thức  ; biểu thức ; tăng giảm  bt )
// {
//     code 
// }

// vi dụ : dùng vòng lặp for lấy ra các số chẵn từ 10-0 
// for($i=10;$i>=0;$i-=2)
// {
//         echo $i.','; 
// }

for($a=2;$a<=9;$a++)
{

    for($b=1;$b<=10;$b++)
    {
       
        echo  $a . '*'. $b.'=' .$a*$b .' '; 

    }

   echo '<br>';
    
}

?>