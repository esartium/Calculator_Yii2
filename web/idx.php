<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link type="image/x-icon" href="/favicon.ico" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin></script>

    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body id="bodynew">
    <div class="container-fluid"> 
    <div class="row">
        <div class="col-md-12">
            
        </div>
    </div>
</div>

    <div class="container-fluid"> 
    <div class="row">
        <div class="col-md-12">
    <div class="container" id="app">

        <div id="appone">
            <h1 id="title">калькулятор расчёта стоимости доставки</h1>

            <div class="selector" id="selector_one">
                <div>
                    <transition name="tr" mode="out-in"> 
                        <span v-if="!show1" @click="show1 = !show1" key="raw_type" class="s">тип сырья</span>
                        <span v-else @click="show1 = !show1" key="select_raw_type" class="s">выберите тип сырья:</span>
                    </transition>
                    <transition name="tr">
                        <ul class="ul_selector" v-if="show1" id="rawTypeUl">
                            <li class="li_selector" onclick="getType(event)" v-for="i in types" > {{ i }} </li>
                        </ul>
                    </transition>
                    </div>
            </div>

            <div class="selector" id="selector_two">
                <div>
                    <transition name="tr" mode="out-in"> 
                        <span v-if="!show2" @click="show2 = !show2" key="raw_type" class="s">месяц</span>
                        <span v-else @click="show2 = !show2" key="select_raw_type" class="s">выберите месяц:</span>
                    </transition>
                    <transition name="tr">
                        <ul class="ul_selector" v-if="show2">
                            <li class="li_selector" onclick="getMonth(event)" v-for="j in months"> {{ j }} </li>
                        </ul>
                    </transition>
                    </div>
            </div>

            <div class="selector" id="selector_sri">
                <div>
                    <transition name="tr" mode="out-in"> 
                        <span v-if="!show3" @click="show3 = !show3" key="raw_type" class="s">тоннаж</span>
                        <span v-else @click="show3 = !show3" key="select_raw_type" class="s">выберите тоннаж:</span>
                    </transition>
                    <transition name="tr">
                        <ul class="ul_selector" v-if="show3">
                            <li class="li_selector" onclick="getTonnage(event)" v-for="k in tonnages"> {{ k }} </li>
                        </ul>
                    </transition>
                    </div>
            </div>
        
            <div id="button">
                <button class="btn" id="butres"
                onclick="
                req()
                "
                >
                рассчитать
            </button>
            </div>

            <div id="params"> 
                <br><span id="params1"></span>
                <br><span id="params2"></span>
                <br><span id="params3"></span>

            </div>

            <div id="res">
            </div>

            <!-- <div id="resPrList">
                <transition name="pr_list" mode="out-in"> 
                    <span v-if="!show4" @click="show4 = !show4" key="price_list" onclick="show(chooseType)" class="s">развернуть прайс-лист</span>
                    <span v-else @click="show4 = !show4" key="show_price_list" class="s">свернуть прайс-лист</span>
                </transition>
                <transition name="tr">
                    <div v-if="show4">
                        <div id="shrot">
                            <table border="2"> 
                                <thead>
                                    <tr> 
                                        <th> ↓тоннаж/месяц→ </th>
                                        <th> январь</th>
                                        <th> февраль </th>
                                        <th> август </th>
                                        <th> сентябрь </th>
                                        <th> октябрь </th>
                                        <th> ноябрь </th>
                                    </tr>
                                </thead>
                                        <tbody> 
                                          <tr>
                                        <th> 25 </th>
                                        <td> 125 </td>
                                        <td> 121 </td>
                                        <td> 137 </td>
                                        <td> 126 </td>
                                        <td> 124 </td>
                                        <td> 128 </td>
                                          </tr>
                                                <tr>
                                                <th> 50 </th>
                                                <td> 145 </td>
                                                <td> 118 </td>
                                                <td> 119 </td>
                                                <td> 121 </td>
                                                <td> 122 </td>
                                                <td> 147 </td>
                                                </tr>
                                                        <tr>
                                                        <th> 75 </th>
                                                        <td> 136 </td>
                                                        <td> 137 </td>
                                                        <td> 141 </td>
                                                        <td> 137 </td>
                                                        <td> 131 </td>
                                                        <td> 143 </td>
                                                        </tr>
                                                                <tr>
                                                                <th> 100 </th>
                                                                <td> 138 </td>
                                                                <td> 142 </td>
                                                                <td> 117 </td>
                                                                <td> 124 </td>
                                                                <td> 147</td>
                                                                <td> 112 </td>
                                                                </tr>
                                        </tbody>
                            </table>
                        </div>
                        <div id="zhmih">
                            <table border="2">
                                <thead>
                                    <tr> 
                                        <th> ↓тоннаж/месяц→ </th>
                                        <th> январь</th>
                                        <th> февраль </th>
                                        <th> август </th>
                                        <th> сентябрь </th>
                                        <th> октябрь </th>
                                        <th> ноябрь </th>
                                    </tr>
                                </thead>
                                        <tbody> 
                                          <tr>
                                        <th> 25 </th>
                                        <td> 121 </td>
                                        <td> 137 </td>
                                        <td> 124 </td>
                                        <td> 137 </td>
                                        <td> 122 </td>
                                        <td> 125 </td>
                                          </tr>
                                          <tr>
                                            <th> 50 </th>
                                            <td> 118 </td>
                                            <td> 121 </td>
                                            <td> 145 </td>
                                            <td> 147 </td>
                                            <td> 143 </td>
                                            <td> 145 </td>
                                            </tr>
                                                    <tr>
                                                    <th> 75 </th>
                                                    <td> 137 </td>
                                                    <td> 124 </td>
                                                    <td> 136 </td>
                                                    <td> 143 </td>
                                                    <td> 112 </td>
                                                    <td> 136 </td>
                                                    </tr>
                                                            <tr>
                                                            <th> 100 </th>
                                                            <td> 142 </td>
                                                            <td> 131 </td>
                                                            <td> 138 </td>
                                                            <td> 112 </td>
                                                            <td> 117 </td>
                                                            <td> 138 </td>
                                                            </tr>
                                        </tbody>
                            </table>
                        </div>
                        <div id="soya">
                            <table border="2">
                                <thead>
                                    <tr> 
                                        <th> ↓тоннаж/месяц→ </th>
                                        <th> январь</th>
                                        <th> февраль </th>
                                        <th> август </th>
                                        <th> сентябрь </th>
                                        <th> октябрь </th>
                                        <th> ноябрь </th>
                                    </tr>
                                </thead>
                                        <tbody> 
                                          <tr>
                                        <th> 25 </th>
                                        <td> 137 </td>
                                        <td> 125 </td>
                                        <td> 124 </td>
                                        <td> 122 </td>
                                        <td> 137 </td>
                                        <td> 121 </td>
                                          </tr>
                                          <tr>
                                            <th> 50 </th>
                                            <td> 147 </td>
                                            <td> 145 </td>
                                            <td> 145 </td>
                                            <td> 143</td>
                                            <td> 119 </td>
                                            <td> 118 </td>
                                            </tr>
                                                    <tr>
                                                    <th> 75 </th>
                                                    <td> 112 </td>
                                                    <td> 136 </td>
                                                    <td> 136 </td>
                                                    <td> 112 </td>
                                                    <td> 141 </td>
                                                    <td> 137 </td>
                                                    </tr>
                                                            <tr>
                                                            <th> 100 </th>
                                                            <td> 122 </td>
                                                            <td> 138 </td>
                                                            <td> 138 </td>
                                                            <td> 117 </td>
                                                            <td> 117 </td>
                                                            <td> 142 </td>
                                                            </tr>
                                        </tbody>
                            </table>
                        </div>
                    </div>
                </transition>
            </div> -->

        </div>
        
    </div> 
</div>
    
   </div></div>
   
    <div id="php2"><?php
    echo Yii::$app->user->identity->username 
    ?></div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
    <script src="../app-new/selector.js"></script>
    <script src="../app-new/app.js"></script>
</body>
</html>