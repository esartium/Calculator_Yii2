<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class LoginForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'password'], 'required', 'message' => 'Это поле не может быть пустым'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            [['email'], 'email', 'message' => 'Неверный формат email']
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUserByEmail();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect email or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUserByEmail(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser() // эта функция возвращает нам самого юзера (объект модели)
    {
        if ($this->_user === false) { //если юзер еще не заполнен, то...
            $this->_user = UserIdentity::findByUsername($this->username); //...то мы пытаемся найти юзера по юзернейму, который пользователь ввел в форму
        }

        return $this->_user;

        // по умолчанию у нас юзер=false, то есть не найден, следовательно, первое обращение к этому методу заставит его искать юзера по имени
    }

    public function getUserByEmail() 
    {
        if ($this->_user === false) { 
            $this->_user = UserIdentity::findByEmail($this->email); 
        }

        return $this->_user;
    }
}
