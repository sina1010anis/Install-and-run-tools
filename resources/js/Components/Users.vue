<template>
    <span class="box-contact">
        <span v-for="contact in contacts" :key="contact.id">
            <div v-if="contact.id != this.you.id" @click="set_id_user(contact.id)">
                <img src="/image/test.png" alt="">
                {{contact.name }}
            </div>
            <hr>
        </span>
    </span>
</template>

<script>
export default {
    name: "Users",
    data:()=>({
        id_user:0,
    }),
    props:{
      contacts:{
        type:Object,
        required:true
      },
      you:{
        type:Object,
        required:true
      }
    },
    methods:{
        set_id_user(id){
            this.id_user = id
            axios.post('/chat/message' , {id:this.id_user}).then((res)=>{
                console.log(res.data)
            })
        },
    }
}
</script>

<style scoped>

</style>
