<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel ="stylesheet" type="text/css" href="css/style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <?php include "../aa/image_surunoha_tuneni_saikyouno_jibun.php"; ?>
</head>
<!--<body id="hajime">-->
<!--<div style="font-size:5em;width:100%;height: 100%; color:#fff;" >Next is designed by 平賀</div>-->
<!--</body>-->

<body id="hidec" >

<!--ここに今数字が表示されるねん-->
<div id="a"></div>

<!--このボタン押すと、新しく数字でて、数字の履歴がでるぞ！-->
<button id ="b" onclick=randomColor(document.getElementById("a"))>次の数字</button>

<!--ここに数字の履歴表示されるぞ！-->
<div id="array"></div>
<!--次の人と交代する時に使うボタン-->
<form action="../enomoto_box/a3.php" method="post">
<button type="submit" value="" id="finish_b" name="finish_b">終了</button>
</form>


</body>
</html>
<script>    document.getElementById("array").innerHTML="<?php if(isset($string)) echo $string;?>";
</script>
<script src="js3.js"></script>
<script>

//    setTimeout(
//        function(){
//            $("#hajime").hide();
//            $("#hidec").show();
//
//                $('body').css('background-image', 'url(wall.jpg)');
//
//
//        },1000);
    //    var Array=[];
//    var ran;
//
//    function rr() {
//        hroop();
//        b();
//    }
//
//    function hroop(){
//        ran= Math.floor(Math.random()*76)+1;
//        for(var i=0;i<=Array.length;i++){
//            if(ran === Array[i]){
//                hroop();
//                break;
//            }
//        }
//    }
//
//    function b() {
//        document.getElementById("a").innerHTML=ran;//出力
//        Array.push(parseInt(document.getElementById("a").innerHTML));//配列にプッシュ
//    }
//
//    function saveArray() {
//        var i=0;
//        var g="";
//        for(i;i<Array.length;i++){//配列を取り出し文字列
//            g+=
////                i+":"+
//                parseInt(Array[i])+",";
//        }
//        document.getElementById("array").innerText=g;//履歴を出力
//        document.getElementById('finish_b').value=g+Array[Array.length-1];//次のページに遷移するために用意
//    }
	function randomColor(node, colorBoolean) {
    	if (node[0]) {
      	  if (!node[0].nodeName) return
      	  	 } else {
        if (!node.nodeName) return
    }
    	if (node.style) {
       	 var dom = [node];
        	length = 1;
   	 } else {
        	if (!node[0].style) {
          	  return
       	 }
        	var dom = node;
        	length = node.length;
   	 }
    	for (var i = 0; i < length; i++) {
       	 var colorR = ~~(400 * Math.random());
       	 var colorG = ~~(400 * Math.random());
       	 var colorB = ~~(400 * Math.random());
        	dom[i].style.color = "rgb(" + colorR + "," + colorG + "," + colorB + ")";
    }
}

</script>

