<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="raku.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<script>
    function check_input()
{
      if (!document.raku_form.name.value) {
          alert("이름을 입력하세요!");    
          document.raku_form.name.focus();
          return false;
      }

      if (!document.raku_form.birth.value) {
          alert("생년월일을 입력하세요!");    
          document.raku_form.pass.focus();
          return false;
      }

      if (!document.raku_form.phone.value) {
          alert("전화번호를 입력하세요!");    
          document.raku_form.phone.focus();
          return false;
      }

      if (!document.raku_form.route.value) {
          alert("방문경로를 선택하세요!");    
          document.raku_form.route.focus();
          return false;
      }

      
      if (!document.raku_form.search.value) {
          alert("검색경로를 선택하세요!");    
          document.raku_form.search.focus();
          return false;
      }

      if (!document.raku_form.wax_ex.value) {
          alert("왁싱복용 여부를 선택하세요 !");    
          document.raku_form.wax_ex.focus();
          return false;
      }

      var item_boxes = document.getElementsByName('item[]');
      var item_check = 0;

    var item_count=0;

    for (var i = 0; i < item_boxes.length; i++) {
        
        if (item_boxes[i].id != "item11" && item_boxes[i].checked) {
            
            item_check = 1;
            item_count++;
        }
        if (item_boxes[i].id == "item11" && item_boxes[i].value!="") {
            
            item_check = 1;

                item_count++;
        }    

    }

    for (var i = 0; i < item_boxes.length; i++) {
        if (item_boxes[i].id == "item10" && item_boxes[i].checked && item_count>=2 ){
            alert("없음을 선택했다면 다른 것은 선택하지 말아주시길 부탁합니다 ");    
             return false;
        }
    }

    // alert(" 아이템체크 " item_check);

    if (item_check==0) {
        alert("피부질환 여부를 선택하세요 !");
        return false;
    }

   



    // for (var i = 0; i < item_boxes.length; i++) {
    //     if(item_boxes[i].value == ""){
    //         item_boxes.splice(i, 1);
    //         i--;  
            
    //     }
    // }



    if (!document.raku_form.pill_ex.value) {
          alert("복용중인 약이 있다면 여부를 선택하세요 !");    
          document.raku_form.pill_ex.focus();
          return false;
      }

    var want_boxes = document.getElementsByName('want[]');
    var want_check = 0;
    
    for (var i = 0; i < want_boxes.length; i++) {
        
        if (want_boxes[i].id != "want12" && want_boxes[i].checked) {
            
            want_check = 1;
            break;
        }
        if (want_boxes[i].id == "want12" && want_boxes[i].value!="") {
            
            want_check = 1;

        }    

    }

    if (want_check==0) {
        alert("원하는 서비스를 선택하세요 !");
        return false;
    }

    if (!document.raku_form.info.value) {
          alert("정보 동의 여부를 선택하세요 !");    
          document.raku_form.pill_ex.focus();
          return false;
      }


      document.raku_form.submit();

      
}
   

function check_admin()
{
    if (document.check_admin.value!="1234")
    {
        alert("관리자 비밀번호가 틀립니다");    
        document.login_form.id.focus();
        return;
    }


    document.login_form.submit();
}

</script>

<body>


<form action="raku_insert.php" method="post" name="raku_form" enctype="multipart/form-data">

<div id="wrap" class=" container-fluid text-center border" style="max-width:1000px" >
    <!-- 이름을 입력  -->
    <div class="row">

        <div id="name_box" class="box1 p-5 col-sm-4 border">
                    이름
                <input type="text" name="name" size="15">


        </div>

        <!-- 생일을 입력  -->
        <div id="birth_box " class="box1 p-5 col-sm-4 border">
                    생일
            <input type="text" name="birth" size="15">(ex870916)

            
        </div>
        <!-- 전화번호를 입력  -->
        <div id="phone_box" class="box1 p-5 col-sm-4 border" >


                전화번호
    
                <input type="text" name="phone" size="10">

        </div>
        
    </div>
    <div class="row">
        <!-- 2번째 줄  -->

        <!-- 방문경로를 선택 -->
        
        <div class="box1  p-5 col-sm-4 border ">방문경로 </div>


        <div id="route_box" class="box1 box2 p-5 col-sm-8 border d-flex justify-content gap-4">

            

                <input type="radio" id="option1" name="route" value="1">  지인소개 <br>
                <input type="radio" id="option2" name="route" value="2"> 인터넷검색<br>
                <input type="radio" id="option3" name="route" value="3"> 명함,전단지<br>
        
            
        </div>
    </div>
    <!-- 3번째 줄 -->

    <div class="row">
        <div class="box1 p-5 col-sm-4 border ">검색어(인터넷 검색 체크시 )</div>

        <!-- 검색어 입력  -->
        <div id="search_box" class="box1 box2  p-5 col-sm-8 border ">

            
            
                <input type="text" name="search" size="15"> (예시: '남성왁싱', '라쿠케어' ,'브라질리언 왁싱 ')
        

        </div>

       


    </div>
    <!-- 4번째 줄  -->
    <div class="row">            
         <p class="box1 p-3 col-sm-12 text-start  " > 
                
         ◈ 왁싱경험이 있습니까? 
            ( <input type="radio" name="wax_ex" value="yes" > 예 <input type="radio" name="wax_ex" value="no"> 아니요 )
        </p>
    </div>
    <!-- 5번째 줄 -->
    <div class="row">
        <div class="text-start">
            <h5>◈ 피부질환여부</h5> 
        </div>
        <ul class="sicks_nav list-unstyled d-flex flex-wrap gap-4 " > 
            <li>
            <label for="checkbox1">혈액순환장애</label>
            <input type="checkbox" name="item[]" value="1" id="item1">
            </li>

            <li>
            <label for="checkbox2">당뇨병</label>
            <input type="checkbox" name="item[]" value="2" id="item2">
            </li>   

            <li>
            <label for="checkbox3">혈우병 </label>
            <input type="checkbox" name="item[]" value="3" id="item3">
            </li>

            <li>
            <label for="checkbox4">건선 </label>
            <input type="checkbox" name="item[]" value="4" id="item4">
            </li>

            <li>
            <label for="checkbox5">아토피 </label>
            <input type="checkbox" name="item[]" value="5" id="item5">
            </li>

            <li>
            <label for="checkbox6">포진(두두러기) </label>
            <input type="checkbox" name="item[]" value="6" id="item6">
        

            <li>
            <label for="checkbox7">루푸스 </label>
            <input type="checkbox" name="item[]" value="7" id="item7">
            </li>

            <li>
            <label for="checkbox8">습진/무좀 </label>
            <input type="checkbox" name="item[]" value="8" id="item8">
            </li>

            <li>
            <label for="checkbox9">지루성피부염</label>
            <input type="checkbox" name="item[]" value="9" id="item9">
            </li>

            <li>
            <label for="checkbox10">없음</label>
            <input type="checkbox" name="item[]" value="10" id="item10">
            </li>

            <li>
            <label for="text">기타 :</label>
                <input type="text" name="item[]" size="12" id="item11" style="height: 20px;">
            </li>

            </ul>
    </div>
    <!-- 6번째 줄 -->
    <div class="row">
        <div class=" box1 p-3 col-sm-12 border">
            <!-- <br> -->
            <p>◈ 복용중인 처방약이 있습니까? 

            ( <input type="radio" name="pill_ex" value="yes" > 예
            <input type="radio" name="pill_ex" value="no" > 아니요 )
            </p>

            <p> 
            왁싱 시술 후 피부에 따라 붉어지거나 부어오르며 트러블이 생길 수 있습니다 
            보통 빠르면 1~2시간 후 오래가는 고객님들은 2~3일 후 가라앉으며 등,배, 가슴,왁싱은
            트러블이 올라오면 약 1주일 길게는 한달 정도 걸립니다 
            왁싱 후 피부가 예민해진 상태이니 24시간은 동안은 비위생적인 환경에 노출을 피해주세요
            </p>
        </div>
    </div>

    <section class="select_box row ">
            <div class="small_box col-sm-3 border justify-content-center">
            
                <ul class="list-unstyled ">
                    <div class="border-bottom p-1" >
                        퓨빅

                    </div>
                    <li>
                        <input type="checkbox" name="want[]" value="1" id="want1">
                        <label for="checkbox1">헤어라인</label>
                    
                    </li>
                <li>
                    
                    <input type="checkbox" name="want[]" value="2" id="want2">
                    <label for="checkbox2">이마</label>
                    
                </li>
                <li>

                    <input type="checkbox" name="want[]" value="3" id="want3">
                    <label for="checkbox3">구렛나루 </label>
                
                </li>
                <li>

                    <input type="checkbox" name="want[]" value="4" id="want3">
                    <label for="checkbox4"> 눈썹</label>
                    
                </li>
                <li>

                    <input type="checkbox" name="want[]" value="5" id="want5">
                    <label for="checkbox5"> 콧수염 </label>
                    
                </li>
                <li>

                    <input type="checkbox" name="want[]" value="6" id="want6">
                    <label for="checkbox6"> 턱수염 </label>
                    
                </li>
                </ul>
            </div>    
            
            <div class="small_box col-sm-3 border">
                <ul class="list-unstyled ">
                    <div class="border-bottom p-1" >
                        바디
                    </div>

                <li>

                <input type="checkbox" name="want[]" value="7" id="want7">
                <label for="checkbox7">팔</label>
                
            

                <li>

                <input type="checkbox" name="want[]" value="8" id="want8">
                <label for="checkbox8">겨드랑이 </label>
            
                </li>

                <li>   

                <input type="checkbox" name="want[]" value="9" id="want9">
                <label for="checkbox9">다리 </label>
                
                </li>

                <li> 

                <input type="checkbox" name="want[]" value="10" id="want10">
                <label for="checkbox10">배 </label>
                
                </li>

                <li>

                <input type="checkbox" name="want[]" value="11" id="want11">
                <label for="checkbox11">가슴 </label>
                
                </li>

                <li>

                <label for="text2">기타 :</label>
                <input type="text2" name="want[]" id="want12" size="10">
                
                
                </li>

                </ul>
            </div>    
            
            
            <div class="small_box col-sm-3 border" >
                
                     
                <ul class="list-unstyled  "> 
                    <div class="border-bottom p-1" >
                    퓨빅

                    </div>

                <li>

                <input type="checkbox" name="want[]" value="13" id="want13">
                <label for="checkbox7">비키니</label>
                
                </li>
                <li>
                    
                <input type="checkbox" name="want[]" value="14" id="want14">
                <label for="checkbox8">브라질리언 </label>
                
                </li>
                <li>

                <input type="checkbox" name="want[]" value="15" id="want15">    
                <label for="checkbox9">항문 </label>
                
                </li>

                <li>

                <input type="checkbox" name="want[]" value="16" id="want16">    
                <label for="checkbox10">사타구니 </label>
                
                </li>

                </ul >
            
            </div>
            <div class="small_box col-sm-3 border">
                <ul class="list-unstyled ">
                    <div class="border-bottom p-1" >
                        라꾸케어

                    </div>
                <li>
                    
                <input type="checkbox" name="want[]" value="17" id="want17">
                <label for="checkbox11">기본케어</label>
                
                </li>
                <li>
                <input type="checkbox" name="want[]" value="18" id="want18">
                <label for="checkbox12">전신케어 </label>
                
                </li>
                <li>
                <input type="checkbox" name="want[]" value="19" id="want19">    
                <label for="checkbox13">전신마사지 </label>
                
                </li>
            </ul>
            
            </div>            
        </section>
        <footer class="row">
            <div class="text-start">
                <strong >  개인 정보 동의서</strong>
            </div>
            <div class="info_box cf">
                <p> 
                라꾸에서 제공하는 서비스예약 확인 ,이벤트 등 문자 서비스를 받기 위해 
                아래와 같이 개인정보 제공에 동의합니다 <br>
                    <div class="col d-inline">
                    <input type="radio" name="info" value="yes">
                        예 
                    </div>

                    <div class="col d-inline">
                    <input type="radio" name="info" value="no">
                        아니요 
                    </div>

                </p>
            </div>
        <br>
        <ul class="list-unstyled d-flex flex-wrap gap-4">
            
            <li> ▶ 수집항목 : 성명 휴대폰번호 ,생년월일  </li>
            <li> ▶ 수집목적 : 서비스예약확인, 이벤트 등 문자서비스 제공 </li>
        </ul>
    </footer>

    </div>
    
    <div class="d-flex justify-content-center">
        <button class="final" onclick="check_input()" type="button" >
            저장
        </button>
    </div>
</form>





    <br>
    <div id="admin_box" class="mt-1"> 

        <form action="admin.php">

            관리자모드 비밀번호 : <input type="text" name="check_admin">
            <input type="submit"비밀번호입력 >
        </form>
        <!-- <button onclick="window.location.href='admin.php'"> 관리자 페이지 </button>   -->
        <!-- <form action="POST"></form> -->

    </div>

    
</body>
</html>



</form>