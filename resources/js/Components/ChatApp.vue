<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{user.name}}</div>
                    <chat :messages="message" :user="this.user" :msg_user="this.message_user"></chat>
                    <span class="box-contact">
                        <span v-for="contact in contacts" :key="contact.id">
                            <div v-if="contact.id != this.user.id" @click="set_id_user(contact.id)">
                                <img src="/image/test.png" alt="">
                                {{contact.name }}
                            </div>
                            <hr>
                        </span>
                    </span>
<!--                    <users :contacts="this.contacts" :you="this.user"></users>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Chat from "./Chat";
import Users from "./Users";
export default {
    name: "ChatApp",
    data:()=>({
        contacts:null,
        message_user:0,
        message:null
    }),
    props:{
      user:{
          type:Object,
          required:true
      }
    },
    mounted() {
        axios.post('/chat/user').then((res) => {
            this.contacts = res.data
        })
    },
    methods:{
        set_id_user(id){
            this.message_user = id
            axios.post('/chat/message' , {id:this.message_user}).then((res)=>{
                console.log(res.data)
                this.message = res.data
            })
        },
    },
    components: {Users, Chat},
}
</script>

<style scoped>

</style>
