// var r=Math.floor(Math.random()*5)+1;
// var text=document.getElementById("transformBox").innerHTML;
// document.write("text:"+text);
// document.write("r;"+r);
// var t=text.substr(r, 1);
// document.write("t:"+t);

// var textbox = document.querySelector('#transformBox');
// var tex = textbox.textContent;
//
// textbox.innerHTML = null;
// var i=0;
// tex.split('').forEach(function (c) {
//     textbox.innerHTML += '<span id='+i+'>'+c+'</span>';
//     i++;
// });
//

//
// $('#trigger').ready(function () {
//     // $('#transformBox').css({
//     $("#2").css({
//         top: -200,
//         left: 400,
//         font : 300
//
//     }).on('transitionend', function () {
//         $(this).css({
//             top: 0,
//             left: 0
//         }).off('transitionend');
//     });
// });

// function randomCharactor(c) {
//
//     //跳ねさせる要素をすべて取得
//     var randomChar = document.getElementsByClassName(c);
//
//     //for で総当たり
//     for (var i = 0; i < randomChar.length; i++) {
//
//         //クロージャー
//         (function(i) {
//
//             //i 番目の要素、テキスト内容、文字列の長さを取得
//             var randomCharI = randomChar[i];
//             var randomCharIText = randomCharI.textContent;
//             var randomCharLength = randomCharIText.length;
//
//             //何番目の文字を跳ねさせるかをランダムで決める
//             var Num = ~~(Math.random() * randomCharLength);
//
//             //跳ねさせる文字を span タグで囲む、それ以外の文字と合わせて再び文字列を作る
//             var newRandomChar = randomCharIText.substring(0, Num) + "" + randomCharIText.charAt(Num) + "" + randomCharIText.substring(Num + 1, randomCharLength);
//             randomCharI.innerHTML = newRandomChar;
//
//             //アニメーションが終わったら再び関数を発火させる
//             document.getElementsByClassName(c)[0].children[0].addEventListener("animationend", function() {
//                 randomCharactor(c)
//             }, false)
//         })(i)
//     }
// }
//
// //クラス名が pyonpyon のクラスを跳ねさせる
// randomCharactor("pyonpyon");

var t=0;
t+=50;
setTimeout(
    function () {
        $("#1").show();
    },t);
t+=300;
setTimeout(
    function () {
        $("#1").hide();
    },t);
t+=50;
setTimeout(
    function () {
        $("#2").show();
    },t);
t+=300;
setTimeout(
    function () {
        $("#2").hide();
    },t);
t+=50;
setTimeout(
    function () {
        $("#3").show();
    },t);
t+=300;
setTimeout(
    function () {
        $("#3").hide();
    },t);
t+=50;
setTimeout(
    function () {
        $("#4").show();
    },t);
t+=300;
setTimeout(
    function () {
        $("#4").hide();
    },t);
t+=50;
setTimeout(
    function () {
        $("#5").show();
    },t);
t+=300;
setTimeout(
    function () {
        $("#5").hide();
    },t);
t+=50;
setTimeout(
    function () {
        $("#6").show();
    },t);
t+=300;


setTimeout(
    function () {
        $("#6").hide();
    },t);
t+=50;
setTimeout(
    function () {
        $("#7").show();
    },t);
t+=300;
setTimeout(
    function () {
        $("#7").hide();
    },t);
t+=50;
setTimeout(
    function () {
        $("#8").show();
    },t);
t+=300;



setTimeout(
    function () {
        $("#8").hide();
    },t);
t+=50;
setTimeout(
    function () {
        $("#9").show();
    },t);
t+=300;
setTimeout(
    function () {
        $("#9").hide();
    },t);
t+=50;
setTimeout(
    function () {
        $("#10").show();
    },t);
t+=300;
setTimeout(
    function () {
        $("#10").hide();
    },t);
t+=50;
setTimeout(
    function () {
        $("#event").show();

    },t);

t+=2000;

setTimeout(
    function(){
        $("#event").hide();
        $("#eventtext").show();
        $('body').css('background-color', "black");

        }


,t);
// document.write(t);




