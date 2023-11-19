Vue.createApp({
    data: () => ({
        
        types: [
            'шрот',
            'жмых',
            'соя'
        ],
        months: [
            'январь',
            'февраль',
            'август',
            'сентябрь',
            'октябрь',
            'ноябрь'
        ],
        tonnages: [
            25,
            50,
            75,
            100
        ],

        show1: false,
        show2: false,
        show3: false,
        // // chooseType: '',
        // chooseMonth: '',
        // chooseTonnage: '',

        // headers: {
        //     'Content-type': 'application/json'
        // },
        // body: {
        //     tonnage: this.chooseTonnage,
        //     raw_types: this.chooseType,
        //     month: this.chooseMonth
        // },
        // requestCalcURL: 'http://localhost:8888/latest_dz_web/calculator-yii2/web/api/calculate-price'

   }),
   methods: {

    // getType(event) {
    //     this.chooseType = event.target.innerHTML;
    //     console.log(this.chooseType);
    // },
    // getMonth(event) {
    //     this.chooseMonth = event.target.innerHTML;
    //     console.log(this.chooseMonth);
    // },
    // getTonnage(event) {
    //     this.chooseTonnage = event.target.innerHTML;
    //     console.log(this.chooseTonnage);
    // },

    // calc(event) {
    //     console.log(this.chooseMonth, this.chooseTonnage, this.chooseType)
    // },


    
    
    // sendCalcRequestF(method, url, body) {
    //     return fetch(url, {
    //         method: method,
    //         body: JSON.stringify(body),
    //         headers: this.headers
    //     }).then(response => {
    //         return response.json()
    //     })
    // }
    
    
    // сделать тут функцию, которая делает переменную regAuthTitle равной 
    // либо "регистрация", либо "вход"
   }
   
}).mount('#appone')