<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="oois.css">

    <?php include "../aa/image_surunoha_tuneni_saikyouno_jibun.php"; ?>
</head>
<body>
<!--ここに今数字が表示されるねん-->
<div id="a"></div>

<!--このボタン押すと、新しく数字でて、数字の履歴がでるぞ！-->

<!--ここに数字の履歴表示されるぞ！-->
<div id="array"></div>
<button id ="b" onclick=>start</button>

<!--次の人と交代する時に使うボタン-->
<form action="../3770平賀/3770_平賀悠斗.php" method="post">
    <button type="submit" value="" id="finish_b" name="finish_b">finish</button>
</form>

</body>
</html>
<script src="js3.js"></script>
<!--<script>-->
<!--    var Array=[];-->
<!--    var ran;-->
<!---->
<!--    function rr() {-->
<!--        hroop();-->
<!--        b();-->
<!--    }-->
<!---->
<!--    function hroop(){-->
<!--        ran= Math.floor(Math.random()*76)+1;-->
<!--        for(var i=0;i<=Array.length;i++){-->
<!--            if(ran === Array[i]){-->
<!--                hroop();-->
<!--                break;-->
<!--            }-->
<!--        }-->
<!--    }-->
<!---->
<!--    function b() {-->
<!--        document.getElementById("a").innerHTML=ran;//出力-->
<!--        Array.push(parseInt(document.getElementById("a").innerHTML));//配列にプッシュ-->
<!--    }-->
<!---->
<!--    function saveArray() {-->
<!--        var i=0;-->
<!--        var g="";-->
<!--        for(i;i<Array.length;i++){//配列を取り出し文字列-->
<!--            g+=-->
<!--//                i+":"+-->
<!--                parseInt(Array[i])+",";-->
<!--        }-->
<!--        document.getElementById("array").innerText=g;//履歴を出力-->
<!--        document.getElementById('finish_b').value=g+Array[Array.length-1];//次のページに遷移するために用意-->
<!--    }-->
<!---->
<!--</script>-->
