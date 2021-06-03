var MatHistoire = Vue.component('MatHistoire', {
    template: `
    <div>
        
<h1>Matière choisie</h1>
<h2>Histoire</h2>

<router-link :to="{name:'QuizzHistoire'}">
    <div class="section-quizz">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="poll" class="svg-inline--fa fa-poll fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM160 368c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16V240c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v128zm96 0c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16V144c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v224zm96 0c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16v-64c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v64z"></path></svg>
    </div>
</router-link>

<router-link :to="{name:'ForumHistoire'}">
    <div class="section-forum">
<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="comment" class="svg-inline--fa fa-comment fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29 7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160-93.3 160-208 160z"></path></svg>
    </div>
</router-link>

<router-link :to="{name:'Videos'}">
    <div class="section-videos">
<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="video" class="svg-inline--fa fa-video fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"></path></svg>
    
    </div>
</router-link>
    </div>
    `,
    data() {
        return {}
    },
    mounted() {

    },
    methods: {}
})