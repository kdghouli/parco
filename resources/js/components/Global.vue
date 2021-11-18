<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Global Component
                        <div class="nav">
                            <router-link to="/1">Home</router-link> |
                            <router-link to="/2">khalid</router-link>
                        </div>
                    </div>

                    <div class="card-body">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import IndexVhl from './IndexVhl.vue';
import khalid from "./khalid.vue";
export default {
    mounted() {
        console.log("Component mounted.");
    },
    components: { IndexVhl, khalid },
};
</script>
