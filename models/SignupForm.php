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
            // username and password are both required
            [['username', 'email', 'password', 'passconfirm'], 'required'],
            // rememberMe must be a boolean value
            // password is validated by validatePassword()
            // [['password'], 'validatePassword'],
            [['email'], 'email'],

            // указали, что почта должна быть уникальной; и указали, по отношению к какой таблице и к какому полю этой таблицы она должна быть уникальной:
            [['email'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'email'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */

    public function signup() {
        if ($this->validate()) {
            $user = new UserIdentity;
            $user->attributes = $this->attributes;
            return $user->create();
        }
    }

    // public function validatePassword($attribute, $params)
    // {
    //     if (!$this->hasErrors()) {
    //         $user = $this->getUser();

    //         if (!$user || !$user->validatePassword($this->password)) {
    //             $this->addError($attribute, 'Incorrect username or password.');
    //         }
    //     }
    // }

    // public function addUser() {
    //     $model = new User();

        // $model->insert('user', [
        //     'username' => $this->username,
        //     'email' => $this->email,
        //     'password' => $this->password,
        // ]);
    // }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    // public function login()
    // {
    //     if ($this->validate()) {
    //         return Yii::$app->user->login($this->getUser());
    //     }
    //     return false;
    // }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    // public function getUser()
    // {
    //     if ($this->_user === false) {
    //         $this->_user = User::findByUsername($this->username);
    //     }

    //     return $this->_user;
    // }
}
