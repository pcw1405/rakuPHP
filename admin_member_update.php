<?php


$num=$_GET["num"];


$con = mysqli_connect("localhost", "user1", "12345", "sample");

$phone = $_POST["phone"];
$search_method = $_POST["search_method"];

$items=$_POST["item"];
$wants=$_POST["want"];
$route=$_POST["route"];

$wax_ex=$_POST["wax_ex"];
$pill_ex=$_POST["pill_ex"];

$item_str=implode(",", $items);
$want_str=implode(",", $wants);
// $pill_ex=$_POST["pill_ex"];
// $wants=$_POST["want"];
// $want_str=implode(",", $wants);

if (in_array("10", $items) && count(array_filter($items)) > 1) {
    echo "<script>alert('없음으로 선택된 경우 다른 것은 선택할 수 없습니다.');history.back();</script>";
    exit;
  }


$sql= "update raku1 set search_method='$search_method',phone='$phone',sicks='$item_str'" ;
$sql.=",route_method='$route',wax_ex='$wax_ex',pill_ex='$pill_ex' ,want='$want_str'  ";
$sql.="where num=$num ";



if(mysqli_query($con, $sql)){
    echo("
    <script>
    alert('회원정보를 변경했습니다');
    history.go(-1)
    </script>
    ");
    
    mysqli_close($con);

}  


?>