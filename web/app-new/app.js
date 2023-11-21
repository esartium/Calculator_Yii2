
const requestMonthURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/months/months'
const requestTonnagesURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/tonnages/tonnages'
const requestTypesURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/types/types'

const requestCalcURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/api/calculate-price'

function sendGetRequest(method, url) {
    return fetch(url).then(response => {
        return response.json()
    })
}

sendGetRequest('GET', requestMonthURL)
.then(data => {
    months = data
    console.log(months)
})
.catch(err => console.log(err))

sendGetRequest('GET', requestTonnagesURL)
.then(data => console.log(data))
.catch(err => console.log(err))

sendGetRequest('GET', requestTypesURL)
.then(data => console.log(data))
.catch(err => console.log(err))

let chooseType = null;
let chooseMonth = null;
let chooseTonnage = null;

let body = {
    tonnage: '',
    raw_types: '',
    month: ''
}

function getTonnage(event) {
    chooseTonnage = event.target.innerHTML;
    console.log(chooseTonnage);
    body.tonnage = chooseTonnage
}

function getType(event) {
    chooseType = event.target.innerHTML;
    console.log(chooseType);
    body.raw_types = chooseType
    }

function getMonth(event) {
    chooseMonth = event.target.innerHTML;
    console.log(chooseMonth);
    body.month = chooseMonth
}

const headers = {
    'Content-type': 'application/json'
}

function sendCalcRequestF(method, url, body) {
    return fetch(url, {
        method: method,
        body: JSON.stringify(body),
        headers: headers
    }).then(response => {
        return response.json()
    })
}

const body2 = {
    tonnage: 25,
    raw_types: "шрот",
    month: "январь"
}

sendCalcRequestF('POST', requestCalcURL, body2)
                .then(data => console.log(data))
                .catch(err => console.log(err))

                function echo() {
                    console.log("body", body)
                    console.log("JSON.stringify(body)", JSON.stringify(body))
                    console.log("body2", body2)
                    console.log("JSON.stringify(body2)", JSON.stringify(body2))
                }
                












