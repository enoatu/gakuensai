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

<!--このボタン押すと、新しく数字でて、数字の履歴がでるぞ！-->
<button id ="b" onclick=rr();saveArray();>おす</button>

<!--ここに数字の履歴表示されるぞ！-->
<p id="array"></p>

<!--次の人と交代する時に使うボタン-->
<form action="a2.php" method="post">
<button type="submit" value="" id="finish_b" name="finish_b">終了</button>
</form>


</body>
</html>