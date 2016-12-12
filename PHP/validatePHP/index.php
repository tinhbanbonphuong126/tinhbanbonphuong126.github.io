<?php
// Code PHP xử lý validate
$error = array();
$data = array();

echo '<pre>';print_r($_POST);echo '</pre><br>';
// Code PHP xử lý validate
$error = array();
$data = array();
if (!empty($_POST['submit'])) {
    // Lấy dữ liệu

    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['date'] = isset($_POST['date']) ? $_POST['date'] : '';
    $data['sex'] = isset($_POST['sex']) ? $_POST['sex'] : '';
    $data['address'] = isset($_POST['address']) ? $_POST['address'] : '';
    $data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
    $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $data['facebook'] = isset($_POST['facebook']) ? $_POST['facebook'] : '';
    $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
    $data['confirm_password'] = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

    var_dump( $data['password']);
    var_dump( $data['confirm_password']);

    // Kiểm tra định dạng dữ liệu
    require('./validate.php');

    if (empty(trim($data['name']))){
        $error['name'] = 'Bạn chưa nhập tên';
    } else if (!is_name($data['name'])){
        $error['name'] = 'Tên không đúng định dạng';
    }

    //validate email
    if (empty(trim($data['email']))){
        $error['email'] = 'Bạn chưa nhập email';
    }
    else if (!is_email($data['email'])){
        $error['email'] = 'Email không đúng định dạng';
    }

    if (empty(trim($data['date']))){
        $error['date'] = 'Bạn chưa nhập ngày sinh';
    }

    if (empty(trim($data['sex']))){
        $error['sex'] = '<br>Bạn chưa chọn giới tính';
    }
    if (empty(trim($data['address']))){
        $error['address'] = 'Bạn chưa nhập địa chỉ';
    }
    if (empty(trim($data['phone']))){
        $error['phone'] = 'Bạn chưa nhập số điện thoại';
    } else if(!is_phone($data['phone'])) {
        $error['phone'] = 'Số điện thoại không đúng định dạng';
    }
    //kiem tra dinh dang url facebook
    if (empty(trim($data['facebook']))){
        $error['facebook'] = 'Bạn chưa nhập địa chỉ facebook';
    } else if(!is_facebook($data['facebook'])) {
        $error['facebook'] = 'Url ko đúng định dạng';
    }

    if (empty(trim($data['password']))){
        $error['password'] = 'Bạn chưa nhập password';
    }
    if ($data['password'] !== $data['confirm_password']){
        $error['confirm_password'] = 'Password ko trùng nhau';
    }
    // Lưu dữ liệu
    if (!$error){
        echo 'Dữ liệu có thể lưu trữ';
        // Code lưu dữ liệu tại đây
        // ...
    }
    else{
        echo 'Dữ liệu bị lỗi, không thể lưu trữ';
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
        label  {
            font-weight: bold;
        }
    </style>
</head>
<body>
<script>

</script>

<!--Form here-->
<div class="container">
    <form action="index.php" name="validate_form" id="validate_form" method="post">
        <fieldset>
            <legend class="text-xs-center pb-3">.PERSONAL INFORMATION.</legend>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="lazy1261990"  id="name" name="name" placeholder="Enter name">
                <?php echo isset($error['name']) ? $error['name'] : ''; ?>
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
            </div>
            <div class="form-group">
                <label for="email">Email address: </label>
                <input type="text" class="form-control" id="email" value="tinhbanbonphuong126@gmail.com" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
            </div>
            <div class="form-group">
                <label for="date">Birth</label>
                <input type="date" class="form-control" value="1989-06-12" id="date" name="date" placeholder="Enter birth">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
                <?php echo isset($error['date']) ? $error['date'] : ''; ?>
            </div>
            <div class="form-group">
                <label>Gender</label> <br>
                <input type="radio" name="sex" id="male" value="Male"> <label for="male">Male</label>
                <input type="radio" name="sex" id="female" checked value="Female"> <label for="female">Female</label>
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
                <?php echo isset($error['sex']) ? $error['sex'] : ''; ?>
            </div>
            <div class="form-group">
                <label for="address">Address: </label>
                <input type="text" class="form-control" value="Quang Binh" id="address" name="address" placeholder="Enter Address">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
                <?php echo isset($error['address']) ? $error['address'] : ''; ?>
            </div>
            <div class="form-group">
                <label for="phone">Phone number: </label>
                <input type="text" class="form-control" id="phone" name="phone" value="0984608332" placeholder="Enter Phone number">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
                <?php echo isset($error['phone']) ? $error['phone'] : ''; ?>
            </div>

            <div class="form-group">
                <label for="facebook">Facebook Link: </label>
                <input type="text" class="form-control" name="facebook" value="www.facebook.com/tinhbanbonphuong126" id="facebook" placeholder="Fill facebook here">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
                <?php echo isset($error['facebook']) ? $error['facebook'] : ''; ?>
            </div>
            <!--password-->
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" name="password" value="0000000000" id="password" placeholder="Fill password here">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
                <?php echo isset($error['password']) ? $error['password'] : ''; ?>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm password: </label>
                <input type="password" class="form-control" name="confirm_password" value="0000000000" id="confirm_password" placeholder="Fill confirm_password here">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
                <?php echo isset($error['confirm_password']) ? $error['confirm_password'] : ''; ?>
            </div>

            <!--submit-->
            <!--su dung thuoc tinh tabindex="-1" de submit bang enter-->
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </fieldset>
    </form>
</div>

<div class="p-3 m-3"></div>

<script>
    $('#name').tooltip({'trigger':'focus', 'title': 'Tên trong khoảng từ 6-32 ký tự, ko có khoảng trắng và ko bắt đầu bằng số'});
</script>

<!--end form-->
<!--validate for by javascript-->
<!--<script src="./js/validateForm.js"></script>-->

</body>
</html>