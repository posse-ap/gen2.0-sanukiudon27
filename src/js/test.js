// それぞれのボタンを取得
var targetBtn = document.getElementById("cde");
// targetBtnの値を取得
var num = targetBtn.value;
// targetBtnをクリックしたとき
targetBtn.onclick = function(){
    num++;
    targetBtn.value =+ num;
    }