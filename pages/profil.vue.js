const Profil = Vue.component('Profil', {
    template: `
    <!--suppress HtmlUnknownTarget -->
<div>
        <h1>Espace utilisateur</h1>
<h2>Pseudo : aidtudes</h2>

<div class="photo-de-profil">
    <img src="img/photos/belle-femme-beau-sourire-assis-posture-lotus-sol-ordinateur-argente-jambes-gesticulant-pouce-cote-soumettant-quelque-chose_171337-248.jpeg"
         alt="Image de profil">
</div>

<div class="photo-de-profil">
    <label><input
            type="file"
            class="custom-file-input"
            id="validatedCustomFile"
            required
    >Changez votre photo de profil
    </label>
</div>

<a href="php/deconnexion.php">
    <div class="profil-options">
        Déconnexion
    </div>
</a>

<router-link :to="{name:'ProfilUser'}">
    <div class="profil-options">
        Voir votre profil
    </div>
</router-link>

<router-link :to="{name:'SecuCompte'}">
    <div class="profil-options">
        Sécurité et accès au compte
    </div>
</router-link>

<a href="pages/confidentialite.html">
    <div class="profil-options">
        Confidentialité et sécurité
    </div>
</a>

<a href="pages/conditions-utilisation.html">
    <div class="profil-options">
        Conditions générales d'utilisation
    </div>
</a>
    </div>
    `,
    data() {
        return {}
    },
    mounted() {

    },
    methods: {}
})