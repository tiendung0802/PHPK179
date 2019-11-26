<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
       
         
             Tên sách : <input type="text"  id="name" name="book" placeholder=" nhập tên sách"> 
             <br> 
        
            tải lên sách :  <input type="file" id="fileupload" name="file" value="chọn">
            <br>

          <button id="add-book" type="submit" class="btn btn-primary" name="sbm" ">Thêm sách</button>
        </form> 
</body>
</html>
<?php
    $name = $_FILE['file']['name'] ;
    
?> 