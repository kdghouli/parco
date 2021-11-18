<template>
    <div class="container" id="app">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Index Compo</div>

                    <div class="card-body" v-for="vhl in vhls" :key="vhl.id">
                        {{ vhl.matricule }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            vhls: {},
        };
    },

    name:'index-vhl',

    mounted() {
        console.log("Component mounted.");
        this.indextation();
    },
    methods: {
        indextation() {
            axios.get("/api/vhls").then((resp) => {
                this.vhls = resp.data;
            });
            // .then(err=>console.log(err))
        },
    },
};
</script>
