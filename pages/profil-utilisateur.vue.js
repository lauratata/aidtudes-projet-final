const ProfilUser = Vue.component('ProfilUser', {
    template: `
   <div>
   
   <div class="description">
    <p>Description</p>
</div>

<h2>Matières où aidtudes peut aider</h2>

<div class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
            <router-link :to="{name:'MatHistoire'}">
                <img src="img/matieres/book-solid.svg" alt="Histoire Géographie">
                <h4>Histoire Géographie</h4>
                </router-link>
</li>
            <li class="splide__slide">
            <router-link :to="{name:'MatHistoire'}">
                <img src="img/matieres/university-solid.svg" alt="Littérature">
                <h4>Littérature, langues et cultures de l'antiquité</h4>
                </router-link>
</li>
            <li class="splide__slide"><router-link :to="{name:'MatHistoire'}">
                <img src="img/matieres/economic.svg" alt="Sciences économiques et sociales">
                <h4>Sciences économiques et sociales</h4>
                </router-link></li>
        </ul>
    </div>
</div>

<h2>Matières où {{pseudo}} a besoin d'aide</h2>

<div id="image-slider" class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
            <router-link :to="{name:'MatHistoire'}">
                <img src="img/matieres/economic.svg" alt="Sciences économiques et sociales">
                <h4>Sciences économiques et sociales</h4>
                </router-link>
            </li>
            <li class="splide__slide">
            <router-link :to="{name:'MatHistoire'}">
                <img src="img/matieres/prototype.svg" alt="Sciences de l'ingénieur">
                <h4>Sciences de l'ingénieur</h4>
                </router-link>
            </li>
        </ul>
    </div>
</div>

</div>
    `,
    data() {
        return {}
    },
    mounted() {

    },
    methods: {}
});