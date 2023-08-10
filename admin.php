<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

</head>
<style>

*{
    margin:0;
    padding:0;
}

#admin_box{
    margin-top: 10px;
    margin-left:10px;
}

ul,li{
    list-style: none;
}

.col1{
    display:inline-block;
    background-color: aqua;
    width: 50px;
    border-right: 1px solid black;
}

.col2{
    display:inline-block;
    background-color:sky;
    width: 70px;
    border-right: 1px solid black;
}
.col3{
    display:inline-block;
    background-color:sky-blue;
    width: 70px;
    border-right: 1px solid black;
}
.col4{
    display:inline-block;
    background-color:sky-blue;
    width: 120px;
    border-right: 1px solid black;
}

.col5{
    display:inline-block;
    background-color:sky-blue;
    width: 120px;
    border-right: 1px solid black;
}

.col6{
    display:inline-block;
    background-color:sky-blue;
    width: 150px;
    border-right: 1px solid black;
}

.col77{
    display:inline-block;
    background-color:orange;
    width: 120px;
    border-right: 1px solid black;
    /*  */
}



.col7{
    display:inline-block;
    background-color:greenyellow;
     width: 130px; 
    border-right: 1px solid black;
}



.col8{
    display:inline-block;
    background-color:yellow;
    width: 150px;
    border-right: 1px solid black;
}

.col9{
    display:inline-block;
    background-color:yellow;
    width: 130px;
    border-right: 1px solid black;
}
.col10{
    display:inline-block;
    background-color:yello;
    width: 50px;
    border-right: 1px solid black;
}

.check_box{
    position: relative;
    z-index: 1;
    /* width:300px; */
    display:block;
    
}

.check_box > li{
    display:block;
    float:left;
    margin-right:15px;
    display:none;
    
}



.check_box:hover {
   cursor: pointer;
    
}

.want_box{
    position: relative;
    z-index: 1;
    /* width:300px; */
    display:block;
    
}

.want_box > li{
    display:block;
    float:left;
    margin-right:15px;
    display:none;
    
}

.want_box:hover {
   cursor: pointer;
    
}

.route_box{
    position: relative;
    z-index: 1;
    /* width:300px; */
    display:block;
}
.route_box> li{
    display:block;
    float:left;
    margin-right:15px;
    display:none;
    
}

.route_box:hover {
   cursor: pointer;
    
}

</style>
<script>

$(function() {
  // 모든 체크박스 요소를 숨김 처리
  // $('.check_box li').hide();
 
  $('.check_box ').click(function(){

    $(this).find('li input[type="checkbox"]').click(function(e) {
        e.stopPropagation();
    });
    $(this).find('li input[type="text"]').click(function(e) {
        e.stopPropagation();
    });

    var kkk = $(this).find('li').css('display');

    if(kkk === 'none'){  
      $(this).find('li').slideDown();
    } else {
      $(this).find('li').slideUp();
    }
    
    return false; //링크금지
  });

  $('.want_box ').click(function(){

    $(this).find('li input[type="checkbox"]').click(function(e) {
        e.stopPropagation();
    });
    $(this).find('li input[type="text"]').click(function(e) {
        e.stopPropagation();
    });

    var jjj = $(this).find('li').css('display');



    if(jjj === 'none'){  
      $(this).find('li').slideDown();
    } else {
      $(this).find('li').slideUp();
    }
    
    return false; //링크금지
  });

  $('.route_box ').click(function(){

    $(this).find('li input[type="radio"]').click(function(e) {
        e.stopPropagation();
    });

    var yyy = $(this).find('li').css('display');

    if(yyy === 'none'){  
      $(this).find('li').slideDown();
    } else {
      $(this).find('li').slideUp();
    }
    
    return false; //링크금지
  });

});

</script>
<body>
    



<section>    
    <div id="admin_box">
        <h3 id="member_title">
	    	관리자 모드 > 회원 관리
		</h3>
        <ul id="member_list">
            <li>
                <span class="col1">번호</span>
                <span class="col2">이름</span>
                <span class="col3">생일</span>
                <span class="col4">전화번호</span>
                <!-- <span class="col5">포인트</span> -->
                <span class="col5">검색경로</span>
                <span class="col6">왁싱경험</span>
                <span class="col77">방문경로</span>       
                <span class="col7">피부질환여부</span>   
                <span class="col8">약복용여부</span>   
                <span class="col9">원하는서비스</span> 
                <span class="col10">수정</span>
                <span class="col11">삭제</span> 
            </li>
<?php
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from raku1 order by num desc";
	$result = mysqli_query($con, $sql);
    $total_record = mysqli_num_rows($result); // 전체 회원 수
    $number =  $total_record;
    
 
    

    while($row = mysqli_fetch_array($result)){
        $num  = $row["num"];
        $name = $row["name"];
        $birth = $row["birth"];
        $phone = $row["phone"];
        $route_method = $row["route_method"];
        $search_method = $row["search_method"];
        
        $wax_ex= $row["wax_ex"];
        $sicks= $row["sicks"];
        $temp = explode(",", $sicks);

             

        $pill_ex= $row["pill_ex"];
        $info= $row["info"];
        $want= $row["want"];
        $temp2 = explode(",", $want);
        $want_json = json_encode($temp2);
        $want_array = json_decode($want_json);
        $want_string = "";

        $temp_json = json_encode($temp);
        $temp_array = json_decode($temp_json);
        $temp_string = "";


        for ($i = 0; $i < count($temp_array); $i++) {
            $value = $temp_array[$i];
            if (!is_numeric($value)) {
                $temp_string =$value;
              }


        }

        for ($j = 0; $j < count($want_array); $j++) {
            $value2 = $want_array[$j];
            if (!is_numeric($value2)) {
                $want_string =$value2;
              }


        }
 

       

?>

     <li>
        <form action="admin_member_update.php?num=<?=$num?>" method="post">
                <span class="col1"><?=$number?></span>
                <span class="col2"><?=$name?></span>
                <span class="col3"><?=$birth?></span>
                <span class="col4"><input type="text" name="phone" value="<?=$phone?>" size='10'></span>
                <span class="col5"><input type="text" name="search_method" value="<?=$search_method?>" size='10'></span>
                
                <span class="col6"> ( <input type="radio" name="wax_ex" value="yes" <?php if ($wax_ex == 'yes') echo 'checked'; ?> > 예 
                                      <input type="radio" name="wax_ex" value="no" <?php if ($wax_ex == 'no') echo 'checked'; ?> > 아니요 ) </span>

                <span class="col77"> 
                    
                                    <ul class="route_box"> <a href="#">(펄쳐보기/접기)</a> 

                                    <li><input type="radio" name="route" value="1" <?php if ($route_method == '1') echo 'checked'; ?> > 지인소개</li>  
                                   
                                    <li>  <input type="radio" name="route" value="2" <?php if ($route_method == '2') echo 'checked'; ?> > 인터넷검색 </li>
                                    
                                    <li> <input type="radio" name="route" value="3" <?php if ($route_method == '3') echo 'checked'; ?> > 명함 전단지 </li> 
                                    
                                    </ul>
                                    
                                    </span>
                <span class="col7">
                     <ul class="check_box">  <a href="#"> (펄쳐보기/접기)</a>

                        <li>
                        <label for="checkbox1">혈액순환장애</label> 
                        <input type="checkbox" name="item[]" value="1" id="item1" <?php if(in_array("1", $temp_array)) { echo "checked"; } ?> >
                        </li>

                        <li>
                        <label for="checkbox2">당뇨병</label>
                        <input type="checkbox" name="item[]" value="2" id="item2" <?php if(in_array("2", $temp_array)) { echo "checked"; } ?>>
                        </li>

                        <li>
                        <label for="checkbox3">혈우병 </label>
                        <input type="checkbox" name="item[]" value="3" id="item3" <?php if(in_array("3", $temp_array)) { echo "checked"; } ?>>
                        </li>

                        <li>
                        <label for="checkbox4">건선 </label>
                        <input type="checkbox" name="item[]" value="4" id="item4" <?php if(in_array("4", $temp_array)) { echo "checked"; } ?>>
                        </li>
                        
                        <li>
                        <label for="checkbox5">아토피 </label>
                        <input type="checkbox" name="item[]" value="5" id="item5" <?php if(in_array("5", $temp_array)) { echo "checked"; } ?>>
                        </li>
                        
                        <li>
                        <label for="checkbox6">포진(두두러기) </label>
                        <input type="checkbox" name="item[]" value="6" id="item6" <?php if(in_array("6", $temp_array)) { echo "checked"; } ?>>
                        </li>

                        <li>
                        <label for="checkbox7">루푸스 </label>
                        <input type="checkbox" name="item[]" value="7" id="item7" <?php if(in_array("7", $temp_array)) { echo "checked"; } ?>>
                        </li>       

                        <li>
                        <label for="checkbox8">습진/무좀 </label>
                        <input type="checkbox" name="item[]" value="8" id="item8" <?php if(in_array("8", $temp_array)) { echo "checked"; } ?>>
                        </li>  

                        <li>
                        <label for="checkbox9">지루성피부염</label>
                        <input type="checkbox" name="item[]" value="9" id="item9" <?php if(in_array("9", $temp_array)) { echo "checked"; } ?>>
                        </li> 

                        <li>
                        <label for="checkbox10">없음</label>
                        <input type="checkbox" name="item[]" value="10" id="item10" <?php if(in_array("10", $temp_array)) { echo "checked"; } ?>>
                        </li>

                        <li>
                        <label for="text">기타 :</label>
                        <input type="text" name="item[]" size="12" id="item11" value='<?php echo htmlspecialchars($temp_string, ENT_QUOTES); ?>'>
                        </li>
                    </ul>
                </span>
                <span class="col8">( <input type="radio" name="pill_ex" value="yes" <?php if ($pill_ex == 'yes') echo 'checked'; ?> > 예 
                                      <input type="radio" name="pill_ex" value="no" <?php if ($pill_ex == 'no') echo 'checked'; ?> > 아니요 )</span>
                <span class="col9">
        
                    <ul class="want_box"> <a href="#">(펄쳐보기/접기)</a> 
                    <li>
                    <label for="checkbox1">헤어라인</label> 
                    <input type="checkbox" name="want[]" value="1" id="want1" <?php if(in_array("1", $want_array)) { echo "checked"; } ?> >
                    </li>

                    <li>
                    <label for="checkbox2">이마</label>
                    <input type="checkbox" name="want[]" value="2" id="want2" <?php if(in_array("2", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox3">구렛나루 </label>
                    <input type="checkbox" name="want[]" value="3" id="want3" <?php if(in_array("3", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox4">눈썹 </label>
                    <input type="checkbox" name="want[]" value="4" id="want4" <?php if(in_array("4", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox5">콧수염 </label>
                    <input type="checkbox" name="want[]" value="5" id="want5" <?php if(in_array("5", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox6">턱수염</label>
                    <input type="checkbox" name="want[]" value="6" id="want6" <?php if(in_array("6", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox7">팔 </label>
                    <input type="checkbox" name="want[]" value="7" id="want7" <?php if(in_array("7", $want_array)) { echo "checked"; } ?>>
                    </li>       

                    <li>
                    <label for="checkbox8"> 겨드랑이</label>
                    <input type="checkbox" name="want[]" value="8" id="want8" <?php if(in_array("8", $want_array)) { echo "checked"; } ?>>
                    </li>  

                    <li>
                    <label for="checkbox9">다리</label>
                    <input type="checkbox" name="want[]" value="9" id="want9" <?php if(in_array("9", $want_array)) { echo "checked"; } ?>>
                    </li> 

                    <li>
                    <label for="checkbox10">배</label>
                    <input type="checkbox" name="want[]" value="10" id="want10" <?php if(in_array("10", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox11">가슴</label>
                    <input type="checkbox" name="want[]" value="11" id="want11" <?php if(in_array("11", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="text">기타 :</label>
                    <input type="text" name="want[]" size="12" id="want12" value='<?php echo htmlspecialchars($want_string, ENT_QUOTES); ?>'>
                    </li>

                    <li>
                    <label for="checkbox13">비키니</label>
                    <input type="checkbox" name="want[]" value="13" id="want13" <?php if(in_array("13", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox14">브라질리언 </label>
                    <input type="checkbox" name="want[]" value="14" id="want14" <?php if(in_array("14", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox15">항문 </label>
                    <input type="checkbox" name="want[]" value="15" id="want15" <?php if(in_array("15", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox16">사타구니 </label>
                    <input type="checkbox" name="want[]" value="16" id="want16" <?php if(in_array("16", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox17">기본케어 </label>
                    <input type="checkbox" name="want[]" value="17" id="want17" <?php if(in_array("17", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox18">전신케어 </label>
                    <input type="checkbox" name="want[]" value="18" id="want18" <?php if(in_array("18", $want_array)) { echo "checked"; } ?>>
                    </li>

                    <li>
                    <label for="checkbox19">전신마사지 </label>
                    <input type="checkbox" name="want[]" value="19" id="want19" <?php if(in_array("19", $want_array)) { echo "checked"; } ?>>
                    </li>

                    </ul>
                    </span>
                <span class="col10"><button type="submit">수정</button></span>
                <span class="col11">
                    <button type="button" onclick="location.href='admin_member_delete.php?num=<?=$num?>' ">삭제</button>
                </span>
        </form>
    </li>
<?php
    $number--;
}
?>
    <p>안녕하세요</p>
    <button type="button" onclick="location.href='raku.php'">입력페이지로</button>
</body>
</html>