<template>
    <main ref="main">
        <div class="flex flex-col gap-6">
            <div class="duration-1000 transition data-inviewport from-left motion-reduce:from-cancel">
                <h1 class="text-6xl font-bold text-center">Translate <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Search</span></h1>
                <div class="text-l text-gray-400 self-center text-center overflow-anywhere"><a href="https://www.translatesearch.com">www.translatesearch.com</a></div>
            </div>
            <img src="/storage/translate-search-16-9.jpg" alt="Translate Search" class="md:px-32 sm:px-16 mb-16 duration-1000 transition data-inviewport from-right motion-reduce:from-cancel">
            <h2 class="text-5xl mb-6 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    A web application that translates a user provided search query and selection of languages and then displays the Google Image Search results for each language.
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    Source code: <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/translatesearch"> github.com/kevinwheeler/translatesearch </a>
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    Live website: <a class="underline overflow-anywhere" href="https://www.translatesearch.com">www.translatesearch.com</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">St<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">ack</span></h2>

            <ul class="text-2xl mb-8">
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Digital Ocean Ubuntu VPS, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Apache, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">MySQL, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Laravel (PHP) </li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Application <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Uses Google Translate API, Google invisible reCAPTCHA, Google Custom Search Element, Google Analytics.</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Routes that perform translations are protected by an invisible reCAPTCHA element to prevent bots from using our translation API budget while also not interrupting user's experience.</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Detects when Google search element sends a reCAPTCHA (not the reCAPTCHA element that we are using internally to protect ourselves) and places it front and center so that the user will see it. If the user doesn't fill it out, Google will rate limit the user.</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Checkbox selection encoded in the URL such that a user won't have to fill out all of the checkboxes again, the user can just bookmark the page to save the current configuration.</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Client and server side input validation.</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Results displayed in the order the user checks the checkboxes, rather than in the form's order.</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Display an error modal to inform the user what is going on when Google has rate limited the user.</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Since reCAPTCHA only works with POST requests (assumedly for reasons of idempotency which I elaborate on in the Reflections section below), all search results pages can be accessed by a duplicate URL that responds to GET requests and then the POST request will be performed, such that the user can still copy paste the search results URL and share it with others.</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Uses pagination such that we won't quickly burn through our translations budget if a user selects lots of languages.</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">staging.translatesearch.com for testing changes before going live. (Only accessible from my IP address).</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">All variations of http/https and www/blank redirect to https://www.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Server <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Please see the <router-link class="underline" to="/projects/ubuntu-vps">Ubuntu VPS server portfolio page</router-link> for server features.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Refl<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">ections</span></h2>
            <div class="text-2xl">
                <p class="mb-48 overflow-anywhere">
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">If I allocate time for it it, the search results pages need </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">to be reimplemented such that they use client side </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">rendering. I decided to make this website using server side </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">rendering without using a javascript framework (although I </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">have experience with vue.js in my kevinwheeler.net project </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">and in contract work I've done, and I have experiece with </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">backbone.js in my www.nothingbutheadlines.lol project), </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">because I wanted to gain some experience not using a </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">javascript framework. This became problematic because </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">I wanted to have GET routes for the search results pages, so </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">that users could share links to the search results pages </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">with others, but I also wanted to use reCAPTCHA so that my </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">translation api budget would still be protected from bots. </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">GET routes must be idempotent, however, and I realized that </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">reCAPTCHA cannot protect GET routes when using server side </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">rendering, because sending a recaptcha token to the server </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">as part of the GET request is for onetime use and is not </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">idempotent. I ended up deciding to have both a GET route and </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">a POST route for the search results page. In the GET route </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">case, after receiving the server response, the client will </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">just immediately obtain a reCAPTCHA token and then send a </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">POST request to the search results page. This has the </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">problem of messing up the user's back/forward navigation. If </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">they press back after being on the POST results page, it </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">would take them back to the GET request page which would </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">then make another post request. This proved difficult to </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">fix, because the brower's history api will not let you </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">delete a history entry, nor will it let you know what page </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">you came from in order to get to the current page, nor is </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">there a reliable way that I found to know if you arrived at a page from a </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">forward navigation vs a backward navigation, so I couldn't </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">just use the history api to skip the intermediate page when </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">navigating back or forward. What I ended up doing was just </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">using history.replaceState() to change the browser URL in </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">the intermediate page to my homepage's URL where the search </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">form is. This way when a user presses back from the search </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">results page, it will take </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">them to the homepage, and when they click forward from </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">there, it will take them back to the search results page. </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Unfortunately the browser's back forward cache can mess this </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">up, by still showing the intermediate page, just with the </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">homepage's URL.  I used a trick to disable the back forward </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">cache, but it doesn't have full browser compatibility. The </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">only good solution I know of, and perhaps the only solution </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">that will reduce complexity, is to reimplement the search </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">results pages using client side rendering. I used the </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">intermediate page trick that I used just to get something </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">working well enough for now, but to really do things right, </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">I would need to reimplement the whole page to use client side </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">rendering. </span>
                </p>
            </div>
        </div>
    </main> 
</template>

<script>
import { ref } from 'vue'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'
import { onBeforeUnmount, onMounted } from '@vue/runtime-core'

export default {
    
    components: {
    },
    setup() {
        const main = ref(null);
        const obs = getObserver();

        onMounted(() => {
            observeElements(obs, {}, main.value);
        })

        onBeforeUnmount(() => {
            unobserveElements(obs, main.value);
        })

        return {
            main,
        }
    },
    methods: {
    }
}
</script>
