<template>
    <div>
        <toolbar></toolbar>
        <router-view></router-view>
        <app-footer></app-footer>
    </div>

</template>

<script>
    import toolbar from './ToolBar'
    import AppFooter from "./AppFooter";
    import Login from "./login/Login";

    export default {
        components:{Login, AppFooter, toolbar},
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>

<style scoped>

</style>
