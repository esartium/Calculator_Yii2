
let username = document.getElementById('php2').innerHTML
function phpname() {
    console.log("username", username)
}

phpname()

// const requestMonthURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/months/months'
// const requestTonnagesURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/tonnages/tonnages'
// const requestTypesURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/types/types'

const requestCalcURL = 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/api/calculate-price'

// async function sendGetRequest(method, url) {
//     const response = await fetch(url)
//     return await response.json()
// }

// sendGetRequest('GET', requestMonthURL)
// .then(data => {
//     months = data
//     console.log(months)
// })
// .catch(err => console.log(err))

// sendGetRequest('GET', requestTonnagesURL)
// .then(data => console.log(data))
// .catch(err => console.log(err))

// sendGetRequest('GET', requestTypesURL)
// .then(data => console.log(data))
// .catch(err => console.log(err))

let chooseType;
let chooseMonth;
let chooseTonnage;

let body = {
    tonnage: '',
    raw_types: '',
    month: ''
}

function getTonnage(event) {
    chooseTonnage = Number(event.target.innerHTML);
    console.log(chooseTonnage);
    document.getElementById('params1').innerHTML = 'выбранный тоннаж: ' + chooseTonnage;
}

function getType(event) {
    chooseType = event.target.innerHTML;
    console.log(chooseType);
    document.getElementById('params2').innerHTML = 'выбранный тип сырья: ' + chooseType;
    }

function getMonth(event) {
    chooseMonth = event.target.innerHTML;
    console.log(chooseMonth);
    document.getElementById('params3').innerHTML = 'выбранный месяц: ' + chooseMonth;
}

const headers = {
    'Content-type': 'application/json'
}

// function sendCalcRequestF(method, url, body) {
//     return fetch(url, {
//         method: method,
//         body: body,
//         body: JSON.stringify(body),
//         headers: headers
//     }).then(response => {
//         return response.json()
//     })
//     }

    async function sendCalcRequestF(method, url, body) {
        const response = await fetch(url, {
            method: method,
            body: JSON.stringify(body),
            headers: headers
        })
        return await response.json()
        }

let bodyy = {
    tonnage: '',
    raw_types: '',
    month: '',
    price: ''
}

// const requestHistoryURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/adddd'
// async function sendHistoryRequest(method, url, bodyy) {
//     const response = await fetch(url, {
//         method: method,
//         bodyy: JSON.stringify(bodyy),
//         headers: headers
//     })
//     return await response.json()
// }

let priceRes;
let priceList;
let div = document.getElementById('res');
let divPrice = document.getElementById('resPrList')

document.getElementById('resPrList').style.opacity = 0;

// function show(chooseType) {
//     if (chooseType == 'шрот') {
//         document.getElementById('shrot').style.opacity = 1;
//         document.getElementById('zhmih').style.opacity = 0;
//         document.getElementById('soya').style.opacity = 0;
//     } else if (chooseType == 'жмых') {
//         document.getElementById('shrot').style.opacity = 0;
//         document.getElementById('zhmih').style.opacity = 1;
//         document.getElementById('zhmih').style.cssText = "margin-top: -150px";
//         document.getElementById('soya').style.opacity = 0;
//     } else if (chooseType == 'соя') {
//         document.getElementById('shrot').style.opacity = 0;
//         document.getElementById('zhmih').style.opacity = 0;
//         document.getElementById('soya').style.opacity = 1;
//         document.getElementById('soya').style.cssText = "margin-top: -300px";
//     }
    // }

function req() {
    if (chooseMonth == null || chooseTonnage == null || chooseType == null) {
        alert("заполните все поля")
    }

    sendCalcRequestF('POST', requestCalcURL, {
        tonnage: chooseTonnage,
        raw_types: chooseType,
        month: chooseMonth
    })
    .then(data => {
        priceRes = Number(data.price);
        priceList = data.price_list;
        console.log(data);
        div.innerHTML = 'Стоимость доставки: ' + priceRes;
        
        fetch(
            "../../views/site/a.php", {
                "method": "POST",
                "headers": {
                    "Content-Type": "application/json"
                },
                "body": JSON.stringify({
                    username: username,
                    tonnage: chooseTonnage,
                    raw_types: chooseType,
                    month: chooseMonth,
                    price: priceRes,
                })
            }
        ).then(function(response) {
            return response.text();
        }).then(function(data) {
            console.log(data);
        })
    })
    .catch(err => console.log(err))

    // vivod(chooseMonth, chooseTonnage, chooseType, priceRes)
    document.getElementById('resPrList').style.opacity = 1;
    show(chooseType)
}

function newwin(event) {

    window.location = "../../views/site/a.php"
}











