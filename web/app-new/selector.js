Vue.createApp({
    data: () => ({
        
        types: [], 
        months: [],
        tonnages: [],

        show1: false,
        show2: false,
        show3: false,
        show4: false,

        requestMonthURL: 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/months/months',
        requestTonnagesURL: 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/tonnages/tonnages',
        requestTypesURL: 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/types/types',
        requestCalcURL: 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/api/calculate-price',
        headers: {
            "Content-Type": "application/json"
        },

        errors: [],

        chooseType: '',
        chooseMonth: '',
        chooseTonnage: '',

        body: {
            tonnage: '',
            raw_types: '',
            month: ''
        },

        priceRes: '',
        priceList: '',
        div: document.getElementById('res'),
        divPrice: document.getElementById('resPrList'),

// document.getElementById('resPrList').style.opacity = 0;

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
    async getDataForSelector () {
        try {
            const responseMonths = await fetch(this.requestMonthURL);
            const resultMonths = await responseMonths.json();
            this.months.push(...resultMonths); // ... - с помощью троеточия мы распарсили json-ответ
            console.log("месяцы:", this.months);
        
            const responseTypes = await fetch(this.requestTypesURL);
            const resultTypes = await responseTypes.json();
            this.types.push(...resultTypes); 
            console.log("типы сырья:", this.types);
        
            const responseTonnages = await fetch(this.requestTonnagesURL);
            const resultTonnages = await responseTonnages.json();
            this.tonnages.push(...resultTonnages); 
            console.log("тоннажи:", this.tonnages);
            } catch(error) {
                this.errors.push(error);
                console.log("не удалось получить данные с сервера");
            }
    },

    getTonnage(event) {
        chooseTonnage = Number(event.target.innerHTML);
        console.log("Выбранный тоннаж:", chooseTonnage);
        document.getElementById('params1').innerHTML = 'выбранный тоннаж: ' + chooseTonnage;
    },
    
    getType(event) {
        chooseType = event.target.innerHTML;
        console.log("Выбранный тип сырья:", chooseType);
        document.getElementById('params2').innerHTML = 'выбранный тип сырья: ' + chooseType;
        },
    
    getMonth(event) {
        chooseMonth = event.target.innerHTML;
        console.log("Выбранный месяц:", chooseMonth);
        document.getElementById('params3').innerHTML = 'выбранный месяц: ' + chooseMonth;
    },

    async sendCalcRequestF(body) {
        const responseCalc = await fetch(this.requestCalcURL, {
            method: 'POST',
            body: JSON.stringify(body),
            headers: this.headers
        })
        return await responseCalc.json()
        },

    async sendCalcRequest() {
            this.sendCalcRequestF({
                tonnage: this.chooseTonnage,
                raw_types: this.chooseType,
                month: this.chooseMonth
            })
            .then(data => {
                this.priceRes = Number(data.price);
                this.priceList = data.price_list;
                console.log(data);
                this.div.innerHTML = 'Стоимость доставки: ' + this.priceRes;
                
                fetch(
                    "../../views/site/a.php", {
                        "method": "POST",
                        "headers": {
                            "Content-Type": "application/json"
                        },
                        "body": JSON.stringify({
                            username: 'username',
                            tonnage: this.chooseTonnage,
                            raw_types: this.chooseType,
                            month: this.chooseMonth,
                            price:this. priceRes,
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
    
   },
   async mounted() { 
    this.getDataForSelector();
   },
   
}).mount('#appone')