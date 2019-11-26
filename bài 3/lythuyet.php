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
        // phương thức get 
        // cú pháp truyền tham số lên url 
        //  tenmien.com/index.php?thamso1=giatri1&thamso2=giatri2&thamso3=giatri3
        //$_Get['']; // bien toan cuc và luu tru duoi dang mang bất tuần tự 
        // hàm isset($tenbien)

        // if (isset($_GET['ten']) && isset($_GET['tuoi'])){

        //     $ten = $_GET['ten'] ;
        //     $tuoi = $_GET['tuoi'] ; 
        //     echo $ten.'<br>'.$tuoi ;
        // }
        
        // mảng 
        //  $array = array(bieu_thuc_1, bieu_thuc_2);
        //  $arr = [bieu_thuc_1 ,  bieu_thuc_2];

        // ví dụ 
        //  $arr = [1,2,'ba',4,true,6.5,'ban','ghe','van vân'];
        //     // var_dump  , prin_r

        //     // foreach 

        //     foreach ($arr as $key => $value){
        //             echo $key.'=>'.$value.'<br>';
        //     }

        // json :
        // đọc file json 
       $data_json = file_get_contents('data.json');
       // chuyen json sang dạng mảng 
       $result_json = json_decode($data_json, true) ;

       foreach ($result_json as $key => $value){
           echo $value.'<br>'; 
       }

       // thêm vào json : ghi vào dữ liệu mowsi thì dữ liệu cũ mát đi 

       $json_encode = json_encode($result_json, JSON_UNESCAPED_UNICODE); 
       //pull json 
       file_put_contents('data.json', $json_encode);


            


    ?>


    </form>
</body>
</html>