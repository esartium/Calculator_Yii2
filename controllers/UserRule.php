<?php

use yii\rbac\Rule;

class UserRule extends Rule
{
    public $name = 'isUser';

    public function execute($user_id, $item, $params) {
        
    }
}