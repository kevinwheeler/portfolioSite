<template>
    <main>
        <div class="flex flex-col gap-6">
            <h1 class="text-6xl font-bold text-center">Translate <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Search</span></h1>
            <div class="text-l text-gray-400 self-center text-center"><a href="https://www.translatesearch.com">www.translatesearch.com</a></div>
            <img src="/storage/translate-search-16-9.jpg" alt="Translate Search" class="md:px-32 sm:px-16 mb-16">
            <h2 class="text-5xl mb-6 font-bold text-center">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center">
                    A web application that translates a user provided search query plus selection of languages and displays the Google image search results for each language.
                </p>
                <p class="mb-8">
                    Source code: <a class="underline" href="https://github.com/kevinwheeler/translatesearch"> github.com/kevinwheeler/translatesearch </a>
                </p>
                <p class="mb-8">
                    Live website: <a class="underline" href="https://www.translatesearch.com">www.translatesearch.com</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold">St<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">ack</span></h2>

            <ul class="text-2xl mb-8">
                <li class="inline">Digital Ocean Ubuntu VPS, </li>
                <li class="inline">Apache, </li>
                <li class="inline">MySQL, </li>
                <li class="inline">Laravel (PHP) </li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold">Application <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 list-style-blue-bullet">Uses Google Translate API, Google invisible reCAPTCHA, Google Custom Search Element, Google Analytics.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Routes that use translations are protected by an invisible reCAPTCHA element to prevent bots from using translations api budget while also not interrupting user's experience.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">Detects when Google search element sends a reCAPTCHA (not the recaptcha that we are using internally to protect ourselves) and places it front and center such that the user will see it. If the user doesn't fill it out, Google will rate limit the user.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Checkbox selection encoded in the URL such that a user won't have to fill out all of the checkboxes again, the user can just bookmark the page to save the current configuration.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Client and server side input validation.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">Results displayed in the order the user checks the checkboxes, rather than in the form's order.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Display an error modal to inform the user what is going on when Google has rate limited the user.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Since reCAPTCHA only works with POST requests (assumedly for reasons of idempotency which I can elaborate on), all search results pages can be accessed by a duplicate URL that responds to GET requests and then the POST request will be performed, such that the user can still copy paste the search results URL and share it with others.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">Uses pagination such that we won't quickly burn through our translations budget if a user selects lots of languages.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">staging.translatesearch.com for testing changes before going live. (Only accessible from my IP address).</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold">Server <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 list-style-blue-bullet">Please see the <router-link class="underline" to="/ubuntu-vps">server portfolio page</router-link> for server features.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold">Refl<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">ections</span></h2>
            <div class="text-2xl">
                <p class="mb-8">
                    If I want to spend the time on it, I need to reimplement the search results pages such that they use client side rendering. I decided to make this website using server side rendering without using a javascript framework (although I have experience with vue.js in my kevinwheeler.net project and in contract work I've done, and backbone.js in my www.nothingbutheadlines.lol project), because
                    I just wanted to get something up quickly and also to gain some experience in not using a javascript framework. This became a bit problematic because I wanted to use reCAPTCHA to protect my GET routes
                    for the search results pages, so that user's could share links to the search results pages with others, but my translation api budget would still be protected from bots by reCAPTCHA. GET routes
                    must be idempotent, however, so I realized that reCAPTCHA cannot protect them when using server side rendering, because sending a recaptcha token to the server as part of the GET request would not be idempotent.
                    I decided to use a GET request to the search results page, and then perform a POST request to the search results page, which would be protected by reCAPTCHA. This has the problem of messing up the user's
                    back/forward navigation. If they press back after being on the POST results page, it would take them back to the GET request page which would make another post request. The brower's history api will not let you
                    know what page you came from in order to get to the current page, so I couldn't just use the history api to skip the problematic page when navigating back. What I ended up doing was just replacing the browser URL
                    in the GET request to my homepage's URL where the search form is before making the POST request. This way when a user presses back from the search results page, it will take them to the homepage, and when they click forward from there,
                    it will take them back to the search results page. Unfortunately the browser's back forward cache can mess this up, by still showing the intermediate page, just with the homepage's URL. I used a trick to disable the back forward cache,
                    but it doesn't have full browser compatibility. The only solution I know of, and perhaps the only solution that will reduce complexity, is to reimplement the search results pages using client side rendering.
                </p>
            </div>
        </div>
    </main> 
</template>

<script>
import { onMounted } from '@vue/runtime-core'

export default {
    
    components: {
    },
    setup() {
        onMounted(() => {
        })

        return {
        }
    },
    methods: {
    }
}
</script>
