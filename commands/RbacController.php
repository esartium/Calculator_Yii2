<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller 
{
    public function actionInit() {
        $auth = Yii::$app->authManager;
        // разрешения:
        $makeCalculation = $auth->createPermission('makeCalculation');
        $makeCalculation->description = 'Выполнение расчёта';
        $auth->add($makeCalculation);

        $calculationList = $auth->createPermission('calculationList');
        $calculationList->description = 'История расчётов';
        $auth->add($calculationList);

        $usersManage = $auth->createPermission('usersManage');
        $usersManage->description = 'Управление пользователями';
        $auth->add($usersManage);

        // пользователи:
        $guest = $auth->createRole('guest');
        $guest->description = 'Гость';
        $auth->add($guest);
        $auth->addChild($guest, $makeCalculation);

        $user = $auth->createRole('user');
        $user->description = 'Зарегистрированный пользователь';
        $auth->add($user);
        $auth->addChild($user, $calculationList);
        $auth->addChild($user, $guest);

        $admin = $auth->createRole('admin');
        $admin->description = 'Администратор';
        $auth->add($admin);
        $auth->addChild($admin, $usersManage);
        $auth->addChild($admin, $user);

        //назначение ролей:
        $auth->assign($guest, 3);
        $auth->assign($user, 2);
        $auth->assign($admin, 1);

        echo "111";
    }


}