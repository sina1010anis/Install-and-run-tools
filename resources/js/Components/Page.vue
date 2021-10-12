<template>
    <div class="box-page-chat">
        <div v-for="msg in messgae_page" :key="msg.id" style="margin: 10px 0">
            <span v-if="msg.from == this.msg"  class="msg-you msg">{{msg.message}}</span>
            <span v-if="msg.from == this.user_page.id"  class="msg-my msg">{{msg.message}}</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "Page",
    props:{
        messgae_page:{
            type:Object
        },
        user_page:{
            type:Object
        },
        msg:{
            type:Number
        },
    }
}
</script>

<style scoped>

</style>
