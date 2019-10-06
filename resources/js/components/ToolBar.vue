<template>
        <v-toolbar>
            <v-toolbar-title>Customer Support</v-toolbar-title>

            <div class="flex-grow-1"></div>
            <v-spacer></v-spacer>
            <div class="hidden-sm-and-down">
                <router-link to="/forum">
                    <v-btn text>Foro</v-btn>
                </router-link>
                <router-link to="">
                    <v-btn text>Pregunta</v-btn>
                </router-link>
                <router-link to="">
                    <v-btn text>Categorías</v-btn>
                </router-link>
                <router-link to="/login">
                    <v-btn text>Login</v-btn>
                </router-link>
            </div>
        </v-toolbar>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

</style>
