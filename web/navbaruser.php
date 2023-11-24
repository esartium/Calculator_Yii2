<div id="megaApp">
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<nav id="navv">
    <transition name="fade" mode="out-in"> 
        <!-- <i class="material-icons menu" v-if="!show" @click="show = !show" key="menu">menu</i>
        <i class="material-icons clear" v-else @click="show = !show" key="clear">clear</i> -->
        <span v-if="!show" @click="show = !show" key="menu"><div id="php" class="s"> <?php echo Yii::$app->user->identity->username ?> </div></span>
        <span v-else @click="show = !show" key="clear" class="s"> опции: </span>
    </transition>
    <transition name="fade">
        <ul class="unordered_list" v-if="show">
            <li class="list_item" v-for="item in userProfileOptions" @click="getVal"> {{ item }} </li>
        </ul>
    </transition>
</nav>
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="../app-new/navbar.js"></script>