Vue.createApp({
    data: () => ({
        items: [
            'пункт1',
            'пункт2',
            'пункт3'
        ],
        userProfileOptions: [
            'профиль',
            'история расчётов',
            'выход'
        ],
        adminProfileOptions: [
            'профиль',
            'история расчётов(админ)',
            'пользователи',
            'выход'
        ],
        show: false,
        val: ''
   }),
   methods: {

    goToAuthPage(event) {
        window.location = '../../views/site/login.php'
    },
    getVal(event) {
        val = event.target.innerHTML;
        console.log(val);
        switch(val) {
            case 'профиль':
                window.location = 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/site/profile'
                break;
            case 'пользователи':
                window.location = 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/site/users-list'
                break;
            case 'выход':
                window.location = 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/site/logout'
                break;
            case 'история расчётов':
                window.location = 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/site/historyy'
                break;
            case 'войти в систему':
                window.location = 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/site/logout'
                break;
        }
    },
    getVal2(event) {
        val = event.target.innerHTML;
        console.log(val);
        
        switch(val) {
            case 'профиль':
                window.location = 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/site/profile'
                break;
            case 'пользователи':
                window.location = 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/site/users-list'
                break;
            case 'выход':
                window.location = 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/site/logout'
                break;
            case 'история расчётов(админ)':
                window.location = 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/site/history'
                break;
            case 'история расчётов':
                window.location = 'http://localhost:8888/calculator_yii2/Calculator_Yii2/web/site/historyy'
                break;
        }
    }
}
}).mount('#megaApp')

