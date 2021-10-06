<template>
    <min>
        <header class="boxer">
<!--            <Link class="test" href="/test">send</Link>-->
        </header>
    </min>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
export default {
    name: "editor",
    components:{
        Link
    },
    mounted() {
        setTimeout(()=>{
            $('.boxer').html(`<button class="test">send</button>`)
        } , 3000)
    }
}
</script>

<style scoped>

</style>
