const ProfilUser = Vue.component('ProfilUser', {
    template: `
   <div>
   
   <div class="description">
    <p>Description</p>
</div>

<h2>Matières où {{pseudo}} peut aider</h2>

<div class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">Slide 01</li>
            <li class="splide__slide">Slide 02</li>
            <li class="splide__slide">Slide 03</li>
        </ul>
    </div>
</div>

<h2>Matières où {{pseudo}} a besoin d'aide</h2>

<div id="image-slider" class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
            </li>
            <li class="splide__slide">
            </li>
            <li class="splide__slide">
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