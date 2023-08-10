<?php

$name = $_POST["name"];
$birth = $_POST["birth"];
$phone = $_POST["phone"];
$route_method = $_POST['route']; 
$search_method = $_POST["search"];
$wax_ex = $_POST["wax_ex"];
$items=$_POST["item"];
$item_str=implode(",", $items);
$pill_ex=$_POST["pill_ex"];
$wants=$_POST["want"];
$want_str=implode(",", $wants);
$info=$_POST["info"];


$con = mysqli_connect("localhost","user1","12345","sample");
$sql = "insert into raku1(name, birth, phone,route_method,search_method,wax_ex ,sicks,pill_ex,want ,info) ";
    $sql .= "values('$name', '$birth', '$phone','$route_method','$search_method','$wax_ex','$item_str','$pill_ex','$want_str' ,'$info')";

    mysqli_query($con, $sql); //접속(db를 열고)후 $sql에 저장된 명령어 실행
    mysqli_close($con);

    echo "
    <script>
        location.href = 'raku.php'; 
    </script>
";
?>

