// noinspection JSUnresolvedVariable

const CompteInfo = Vue.component('CompteInfo', {
    template: `
    <div>
        <main>
    <h1>Informations du compte</h1>
    
    <div class="info-compte" 
    v-for="Utilisateur in listeUtilisateurs" 
    :key="utilisateur.id">
        <p>Pseudo : </p>
        <p>aidtudes</p>
    </div>

    <div class="info-compte">
        <p>Email : </p>
        <p>03/02/2021</p>
    </div>

    <div class="info-compte">
        <p>Compte créé le : </p>
        <p>aidtudes@contact.fr</p>
    </div>

    <div class="info-compte">
        <p>Langue : </p>
        <p>Français</p>
    </div>

    <div class="info-compte">
        <p>Pays : </p>
        <p>France</p>
    </div>

    <div class="info-compte">
        <p>Âge</p>
        <p>17 ans</p>
    </div>

</main>
    </div>
    `,
    data() {
        return {
            listeUtilisateurs: []
        }
    },
    mounted() {

        // Appel Ajax via axios liste des utilisateurs
        axios.get(backEnd.listeUtilisateurs)
            // Réponse et récupération des données
            .then(response => {
                // Récupérer les données
                this.listeUtilisateurs = response.data;
                console.log("Liste des utilisateurs : ", this.listeUtilisateurs);
            })
            // Cas d'erreur
            .catch(error => {
                console.log("Erreur : ", error);
            })
    },
    methods: {}
});