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
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $passconfirm;
    private $_user = false;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password', 'passconfirm'], 'required', 'message' => 'Это поле не может быть пустым'],
            ['password', 'match', 'pattern' => '/(?=.*[0-9])/', 'message' => 'Пароль должен содержать минимум одну цифру'],
            [['password'], 'validatePassword'],
            [['email'], 'email', 'message' => 'Неверный формат email'],
            // указали, что почта должна быть уникальной; и указали, по отношению к какой таблице и к какому полю этой таблицы она должна быть уникальной:
            [['email'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'email', 'message' => 'Пользователь с таким email уже существует'],
            [['username'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'username', 'message' => 'Пользователь с таким именем уже существует'],
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
        if ($this->password != $this->passconfirm) {
            $this->addError($attribute, 'Пароли не совпадают');
        }
    }

    public function signup() {
        if ($this->validate()) {
            $user = new UserIdentity;
            $user->attributes = $this->attributes;

            return $user->create();
        }
    }
}
