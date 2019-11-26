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
        // phương thức post 
        // cú pháp:  $_POST['name']   name là giá trị của ô input 

        // if(isset($_POST['sbm'])){
        //     $user = $_POST['user'];
        //     $pass = $_POST['pass'];
        //     echo $user."<br>".$pass; 

        // }
        // upload file 

        // $name = $_FILE['giá_trị_ô_input']['name'];  // lấy được tên file 
        // $_FILES['giá_trị_ô_input']['size'];  //  kích cỡ file 
        // $_FILE['giá_trị_ô_input']['type'];  // lấy được kiểu file 
        // $_FILE['giá_trị_ô_input']['error']; // lấy ra file lỗi
        // $tmp_name =  $_FILE['giá_trị_ô_input']['tmp_name']; // thư mục tạm 
        // move_uploaded_file($tmp_name,'upload/'.$name);
        // ví dụ 
        if(isset($_POST['sbm'])){
            $file = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $error = $_FILES['file']['error']; 

            if($error> 0 ){
                echo 'file upload bị lỗi ' ;  
            }else{
                move_uploaded_file($tmp_name,'upload/'.$file);
                echo'bạn đã upload thành công'.'<hr>' ;
            }
        }
       

        


    ?>

               <img src="<?php echo 'upload/'.$file ?>" style ="max-width:30%;"> 
               <hr>



    <!-- <form action="" method="POST">
        <input type="text" name="user">    
        <input type="password" name="pass">
        <input type="submit" name="sbm">


    </form> -->
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="tải lên " name="sbm">
        
    </form>
</body>
</html>