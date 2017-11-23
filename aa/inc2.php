<?php
//var_dump($_POST['finish_b']);
$string = $_POST['finish_b'];
?>
<script>var Array=[];

Array.push(<?php echo $string;?>);
    var ran;
    function rr() {
        hroop();
        b();
    }
    function hroop(){
        ran= Math.floor(Math.random()*74)+1;
        for(var i=0;i<=Array.length;i++){
            if(ran === Array[i]){
                hroop();
                break;
            }
        }
    }

    function b() {
        document.getElementById("a").innerHTML=ran;//出力
        Array.push(parseInt(document.getElementById("a").innerHTML));//配列にプッシュ
    }

    function saveArray() {
        var i=0;
        var g="";
        for(i;i<Array.length;i++){//配列を取り出し文字列
            g+=
//                i+":"+
                parseInt(Array[i])+",";
        }
        document.getElementById("array").innerText=g;//履歴を出力
        document.getElementById('finish_b').value=g;
//            +Array[Array.length-1];//次のページに遷移するために用意
        if(Array.length>38) {
            document.getElementById("a").style.color="blue";
        }
    }

</script>