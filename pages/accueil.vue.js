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

<div class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">Slide 01</li>
            <li class="splide__slide">Slide 02</li>
            <li class="splide__slide">Slide 03</li>
            <li class="splide__slide">Slide 04</li>
            <li class="splide__slide">Slide 05</li>
            <li class="splide__slide">Slide 06</li>
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