<?php
$conn_string = "host=ec2-52-207-93-32.compute-1.amazonaws.com port=5432 dbname=defoib7c9ma8tt user=gnaviepvuxyjaw password=cf160dd82279259ce81aa2d23c7558554c459d5b008250f747f1b63c0655d24d";
$dbconn = pg_connect($conn_string);
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}
if (isset($_POST['pass'])) {
    $pass = $_POST['pass'];
}
$result = pg_query($dbconn, "select * from tbl_user where username = '" . $username . "' and password = '" . $pass."'");
if (!$result) {
    echo "Đăng nhập thất bại";
} else {
    echo "Đăng nhập thành công";
}