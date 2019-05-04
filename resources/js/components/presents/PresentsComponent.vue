<template>
    <section>
        <material-transition-group tag="div" class="row">
            <present-card-component :key="present.id" :data-index="index" v-bind:present="present" v-for="(present,index) in presents"></present-card-component>
        </material-transition-group>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                name: 'Presents component 2',
                presents: [ ],
                endpoint: "/presents/"
            }
        },
        created() {
            this.fetchPresents();
        },
        methods: {
            fetchPresents() {
                axios.get(this.endpoint).then((response) => {
                    this.presents = response.data.data;
                });
            }            
        }
    }
</script>
