


var ctx = document.getElementById('ex_chart');

var data = {
    labels: ["2", "4", "6", "8", "10", "12", "14", "16", "18", "20", "22", "24", "26", "28", "30"],
    datasets: [{
        // label: '得点',
        data: [880, 740, 900, 520, 930],
        backgroundColor: 'rgba(255, 100, 100, 1)'
    }]
};

var options = {
    responsive: true, 
    // legend: {
    //     display: true,
    // }
    // title: {                           //タイトル設定
    //     display: true,                 //表示設定
    //     fontSize: 18,                  //フォントサイズ
    //     text: 'タイトル'                //ラベル
    // },
    scales: {                          //軸設定
        yAxes: [{                      //y軸設定
            display: true,             //表示設定
            scaleLabel: {              //軸ラベル設定
               display: true,          //表示設定
               labelString: '縦軸ラベル',  //ラベル
               fontSize: 18               //フォントサイズ
            },
            ticks: {                      //最大値最小値設定
                min: 0,                   //最小値
                max: 30,                  //最大値
                fontSize: 18,             //フォントサイズ
                stepSize: 5               //軸間隔
            },
        }],
    }



    // scales: {
    //     yAxes: [{
    //         ticks: {
    //             min: 300
    //         }
    //     }]
    // }
};

var ex_chart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});