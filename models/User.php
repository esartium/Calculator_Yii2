<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string|null $email
 * @property string $password
 * @property string|null $auth_key
 * @property string|null $access_token
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'],
            [['username', 'email', 'auth_key', 'access_token'], 'string', 'max' => 35],
            [['password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID пользователя',
            'username' => 'Имя пользователя',
            'email' => 'Почта',
            'password' => 'Пароль',
            'reqister_date' => 'Дата регистрации',
            'auth_key' => 'Аутентификационный ключ',
            'access_token' => 'Токен доступа',
        ];
    }
}
