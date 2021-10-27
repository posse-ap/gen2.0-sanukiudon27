const buttonOpen = document.getElementById("modal_open");
const buttonOpenResponsive = document.getElementById("modal_open_responsive");
const modal = document.getElementById("easy_modal");
const buttonClose = document.getElementById("modal_close");
const black_change = document.getElementById("black_change");
const loading_button = document.getElementById("loading_button");
const spinner = document.getElementById('my-spinner');

//ボタンがクリックされた時
buttonOpen.addEventListener('click', modalOpen);
function modalOpen() {
　　modal.style.display = 'block';
black_change.classList.add("black_background");
};
// レスポンシブのボタン
buttonOpenResponsive.addEventListener('click', modalOpen);
function modalOpen() {
　　modal.style.display = 'block';
black_change.classList.add("black_background");
};


//バツ印がクリックされた時
buttonClose.addEventListener('click', modalClose);
function modalClose() {
　　modal.style.display = 'none';
black_change.classList.remove("black_background");
spinner.style.display = 'none';

};


// loading
loading_button.addEventListener('click', loading_start)
function loading_start(){
    spinner.style.display = 'block';
}

// カレンダー
flatpickr('#js-datepicker');








// $("#order_jq").before("<div class='learn_hour'>",
// "<p class='title'>学習時間</p>",
// "<input type='text' class='little_gray learn_hour_input'>",
// "</div>"
// );


 
