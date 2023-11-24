<div id="megaApp">
    
<nav id="navv">
    <transition name="fade" mode="out-in"> 
        <!-- <i class="material-icons menu" v-if="!show" @click="show = !show" key="menu">menu</i>
        <i class="material-icons clear" v-else @click="show = !show" key="clear">clear</i> -->
        <span v-if="!show" @click="show = !show" key="menu" class="s"><?php echo Yii::$app->user->identity->username ?></span>
        <span v-else @click="show = !show" key="clear" class="s"> опции: </span>
    </transition>
    <transition name="fade">
        <ul v-if="show" class="unordered_list" id="unordered_list_admin">
            <li class="list_item" v-for="item in adminProfileOptions" @click="getVal2" id="list_item_admin"> {{ item }} </li>
        </ul>
    </transition>
</nav>
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="../app-new/navbar.js"></script>