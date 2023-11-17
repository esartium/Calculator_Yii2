// Vue.createApp({
//     data: () => ({
//        requestMonthURL: 'http://localhost:8888/latest_dz_web/calculator-yii2/web/months/months'
//    }),
//    methods: {
    // сделать тут функцию, которая делает переменную regAuthTitle равной 
    // либо "регистрация", либо "вход"
    
    
//    }
   
// }).mount('#app')

const requestMonthURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/months/months'
const requestTonnagesURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/tonnages/tonnages'
const requestTypesURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/types/types'

const requestCalcURL = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/api/calculate-price'

// function sendMonthsRequest(method, url) {
    
// return new Promise( (resolve, reject) => {
//     const xhrMonths = new XMLHttpRequest()
    
//     xhrMonths.open(method, url)
    
//     xhrMonths.onload = () => {
//         if (xhrMonths.status >= 400) {
//             reject(xhrMonths.response)
//         }
//         resolve(JSON.parse(xhrMonths.response))
//     }

//     xhrMonths.onerror = () => {
//         reject('лох')
//     }
    
//     xhrMonths.send()
// })
// }

// function sendTonnagesRequest(method, url) {
//     return new Promise( (resolve, reject) => {
//     const xhrTonnages = new XMLHttpRequest()

//     xhrTonnages.open(method, url)

//     xhrTonnages.onload = () => {
//         if (xhrTonnages.status >= 400) {
//             reject(xhrTonnages.response)
//         }
//         resolve(JSON.parse(xhrTonnages.response))
//     }

//     xhrTonnages.onerror = () => {
//         reject('лох')
//     }

//     xhrTonnages.send()
// })
// }

// function sendTypesRequest(method, url) {
//     return new Promise( (resolve, reject) => {
//     const xhrTypes = new XMLHttpRequest()

//     xhrTypes.open(method, url)

//     xhrTypes.onload = () => {
//         if (xhrTypes.status >= 400) {
//             reject(xhrTypes.response)
//         }
//         resolve(JSON.parse(xhrTypes.response))
//     }

//     xhrTypes.onerror = () => {
//         reject('лох')
//     }

//     xhrTypes.send()
// })
// }

// function sendCalcRequest(method, url, body) {
//     return new Promise( (resolve, reject) => {
//         const xhrCalc = new XMLHttpRequest()
        
//         xhrCalc.open(method, url)

//         xhrCalc.responseType = 'json'
//         xhrCalc.setRequestHeader('Content-Type','application/json')
        
//         xhrCalc.onload = () => {
//             if (xhrCalc.status >= 400) {
//                 reject(xhrCalc.response)
//             }
//             resolve(JSON.stringify(xhrCalc.response))
//         }
    
//         xhrCalc.onerror = () => {
//             reject('лох')
//         }
        
//         xhrCalc.send(JSON.stringify(body))
//     })
// }

// sendMonthsRequest('GET', requestMonthURL)
// .then(data => console.log(data))
// .catch(err => console.log(err))

// sendTonnagesRequest('GET', requestTonnagesURL)
// .then(data => console.log(data))
// .catch(err => console.log(err))

// sendTypesRequest('GET', requestTypesURL)
// .then(data => console.log(data))
// .catch(err => console.log(err))

// sendCalcRequest('POST', requestCalcURL, body)
// .then(data => console.log(data))
// .catch(err => console.log(err))

// fetch:

function sendMonthsRequestF(method, url) {
    return fetch(url).then(response => {
        return response.json()
    })
}

function sendGetRequest(method, url) {
    return fetch(url).then(response => {
        return response.json()
    })
}

sendGetRequest('GET', requestMonthURL)
.then(data => console.log(data))
.catch(err => console.log(err))

sendGetRequest('GET', requestTonnagesURL)
.then(data => console.log(data))
.catch(err => console.log(err))

sendGetRequest('GET', requestTypesURL)
.then(data => console.log(data))
.catch(err => console.log(err))

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

const body = {
    tonnage: 25,
    raw_types: "шрот",
    month: "январь"
}

sendCalcRequestF('POST', requestCalcURL, body)
.then(data => console.log(data))
.catch(err => console.log(err))
