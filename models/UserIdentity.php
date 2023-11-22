<?php

namespace app\models;

class UserIdentity extends User implements \yii\web\IdentityInterface
{

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        // зачем нужна эта функция: нам передаётся id, и мы ищем по нему запись в бд
        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        // эта функция ищет записи в бд по аксесс токену
        return static::findOne(['access_token' => $token]); //то есть ищем по аксесс токену, у которого значение => token
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public function create() {
        return $this->save(false);

        // if($user->save()) {
        //     $auth = Yii::$app->authManager;
        //     $userRole = $auth->getRole('user');
        //     $auth->assign($userRole, $user->getId());

        // return $user;
        // }
    }

}
