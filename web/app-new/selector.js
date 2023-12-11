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
        headers: {
            "Content-Type": "application/json"
        },

        errors: [],

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
    //
   },
   async mounted() { 
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
   
}).mount('#appone')