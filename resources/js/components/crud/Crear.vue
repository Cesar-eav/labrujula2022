<template>
    <div>

        <h4> CREAR REGISTRO MURAL</h4>



    </div>
</template>


<script>
export default {
    name: "crear-mural",
    data() {
        return {
            mural: {
                titulo: "",
                cerro: "",
                artista: ""
            }
        }
    },
    methods: {
        async crear() {
            await this.axios.post('mural', this.mural)
                .then(response => {
                    this.$router.push({ name: "listMurales" })
                })
                .catch(error => {
                    console.log(error)
                })
        }

    }


}
</script>