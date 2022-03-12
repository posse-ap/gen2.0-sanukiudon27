<?php
include('./dbconnect.php');




?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app作</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="./css/webapp.css">
</head>

<body class="body">
    <div id="body_default_id" class="body_default_class">
        <header class="header">
            <div class="header_left">
                <img src="../img/posseLogo.png" class="logo" alt="">
                <p class="header_4th_week">4th week</p>
            </div>
            <div class="button_container resposive_none_button">
                <button class="button" id="modal_open">記録・投稿</button>
            </div>
        </header>
        <main class="main">
            <div class="main_left">
                <div class="hour_cal">
                    <div class="today three_container shadow">
                        <p class="date">Today</p>
                        <p class="number">3</p>
                        <p class="hour">hour</p>
                    </div>
                    <div class="month three_container shadow">
                        <p class="date">Month</p>
                        <p class="number">120</p>
                        <p class="hour">hour</p>
                    </div>
                    <div class="total three_container shadow">
                        <p class="date">Total</p>
                        <p class="number">1348</p>
                        <p class="hour">hour</p>
                    </div>
                </div>
                <div class="line_graph shadow">
                    <!-- <img src="../img/折れ線グラフ.png" alt=""> -->
                    <canvas id="myBarChart">
                    </canvas>
                </div>
            </div>
            <div class="main_right">
                <div class="pie_chart_lng shadow">
                    <!-- <img src="../img/円グラフ　学習言語.png" alt=""> -->
                    <!-- <div> -->
                        <p class='pie_graph_title'>学習言語</p>
                        <div class="pie_chart_canvas_container">
                            <canvas id="myPieChart"></canvas>
                        </div>
                    <!-- </div> -->
                    <div class="legend">
                        <div>
                            <span class="legend_js a"></span>
                            <p>JavaScript</p>
                        </div>
                        <div>
                            <span class="legend_css a"></span>
                            <p>CSS</p>
                        </div>
                        <div>
                            <span class="legend_php a"></span>
                            <p>PHP</p>
                        </div>
                        <div>
                            <span class="legend_html a"></span>
                            <p>HTML</p>
                        </div>
                        <div>
                            <span class="legend_laravel a"></span>
                            <p>Laravel</p>
                        </div>
                        <div>
                            <span class="legend_sql a"></span>
                            <p>SQL</p>
                        </div>
                        <div>
                            <span class="legend_shell a"></span>
                            <p>SHELL</p>
                        </div>
                        <div>
                            <span class="legend_other a"></span>
                            <p>情報システム基礎知識（その他）</p>
                        </div>

                    </div>
                </div>
                <div class="pie_chart_content shadow">
                    <!-- <img src="../img/円グラフ　コンテンツ.png" alt=""> -->
                    <p class='pie_graph_title'>学習コンテンツ</p>
                    <div class="pie_chart_canvas_container">
                        <canvas id="myPieChartLang"></canvas>
                    </div>
                    <div class="legend_second">
                        <div>
                            <span class="legend_dot a"></span>
                            <p>ドットインストール</p>
                        </div>
                        <div>
                            <span class="legend_N a"></span>
                            <p>N予備校</p>
                        </div>
                        <div>
                            <span class="legend_posse a"></span>
                            <p>POSSE課題</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="fotter_container">
                <!-- <i class="fa-solid fa-angle-left"></i> -->
                <i class="fas fa-angle-left"></i>
                <p class="footer_date">2020年10月</p>
                <i class="fas fa-angle-right"></i>
                <!-- <i class="fas fa-times"></i> -->
            </div>
            <div class="button_container">
                <button class="button default_none_button" id="modal_open_responsive">記録・投稿</button>
            </div>
        </footer>
        <div id="black_change"></div>
    </div>
    <div class="body_modal" id="easy_modal">
        <header class="header_modal">
            <i class="fas fa-times little_gray" id="modal_close"></i>
        </header>
        <div class="main_modal">
            <div class="main_left_area">
                <div class="learn_date ">
                    <p class="title">学習日</p>
                    <input type="text" id="js-datepicker" class="little_gray learn_date_input">
                </div>
                <div class="learn_content_multiple">
                    <p class="title">学習コンテンツ（複数選択可)</p>
                    <div>
                        <div class="flex_i little_gray">
                            <i class="fas fa-check"></i>
                            <p>N予備校</p>
                        </div>
                        <div class="flex_i little_gray">
                            <i class="fas fa-check"></i>
                            <p>ドットインストール</p>
                        </div>
                        <div class="flex_i little_gray">
                            <i class="fas fa-check"></i>
                            <p>POSSE課題</p>
                        </div>
                    </div>
                </div>

                <div class="learn_lang_multiple">
                    <p class="title">学習言語（複数選択可）</p>
                    <div>
                        <div class="flex_i little_gray">
                            <i class="fas fa-check"></i>
                            <p>HTML</p>
                        </div>
                        <div class="flex_i little_gray">
                            <i class="fas fa-check"></i>
                            <p>CSS</p>
                        </div>
                        <div class="flex_i little_gray">
                            <i class="fas fa-check"></i>
                            <p>Javascript</p>
                        </div>
                        <div class="flex_i little_gray">
                            <i class="fas fa-check"></i>
                            <p>PHP</p>
                        </div>
                        <div class="flex_i little_gray">
                            <i class="fas fa-check"></i>
                            <p>Laravel</p>
                        </div>
                        <div class="flex_i little_gray">
                            <i class="fas fa-check"></i>
                            <p>SQL</p>
                        </div>
                        <div class="flex_i  little_gray">
                            <i class="fas fa-check"></i>
                            <p>SHELL</p>
                        </div>
                        <div class="flex_i  little_gray">
                            <i class="fas fa-check"></i>
                            <p>情報システム基礎知識（その他）</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_right_area">
                <div class="learn_hour">
                    <div>
                        <p class="title">学習時間</p>
                        <input type="text" class="little_gray learn_hour_input">
                    </div>
                    <div class="twitter_area" id="order_jq">
                        <p class="title">Twitter用コメント</p>
                        <div>
                            <textarea name="textarea" class="textarea  little_gray" 　 id="content" cols="30"
                                rows="10"></textarea>
                        </div>
                        <div class="twitter_post">
                            <!-- <label> <i class="fas fa-check fa-another-check" id="twitter_check"></i> -->
                            <label class="label">
                                <span class="fas fa-check fa-another-check" id="twitter_check_i">
                                    <input type="checkbox" name="check" class='input_none' id="twitter_check">
                                </span>
                                <p>Twitterに自動投稿する</p>
                            </label>
                            <!-- <button  class="btn" style="background-color:#00aced; color:white;"
                                type="button"><i class="fab fa-twitter"></i> Tweet</button> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="button_container">
                <button class="button_modal" id="loading_button">記録・投稿</button>
            </div>
        </footer>

    </div>
    <div id="my-spinner" class="box_loading">
        <!-- type1 〜 type8 はお好みで -->
        <div class="spinner type1">
            <span>Loading...</span>
        </div>

    </div>
    <div class="complete_container" id='complete_open'>
        <div class="complete_container_fa-times-div">
            <i class="fas fa-times little_gray" id="complete_close"></i>
        </div>
        <div class="complete_container_main_div">
            <p class="awesome">AWESOME!</p>
            <i class="fas fa-check fa-another-check"></i>
            <p class="complete_letter">記録・投稿<br>完了しました</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- プラグインを読みこんでパーセント表示できるようになった -->
    <!-- <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <script src="./js/webapp.js"></script>
</body>




</html>