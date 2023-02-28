<template>
    <main>
        <div class="flex flex-col gap-6">
            <h1 class="text-6xl font-bold text-center">Translate <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Search</span></h1>
            <div class="text-l text-gray-400 self-center text-center overflow-anywhere"><a href="https://www.translatesearch.com">www.translatesearch.com</a></div>
            <img src="/storage/translate-search-16-9.jpg" alt="Translate Search" class="md:px-32 sm:px-16 mb-16">
            <h2 class="text-5xl mb-6 font-bold text-center">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center">
                    A web application that translates a user provided search query and selection of languages and then displays the Google Image Search results for each language.
                </p>
                <p class="mb-8">
                    Source code: <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/translatesearch"> github.com/kevinwheeler/translatesearch </a>
                </p>
                <p class="mb-8">
                    Live website: <a class="underline overflow-anywhere" href="https://www.translatesearch.com">www.translatesearch.com</a>
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
                <li class="text-2xl mb-4 blue-bullet-500">Uses Google Translate API, Google invisible reCAPTCHA, Google Custom Search Element, Google Analytics.</li>
                <li class="text-2xl mb-4 blue-bullet-500">Routes that perform translations are protected by an invisible reCAPTCHA element to prevent bots from using our translation API budget while also not interrupting user's experience.</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color">Detects when Google search element sends a reCAPTCHA (not the reCAPTCHA element that we are using internally to protect ourselves) and places it front and center so that the user will see it. If the user doesn't fill it out, Google will rate limit the user.</li>
                <li class="text-2xl mb-4 blue-bullet-500">Checkbox selection encoded in the URL such that a user won't have to fill out all of the checkboxes again, the user can just bookmark the page to save the current configuration.</li>
                <li class="text-2xl mb-4 blue-bullet-500">Client and server side input validation.</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color">Results displayed in the order the user checks the checkboxes, rather than in the form's order.</li>
                <li class="text-2xl mb-4 blue-bullet-500">Display an error modal to inform the user what is going on when Google has rate limited the user.</li>
                <li class="text-2xl mb-4 blue-bullet-500">Since reCAPTCHA only works with POST requests (assumedly for reasons of idempotency which I elaborate on in the Reflections section below), all search results pages can be accessed by a duplicate URL that responds to GET requests and then the POST request will be performed, such that the user can still copy paste the search results URL and share it with others.</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color">Uses pagination such that we won't quickly burn through our translations budget if a user selects lots of languages.</li>
                <li class="text-2xl mb-4 blue-bullet-500">staging.translatesearch.com for testing changes before going live. (Only accessible from my IP address).</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color">All variations of http/https and www/blank redirect to https://www.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold">Server <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet-500">Please see the <router-link class="underline" to="/ubuntu-vps">Ubuntu VPS server portfolio page</router-link> for server features.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold">Refl<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">ections</span></h2>
            <div class="text-2xl">
                <p class="mb-48 overflow-anywhere">
                    If I allocate time for it it, the search results pages need
                    to be reimplemented such that they use client side
                    rendering. I decided to make this website using server side
                    rendering without using a javascript framework (although I
                    have experience with vue.js in my kevinwheeler.net project
                    and in contract work I've done, and I have experiece with
                    backbone.js in my www.nothingbutheadlines.lol project),
                    because I wanted to gain some experience not using a
                    javascript framework. This became problematic because
                    I wanted to have GET routes for the search results pages, so
                    that users could share links to the search results pages
                    with others, but I also wanted to use reCAPTCHA so that my
                    translation api budget would still be protected from bots.
                    GET routes must be idempotent, however, and I realized that
                    reCAPTCHA cannot protect GET routes when using server side
                    rendering, because sending a recaptcha token to the server
                    as part of the GET request is for onetime use and is not
                    idempotent. I ended up deciding to have both a GET route and
                    a POST route for the search results page. In the GET route
                    case, after receiving the server response, the client will
                    just immediately obtain a reCAPTCHA token and then send a
                    POST request to the search results page. This has the
                    problem of messing up the user's back/forward navigation. If
                    they press back after being on the POST results page, it
                    would take them back to the GET request page which would
                    then make another post request. This proved difficult to
                    fix, because the brower's history api will not let you
                    delete a history entry, nor will it let you know what page
                    you came from in order to get to the current page, nor is
                    there a reliable way that I found to know if you arrived at a page from a
                    forward navigation vs a backward navigation, so I couldn't
                    just use the history api to skip the intermediate page when
                    navigating back or forward. What I ended up doing was just
                    using history.replaceState() to change the browser URL in
                    the intermediate page to my homepage's URL where the search
                    form is. This way when a user presses back from the search
                    results page, it will take
                    them to the homepage, and when they click forward from
                    there, it will take them back to the search results page.
                    Unfortunately the browser's back forward cache can mess this
                    up, by still showing the intermediate page, just with the
                    homepage's URL.  I used a trick to disable the back forward
                    cache, but it doesn't have full browser compatibility. The
                    only good solution I know of, and perhaps the only solution
                    that will reduce complexity, is to reimplement the search
                    results pages using client side rendering. I used the
                    intermediate page trick that I used just to get something
                    working well enough for now, but to really do things right,
                    I would need to reimplement the whole page to use client side
                    rendering.
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
