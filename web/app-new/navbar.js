Vue.createApp({
    data: () => ({
        f: 500, //500 - guest
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
            'история расчётов',
            'пользователи',
            'выход'
        ],
        show: false,
        username: 'bebebe',
        val: ''
   }),
   methods: {
    // сделать тут функцию, которая делает переменную regAuthTitle равной 
    // либо "регистрация", либо "вход"

    authRegHeader(f, username) {
        if (f !== 500) {
            alert("здравствуйте, " + username + ", вы авторизовались в системе расчета стоимости доставки. Теперь все ваши расчеты будут сохранены для последующего просмотра в журнале расчетов")
        }
    },
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
                window.location = 'http://localhost:8888/latest_dz_web/calculator-yii2/web/site/history'
                break;
        }

        
    }
}
}).mount('#megaApp')

