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
        show4: false,
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
    
   }
   
}).mount('#appone')