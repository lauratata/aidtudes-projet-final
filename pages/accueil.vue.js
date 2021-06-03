// noinspection JSUnresolvedVariable

const Accueil = Vue.component('Accueil', {
    template: `<div><div class="search">
    <div class="icon"></div>
    <div class="input">
        <!--suppress HtmlFormInputWithoutLabel -->
        <input type="text" placeholder="Chercher un post, une matière..." id="mysearch">
    </div>
    <span class="clear" onclick="document.getElementById('mysearch').value = ''"></span>
</div>

<h2>Matières favorites</h2>

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


<router-link :to="{name:'DerniersPosts'}">
<h2>Quizz & Derniers posts</h2>
</router-link>

<a href="">
    <div class="post">
        <p>Quizz publié par : </p>
        <p>Sujet : </p>
    </div>
</a>

<a href="">
    <div class="post">
        <p>Quizz publié par : </p>
        <p>Sujet : </p>
    </div>
</a>

<a href="">
    <div class="post">
        <p>Quizz publié par : </p>
        <p>Sujet : </p>
    </div>
</a></div>

    `,
    data() {
        return {}
    },
    mounted() {

    },
    methods: {}
});