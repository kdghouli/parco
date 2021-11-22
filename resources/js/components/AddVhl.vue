<template>
    <div class="container">
        <form @submit="addVhl()">
            <div class="form-group">
                <label for="examp">Matricule</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Entrer la Matricule"
                    name="matricule"
                />
            </div>
            <div class="form-group">
                <label for="example">Marque</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Marque d'equipement"
                    name="marque"
                />
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            matricule: "",
            marque: "",
        };
    },
    methods: {
        addVhl() {
                axios.post("./api/vhls", { matricule: this.matricule })
                .then(function (response) {
                    console.log(response.data);
                });

            alert("siri");
        },
    },
};
</script>
