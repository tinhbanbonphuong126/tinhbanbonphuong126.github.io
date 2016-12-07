<?php
//Kiem tra dinh dang username trong khoang tu 6-32 digits
function is_name($str){
    return preg_match("/^[A-Za-z]{1}[A-Za-z0-9]{5,31}$/", $str);
}

// Kiểm tra định dạng email
function is_email($str) {
    return preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str);
}

//Hàm kiểm tra số điện thoại
function is_phone($str) {
    return preg_match("/^[0-9]{10,11}$/", $str);
}

//Hàm kiểm tra định dạng facebook
function is_facebook($str) {
    return preg_match("/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i", $str);
}
?>


