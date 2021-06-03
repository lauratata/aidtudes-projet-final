var Matieres = Vue.component('Matieres', {
    template: `

    <div><h1>Matières</h1>

<div id="card-slider" class="splide">
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
            <li class="splide__slide">
                <img src="img/matieres/prototype.svg" alt="Humanités, littérature, philosophie">
                <h4>Humanités, littérature et philosophie</h4>
            </li>
            <li class="splide__slide">
                <img src="img/matieres/paint-brush-solid.svg" alt="Arts">
                <h4>Arts</h4>
            </li>
            <li class="splide__slide">
                <img src="img/matieres/globe-solid.svg" alt="Langues, littératures et cultures étrangères">
                <h4>Langues, littératures et cultures étrangères</h4>
            </li>
            <li class="splide__slide">
                <img src="img/matieres/calculator-solid.svg" alt="Mathématiques">
                <h4>Mathématiques</h4>
            </li>
            <li class="splide__slide">
                <img src="img/matieres/economic.svg" alt="Sciences économiques et sociales">
                <h4>Sciences économiques et sociales</h4>
            </li>
            <li class="splide__slide">
                <img src="img/matieres/laptop-code-solid.svg" alt="Numérique et sciences informatiques">
                <h4>Numérique et sciences informatiques</h4>
            </li>
            <li class="splide__slide">
                <img src="img/matieres/microscope-solid.svg" alt="SVT">
                <h4>SVT</h4>
            </li>
            <li class="splide__slide">
                <img src="img/matieres/atom-solid.svg" alt="Physique Chimie">
                <h4>Physique Chimie</h4>
            </li>
            <li class="splide__slide">
                <img src="img/matieres/flask-solid.svg" alt="Biologie, écologie">
                <h4>Biologie, écologie</h4>
            </li>
            <li class="splide__slide">
                <img src="img/matieres/prototype.svg" alt="Sciences de l'ingénieur">
                <h4>Sciences de l'ingénieur</h4>
            </li>
        </ul>
    </div>
</div></div>
    `,
    data() {
        return {}
    },
    mounted() {

    },
    methods: {}
})