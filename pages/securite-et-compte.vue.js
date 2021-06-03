var SecuCompte = Vue.component('SecuCompte', {
    template: `
    <div>
        <h1>Sécurité et accès au compte</h1>

<router-link :to="{name:'CompteInfo'}">
    <div class="section-securite">
        <p>Informations du compte</p>
    </div>
</router-link>

<a href="changer-mot-de-passe.html">
    <div class="section-securite">
        <p>Changer votre mot de passe</p>
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