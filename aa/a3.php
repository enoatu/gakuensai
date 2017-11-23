<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="a3.css">
    <?php include "image_surunoha_tuneni_saikyouno_jibun.php"; ?>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <script >
        var countbr = 0;
        function countBR() {
            countbr++;
            if (countbr===5)
                document.getElementById("array").innerHTML+="<br>";
        }

    </script>
</head>
<body>
<!--<p id="11" class="first">Event Team</p>-->

<div id="click_space">
<!--ここに今数字が表示されるねん-->
<div align="center" id="a" onclick=countBR(); ></div>
<!--このボタン押すと、新しく数字でて、数字の履歴がでるぞ！-->
<a id ="b" class="b"></a>
</div>
<!--ここに数字の履歴表示されるぞ！-->
<p id = "br_wrap"><span id="br" ></span><span id="array"></span></p>


<!--次の人と交代する時に使うボタン-->
<form action="a3.php" method="post">
<button type="submit" value="" id="finish_b" name="finish_b">finished!</button>

</form>
<button onclick=fix(); id="fix" name="fix">fixed</button>




</body>
</html>

<script src="js3.js"></script>
<script>
    function fix() {
        document.getElementById("br").innerHTML="\u00a0"+document.getElementById("br").innerHTML;
    }
</script>