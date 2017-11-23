<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php include "image_surunoha_tuneni_saikyouno_jibun.php"; ?>
</head>
<body>

<!--ここに今数字が表示されるねん-->
<p id="a"></p>
<div class="type-textbound">
    <span class="textbound1">L</span>
    <span class="textbound2">O</span>
    <span class="textbound3">G</span>
    <span class="textbound4">O</span>
</div>
<!--このボタン押すと、新しく数字でて、数字の履歴がでるぞ！-->
<button id ="b" onclick=rr();saveArray();>おす</button>

<!--ここに数字の履歴表示されるぞ！-->
<p id="array"></p>

<!--次の人と交代する時に使うボタン-->
<form action="a3.php" method="post">
<button type="submit" value="" id="finish_b" name="finish_b">終了</button>
</form>


</body>
</html>
<style>
    .type-textbound {
        font-size: 60px;
        text-align: center;
    }

    .textbound1 {animation: bound .5s ease-in-out;}
    .textbound3 {animation: bound .7s ease-in-out;}
    .textbound2 {animation: bound .9s ease-in-out;}
    .textbound4 {animation: bound 1s ease-in-out;}

    @-webkit-keyframes bound {
        0% {transform: scale(0) translate(0,-500px);}
        50% {transform: scaleX(2) translate(0,200px);}
        70% {transform: scaleY(.5) translate(0,-100px);}
        90% {transform: scaleX(1.5) translate(0,50px);}
        100% {transform: scale(1) translate(0,0);}
    }
</style>