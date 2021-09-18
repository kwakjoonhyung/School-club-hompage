<!DOCTYPE html>
<html lang="en">
<!--     뭔가 추가한것 -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="data">

    </div>
    <script>
        function printer(texttoadd){
        var node=document.createElement("div");
        var textnode=document.createTextNode(texttoadd);
        node.appendChild(textnode);
        document.getElementById("data").appendChild(node);
    }

        if(localStorage.getItem("taglistsize")){ // Application > LocalStorage 들어가서 태그 입력한 값 확인해보기 
    let taglistsize=localStorage.getItem("taglistsize");
    //localstorage에 저장된 값 가져오는 코드
    
    for(i=1;i<=taglistsize;i++){
        console.log(localStorage.getItem(i));
        <?php
        //배열을 만들어서 php 배열에 localStorage.getItem(i)값 넣기
        $arr = array();
        $arr['<script>i</script>'] = '<script>localStorage.getItem(i)</script>';
        ?>
        if(localStorage.getItem(i)!="undefined"){
            printer(localStorage.getItem(i));
                } // 태그 여러개를 한꺼번에 넘겨서 순서대로 태그를 기준으로 검색
       
    }

    

   
    
    //가져온 후 localstrage를 초기화 하는 코드
    //localStorage.clear();
}
    </script>



    
</body>
</html>

