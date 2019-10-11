<template>
    <v-card>
        <v-card-title class="align-end fill-height">
            <div>
               <h3 class="headline mb-0">
                    <router-link :to="data.path">
                         {{data.title}}
                    </router-link>
               </h3>
                <div class="grey--text">
                    {{data.user}} escribió
                    {{data.created_at}}
                </div>
            </div>

        </v-card-title>

        <v-card-text>
            {{data.body}}
        </v-card-text>

    </v-card>
</template>

<script>
    export default {
        props:['data'],
        name: "question"
    }
</script>

<style scoped>

</style>
