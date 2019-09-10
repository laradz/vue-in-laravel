<template>
    <div>
        <div class="row">
            <div class="col-sm-6">

                <select class="form-control mt-5" v-model="wilaya_id">
                    <option :value="index" v-for="(w, index) in wilayas" :key="index">{{ w }}</option>
                </select>

                <select class="form-control mt-5" id="" v-model="commune_id">
                    <option :value="c.id" v-for="(c, index) in communes" :key="index">{{ c.name }}</option>
                </select>

            </div>
        </div>
    </div>
</template>

<script>
export default {

    props: {
        wilayas: {},

        // Old val
        initCommune: {
            required: false,
            default: 0,
        }

    },

    data() {
        return {
            wilaya_id: 0,
            communes: [],
            commune_id: this.initCommune
        }
    },

    mounted() {
        if (this.commune_id) { // there is new 
            this.getCommune(this.commune_id)
        }
    },

    methods: {
        getCommunes(val) {
            axios.get(`/ajax/wilayas/${val}/communes/`)
                .then(({data}) => {
                    this.communes = data
                });
        },
        getCommune(val) {
            axios.get(`/ajax/wilayas/${val}`)
                .then(({data}) => {
                    this.wilaya_id = data.wilaya_id
                });
        }
    },

    watch: {
        wilaya_id(val){
            this.getCommunes(val)
        }
    }
}
</script>

<style>

</style>