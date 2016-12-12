<?php
echo '<pre>';print_r($_GET);echo '</pre><br>';


if(isset ($_GET['submit']) ){
    // B1: Lấy thông tin
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $password = isset($_GET['password']) ? $_GET['password'] : '';


    // B2: Kiểm tra dữ liệu
    if (!$password || !$name){
        echo 'Bạn chưa nhập đủ thông tin';
    }
    else if ($password != 'test' || $name != 'test'){
        echo 'Thông tin đăng nhập bị sai';
    }
    else{
        echo 'Đăng nhập thành công!';
    }
}








?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Responsive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script src="plugins/tether.js" type="text/javascript"></script>
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap-flex.css">
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap-grid.css"/>
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="./plugins/font-awesome/css/font-awesome.css">
    <style>

    </style>
</head>
<body>

<!--test-->

<div class="container col-xs-6 offset-xs-3 p-3">
    <p class="h2 text-xs-center">PERSONAL INFORMATION</p>
    <div class="table-bordered p-3">
        <!--Information here-->
        <p id="name"><b>Name:</b> </p> <br>
        <p id="date"><b>Birth:</b> </p> <br>
        <p id="sex"><b>Sex:</b> </p> <br>
        <p id="address"><b>Address:</b> </p> <br>
        <p id="phone"><b>Phone:</b> </p> <br>
        <p id="email"><b>Email:</b> </p> <br>
        <p id="facebook"><b>Facebook:</b> </p> <br>
        <!--end of information-->
        <div class="row flex-items-xs-center">
            <div>
                <a class="btn btn-success col-xs" href="index.html">Back</a>
            </div>
            <div>
                <a class="btn btn-success col-xs offset-xs-1" href="#">Complete</a>
            </div>
        </div>
    </div>
</div>

<script src="./js/getValueFromForm.js"></script>
<script src="./js/validateForm.js"></script>
</body>
</html>