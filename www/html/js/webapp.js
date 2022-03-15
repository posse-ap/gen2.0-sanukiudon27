const buttonOpen = document.getElementById("modal_open");
const buttonOpenResponsive = document.getElementById("modal_open_responsive");
const modal = document.getElementById("easy_modal");
const buttonClose = document.getElementById("modal_close");
const black_change = document.getElementById("black_change");
const loading_button = document.getElementById("loading_button");
const spinner = document.getElementById('my-spinner');
const completeClose = document.getElementById('complete_close');
const completeOpen = document.getElementById('complete_open');
const twitterCheck = document.getElementById('twitter_check');
const twitterCheckFontAwesome = document.getElementById('twitter_check_i');

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
    completeOpen.style.display = 'none';
};


// loading

// loading_button.addEventListener('click', loading_start)
// function loading_start() {
//     spinner.style.display = 'block';
//     window.setTimeout(function () {
//         completeOpen.style.display = 'block';
//         spinner.style.display = 'none'
//     }, 300);
// }


// completeのバツ印が押されたとき
completeClose.addEventListener('click', completeContainerClose)
function completeContainerClose() {
    completeOpen.style.display = 'none';
}


// var notr = 0;
// var rpt = document.getElementById("repeat-images");
// var dftr = rpt.getAttribute("src");
// function repeater(){
// notr++;
// if(notr % 2 !== 0)
// rpt.setAttribute("src", rpt.dataset.secondImage);
// else
// rpt.setAttribute("src", dftr);
// }

// var not = 0;
// function counter(){
// not++;
// document.twitterCheckFontAwesome.innerHTML = not;
// }

// console.log(not);


// 自動更新のボタンを青くする
twitterCheck.addEventListener('click', blue_change)
function blue_change() {
    twitterCheckFontAwesome.classList.toggle('blue')

}

// const cvs = document.getElementById('myBarChart');
// cvs.setAttribute("width", 500);
// cvs.setAttribute("height", 50);



// ずっと止まってたやつ
// if (twitterCheck.checked) {
//     loading_button.addEventListener('click', function (event) {
//         event.preventDefault();
//         var left = Math.round(window.screen.width / 2 - 275);
//         var top = (window.screen.height > 420) ? Math.round(window.screen.height / 2 - 210) : 0;
//         window.open(
//             "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.getElementById("content").value),
//             null,
//             "scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,left=" + left + ",top=" + top);
//     });
// } else {
//     loading_button.addEventListener('click', loading_start)
//     function loading_start() {
//         spinner.style.display = 'block';
//         window.setTimeout(function () {
//             completeOpen.style.display = 'block';
//             spinner.style.display = 'none'
//         }, 300);
//     }
// }


// // var targetBtn = document.getElementById("cde");
// // targetBtnの値を取得
// var num = 0;
// // targetBtnをクリックしたとき
// twitterCheckFontAwesome.onclick = function(){
//     num++;
//     // twitterCheck.value =+ num;
//     }
// console.log(num);




// 遷移できたやつ
// loading_button.off('click');
loading_button.addEventListener('click', function (e) {
    if (twitterCheck.checked) {
        e.preventDefault();
        var left = Math.round(window.screen.width / 2 - 275);
        var top = (window.screen.height > 420) ? Math.round(window.screen.height / 2 - 210) : 0;
        window.open(
            "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.getElementById("content").value),
            null,
            // "scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,left=" + left + ",top=" + top);
        )
    } else {
        loading_button.addEventListener('click', loading_start)
        function loading_start() {
            spinner.style.display = 'block';
            // modal.classList.add('black_background');
            window.setTimeout(function () {
                completeOpen.style.display = 'block';
                spinner.style.display = 'none'
            }, 3000);

            // modalの方も暗くする
            // modal.classList.add("black_background");
        }
    }
})


// カレンダー
flatpickr('#js-datepicker');

// $("#order_jq").before("<div class='learn_hour'>",
// "<p class='title'>学習時間</p>",
// "<input type='text' class='little_gray learn_hour_input'>",
// "</div>"
// );

// 線グラフ
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [, 2, , 4, , 6, , 8, , 10, , 12, , 14, , 16, , 18, , 20, , 22, , 24, , 26, , 28, , 30,],
        datasets: [
            {
                label: '勉強時間',
                data: [
                    // for文で30日分回すイメージ
                    // そのために３月１日を描画させる
                    
                    3, 4, 4, 3, 0, 0, 4, 2, 2, 8, 8, 2, 2, 1, 7, 4, 4, 3, 3, 3, 2, 2, 6, 2, 2, 1, 1, 1, 7, 8
                ],
                backgroundColor: "#76cff3"
            }
        ]
    },
    options: {
        legend: {
            display: false
        },
        // title: {
        //     display: true,
        //     text: '支店別 来客数'
        // },
        scales: {
            xAxes: [{
                gridLines: {
                    display: false
                },
                ticks: {
                    maxRotation: 0, // 自動的に回転する角度を固定
                    minRotation: 0,
                }
            }],
            yAxes: [{
                gridLines: {
                    display: false
                },
                ticks: {
                    suggestedMax: 8,
                    suggestedMin: 0,
                    stepSize: 2,
                    callback: function (value, index, values) {
                        return value + 'h'
                    }
                }
            }]
        },
        maintainAspectRatio: false,
    }
});

// 円グラフ

// var ctx = document.getElementById("myPieChart");
// var myPieChart = new Chart(ctx, {
//   type: 'pie',
//   data: {
//     labels: ["Javascript","CSS","PHP","HTML","Lalavel","SQL","SHELL","情報システム基礎（その他）"],
//     datasets: [{
//         backgroundColor: [
//             "#BB5179",
//             "#FAFF67",
//             "#58A27C",
//             "#3C00FF"
//         ],
//         data: [42, 18, 10, 9, 8, 6, 4, 3]
//     }]
//   },
//   options: {
//     title: {
//       display: true,
//       text: '血液型 割合'
//     }
//   }
// });


//   var ctx = document.getElementById("myPieChart");
//   var myDoughnutChart= new Chart(ctx, {
//     type: 'doughnut',
//     data: {
//       labels: ["Javascript", "CSS", "PHP", "HTML", "Lalavel", "SQL", "SHELL", "情報システム基礎（その他）"], //データ項目のラベル
//       datasets: [{
//           backgroundColor: [
//               "#c97586",
//               "#bbbcde",
//               "#93b881",
//               "#93b881",
//               "#93b881",
//               "#93b881",
//               "#93b881",
//               "#e6b422"
//           ],
//           data: [42, 18, 10, 9, 8, 6, 4, 3] //グラフのデータ
//       }]
//     },
//     options: {
//       title: {
//         display: true,
//         //グラフタイトル
//         text: '新法案賛否'
//       }
//     }
//   });

var dataLabelPlugin = {
    afterDatasetsDraw: function (chart, easing) {
        // To only draw at the end of animation, check for easing === 1
        var ctx = chart.ctx;

        chart.data.datasets.forEach(function (dataset, i) {
            var dataSum = 0;
            dataset.data.forEach(function (element) {
                dataSum += element;
            });

            var meta = chart.getDatasetMeta(i);
            if (!meta.hidden) {
                meta.data.forEach(function (element, index) {
                    // Draw the text in black, with the specified font
                    ctx.fillStyle = 'rgb(255, 255, 255)';

                    var fontSize = 12;
                    var fontStyle = 'normal';
                    var fontFamily = 'Helvetica Neue';
                    ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

                    // Just naively convert to string for now
                    var labelString = chart.data.labels[index];
                    var dataString = (Math.round(dataset.data[index] / dataSum * 1000) / 10).toString() + "%";

                    // Make sure alignment settings are correct
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';

                    var padding = 5;
                    var position = element.tooltipPosition();
                    // ctx.fillText(labelString, position.x, position.y - (fontSize / 2) - padding);
                    ctx.fillText(dataString, position.x, position.y + (fontSize / 2) - padding);
                });
            }
        });
    }
};




var ctx = document.getElementById("myPieChart");
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Javascript", "CSS", "PHP", "HTML", "Laravel", "SQL", "SHELL", "情報システム基礎知識（その他）"], //データ項目のラベル
        datasets: [{
            backgroundColor: [
                "#0345ec",
                "#0f71bd",
                "#20bdde",
                "#4bd1fe",
                "#b29ef3",
                "#6d46ec",
                "#4a17ef",
                "#3105c0"
            ],
            data: [42, 18, 10, 9, 8, 5, 4, 4] //グラフのデータ
        }],
    },
    // options: {
    //     pieceLabel: {
    //         render: 'percentage',
    //         position: 'default',
    //         fontColor: '#3105c0',
    //         fontSize: 13
    //     },
    //     maintainAspectRatio: false

    // },
    options: {
        legend: {             // 凡例の設定
            position: "bottom",    // 表示位置
            labels: {              // 凡例文字列の設定
                fontSize: 14,
                boxWidth: 12,
            },
            // 凡例非表示にする（widthを設定するため）
            display: false 
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 50
            }
        },
        // 小画面でも小さくなりすぎない
        maintainAspectRatio: false,

        responsive: true
    },
    plugins: [dataLabelPlugin],


});

var ctx = document.getElementById("myPieChartLang");
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["ドットインストール", "N予備校", "POSSE課題"], //データ項目のラベル
        datasets: [{
            backgroundColor: [
                "#0345ec",
                "#0f71bd",
                "#20bdde",

            ],
            data: [42, 33, 25] //グラフのデータ
        }]
    },
    options: {
        //   title: {
        //     display: true,
        //     //グラフタイトル
        //     text: '学習コンテンツ'
        //   }
    },
    options: {
        legend: {             // 凡例の設定
            position: "bottom",     // 表示位置
            align: "start",
            //    fullwidth: 50,
            labels: {              // 凡例文字列の設定
                fontSize: 14,
                boxWidth: 12,
            },
            display: false
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 120
            }
        },
        maintainAspectRatio: false,
    },
    plugins: [dataLabelPlugin],
});



// twitter遷移

// document.getElementById("loading_button").addEventListener('click', function (event) {
//     event.preventDefault();
//     var left = Math.round(window.screen.width / 2 - 275);
//     var top = (window.screen.height > 420) ? Math.round(window.screen.height / 2 - 210) : 0;
//     window.open(
//         "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.getElementById("content").value),
//         null,
//         "scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,left=" + left + ",top=" + top);
// });


// // loading_button.on(function () {
//     if (twitterCheck.checked) {
//         //open-bodyが非表示の場合
//         console.log('緑')
//     } else {
//         //open-bodyが表示中の場合
//         console.log('橙')
//     }
