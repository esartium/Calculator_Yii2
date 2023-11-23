<div id="megaApp">
    
<nav id="navv">
    <transition name="fade" mode="out-in"> 
        <!-- <i class="material-icons menu" v-if="!show" @click="show = !show" key="menu">menu</i>
        <i class="material-icons clear" v-else @click="show = !show" key="clear">clear</i> -->
        <span v-if="!show" @click="show = !show" key="menu"><?php echo Yii::$app->user->identity->username ?></span>
        <span v-else @click="show = !show" key="clear"> опции: </span>
    </transition>
    <transition name="fade">
        <ul v-if="show" class="unordered_list">
            <li class="list_item" v-for="item in adminProfileOptions" @click="getVal"> {{ item }} </li>
        </ul>
    </transition>
</nav>
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="../app-new/navbar.js"></script>