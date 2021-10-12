<template>
    <page :messgae_page="this.messages" :user_page="user" :msg="this.msg_user"></page>
    <textarea-vue></textarea-vue>
</template>

<script>
import Page from "./Page";
import TextareaVue from "./TextareaVue";
export default {
    name: "Chat",
    props:{
        messages:{
            type:Object,
        },
        user:{
            type:Object
        },
        msg_user:{
            type:Number
        }
    },
    components: {TextareaVue, Page}
}
</script>

<style scoped>

</style>
