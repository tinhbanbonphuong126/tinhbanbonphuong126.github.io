
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


<!--Form here-->
<div class="container">
    <form action="welcome.php" name="validate_form" id="validate_form" method="post">
        <fieldset>
            <legend class="text-xs-center pb-3">.PERSONAL INFORMATION.</legend>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="P Que" placeholder="Enter name">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
            </div>
            <div class="form-group">
                <label for="date">Birth</label>
                <input type="date" class="form-control" id="date" name="date" value="1989-06-12" placeholder="Enter birth">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
            </div>
            <div class="form-group">
                <label>Gender</label> <br>
                <input type="radio" name="sex" id="male" value="Male"> <label for="male">Male</label>
                <input type="radio" name="sex" id="female" value="Female" checked> <label for="female">Female</label>
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
            </div>
            <div class="form-group">
                <label for="address">Address: </label>
                <input type="text" class="form-control" id="address" name="address" value="Le Thuy - Quang Binh" placeholder="Enter Address">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
            </div>
            <div class="form-group">
                <label for="phone">Phone number: </label>
                <input type="text" class="form-control" id="phone" name="phone" value="0984608332" placeholder="Enter Phone number">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
            </div>
            <div class="form-group">
                <label for="email">Email address: </label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="tinhbanbonphuong126@gmail.com" placeholder="Enter email">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
            </div>
            <div class="form-group">
                <label for="facebook">Facebook Link: </label>
                <input type="text" class="form-control" name="facebook" value="www.facebook.com/tinhbanbonphuong126" id="facebook" value="" placeholder="Fill facebook here">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
            </div>
            <!--password-->
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" name="password" id="password" value="000000000" placeholder="Fill password here">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm password: </label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="000000000" placeholder="Fill confirm_password here">
                <div class="alert alert-warning hidden-xl-down" role="alert"></div>
            </div>

            <!--submit-->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </fieldset>
    </form>
</div>

<div class="p-3 m-3"></div>



<!--end form-->
<script src="./js/validateForm.js"></script>

</body>
</html>