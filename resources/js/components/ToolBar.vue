<template>
        <v-toolbar>
            <v-toolbar-title>Customer Support</v-toolbar-title>

            <div class="flex-grow-1"></div>
            <v-spacer></v-spacer>
            <div class="hidden-sm-and-down">
                <router-link
                    v-for="item in items"
                    :key="item.title"
                    :to="item.to"
                    v-if="item.show">
                        <v-btn text>{{item.title}}</v-btn>
                </router-link>
            </div>
        </v-toolbar>
</template>

<script>
    export default {
        data(){
            return {
                items: [
                    {title : 'Forum', to: '/forum', show:true},
                    {title : 'Pregunta', to: '/pregunta', show: User.loggedIn()},
                    {title : 'Categoría', to: '/categoria', show: User.loggedIn()},
                    {title : 'Login', to: '/login', show: !User.loggedIn()},
                    {title : 'Logout', to: '/logout', show: User.loggedIn()},
                ]
            }
        },
        created(){
            EventBus.$on('logout', () => {
                User.logout()
            })
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

</style>
