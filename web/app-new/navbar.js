Vue.createApp({
    data: () => ({
        items: [
            'пункт1',
            'пункт2',
            'пункт3'
        ],
        userProfileOptions: [
            'личный кабинет',
            'история расчётов',
            'выход'
        ],
        adminProfileOptions: [
            'личный кабинет',
            'история расчётов(админ)',
            'пользователи',
            'выход'
        ],
        show5: false,
        val: ''
   }),
   methods: {
    // сделать тут функцию, которая делает переменную regAuthTitle равной 
    // либо "регистрация", либо "вход"

    goToAuthPage(event) {
        window.location = '../../views/site/login.php'
    },
    getVal(event) {
        val = event.target.innerHTML;
        console.log(val);
        // return val;
        switch(val) {
            case 'профиль':
                window.location = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/'
                break;
            case 'пользователи':
                window.location = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/users-list'
                break;
            case 'выход':
                window.location = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/logout'
                break;
            case 'история расчётов':
                window.location = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/historyy'
                break;
        }
    },
    getVal2(event) {
        val = event.target.innerHTML;
        console.log(val);
        // return val;
        switch(val) {
            // case 'профиль':
            //     window.location = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/'
            //     break;
            case 'пользователи':
                window.location = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/users-list'
                break;
            case 'выход':
                window.location = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/logout'
                break;
            case 'история расчётов(админ)':
                window.location = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/history'
                break;
            case 'история расчётов':
                window.location = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/historyy'
                break;
            case 'войти в систему':
                window.location = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/login'
                break;
        }
    }
}
}).mount('#megaApp')

