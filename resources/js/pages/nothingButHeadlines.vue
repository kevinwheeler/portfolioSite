<template>
    <main ref="main">
        <div class="flex flex-col gap-6">
            <div class="duration-1000 transition data-inviewport from-left">
                <h1 class="text-6xl font-bold self-center text-center">Nothing But <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Headlines</span></h1>
                <div class="text-l text-gray-400 self-center text-center overflow-anywhere">www.nothingbutheadlines.lol (end of life)</div>
            </div>
            <div class="md:px-32 mb-16">
                <iframe class="aspect-video w-full duration-1000 transition data-inviewport from-right" src="https://www.youtube.com/embed/mkbxh0QLh-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <h2 class="text-5xl mb-6 font-bold text-center duration-[2000ms] transition data-inviewport fade-in">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent duration-[2000ms] transition data-inviewport fade-in">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-8 font-bold text-center duration-[2000ms] transition data-inviewport fade-in">
                    <span>A web application for creating fake/funny headlines to be displayed as articles on Facebook.</span>
                </p>
                <p class="mb-8">
                    <span class="duration-[2000ms] transition data-inviewport fade-in">The inspiration for this website came from the fact that </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">satire news organizations like The Onion, for instance, post </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">fake, funny articles on their Facebook page all the time. My </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">view was and is that people generally don't care about the </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">articles, however. Generally, people really only read the </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">headlines and comment about them. After researching this, I </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">found that <span class="accent-color">60% of the time when </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">viral news articles are shared on Facebook, the sharer never </span>

                    <span class="duration-[2000ms] transition data-inviewport fade-in">even clicked on the article first</span><span
                    class="whitespace-nowrap">.<span class="font-bold text-xl
                    align-super leading-[0px]">[<a class=" px-0.5 text-blue-400"
                    href="https://web.archive.org/web/20170515042650/https://www.washingtonpost.com/news/the-intersect/wp/2016/06/16/six-in-10-of-you-will-share-this-link-without-reading-it-according-to-a-new-and-depressing-study/">1</a>]</span></span></span>

                    <span class="duration-[2000ms] transition data-inviewport fade-in">So why not just focus on what matters: the headline. As an </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">added bonus, my website gave users the ability to create </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">their own headlines and share them on Facebook. Our website </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">would be better than existing satire news websites in every </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">way. We would focus on headlines, and we would also benefit </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">from user generated content in addition to any content we </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">produced ourselves. </span>
                </p>

                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in">
                    Nothing But Headlines is no longer active. See elaboration below.
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in">The video overview above is the best introduction to the functionality of Nothing But Headlines.
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in">
                    Source code: <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/Headlines"> github.com/kevinwheeler/Headlines </a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in">Nota<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">bles</span></h2>
            <div class="text-2xl">
                <ul class="mb-8">
                    <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">One headline went viral for a short time, gaining <span class="accent-color">80,000 engagements</span> on Facebook as evidenced by the Facebook share counter at 0:47 in the video above.
                    </li>
                    <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">
                        My website was referenced in a <a class="underline" href="https://medium.com/@laura_bauman/media-literacy-in-the-era-of-fake-news-e10edab52d0f">Medium article</a> by a stranger I've never talked to.
                    </li>

                </ul>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in">Tech<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">nologies</span></h2>

            <ul class="text-2xl mb-8">
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Heroku, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Node, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Mongo, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Express, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Backbone, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">S3, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Facebook APIs, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">reCAPTCHA, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Webpack, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Passport, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Stylus, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">diffDOM, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Gulp, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Masonry, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Bootstrap 4 + JQuery, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Heroku Scheduler, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Babel, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">EJS, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">Git, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">EditorConfig, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">JSCS, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in">And many more.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in">Main <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Ran flawlessly without any server side errors when the website went viral for a short period of time.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Tolerant of crashes / pulling the power plug at any time during code execution.</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in">Infinite scroll of headlines to keep users engaged.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Responsive web design adjusts to the size of the display area.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Headlines sortable by "best", "most recent", and "most views" by day, month, year, and all time (except most recent).</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in">Used the "Wilson score" to sort headlines by "best" given their upvote and downvote counts. Headlines are sorted by the lower bound of a 95% confidence interval of what their actual upvote to downvote ratio would be if we had a larger sample size. This is a much better way to rank items than using "upvotes minus downvotes" or "average rating" because it avoids the failure modes/flaws thereof.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Maintained a running count of the number of views each headline had over the last 24 hours, month, and year.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">An admin page to review recently submitted, user generated headlines to make sure they don't contain hate speech, etc, before being displayed on our website or being shareable to Facebook. Admins are notified by email when new headlines are submitted.</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in">Ability for users to report headlines.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">All variations of https/http www/non-www redirect to https://www. Uses an alias DNS record to accomplish this.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Uses isomorphic code (code shared by server and client) to perform input validations.</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in">Complete error handling logs all errors. Uses a lambda function trick in async callbacks so that the original line of code where the error originated from will be displayed in the stack trace.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Other standard events were also logged and viewable using Papertrail.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Built using a scaffold repository providing features such as minification+concatenation using Webpack, es6 transpilation using Babel, watching and auto rebuilding using Gulp, etc.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in">Security <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Validate all inputs. Avoid injection attacks, XSS attacks, and CSRF attacks.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Helmet.js for added security.</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in">Requires a captcha (using google's reCAPTCHA) to submit a headline.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Rate limits incoming requests by IP address to mitigate DDoS attacks.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Admins log in through Facebook and authenticated using Passport.js</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in">All passwords, api keys, etc stored in config variables rather than in source code, allowing the source code to be shared publicly.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in">Refl<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">ections</span></h2>
            <div class="text-2xl">
                <p class="mb-8">
                    <span class="duration-[2000ms] transition data-inviewport fade-in">I ended up taking the website down because it was costing me money in Heroku add-ons that I utilized. </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">I was not approved for Google Ads, and when I tried to set up ads with Chitika, it wasn't </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">compatible with client side rendered websites. I didn't realize at the time that </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">Google Ads was so selective in who they would approve. Eventually MongoLab, the Heroku add on </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">I used for Mongo DB was discontinued, and I've never updated the website to use a different </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">database solution. </span>
                </p>

                <p class="mb-8">
                    <span class="duration-[2000ms] transition data-inviewport fade-in">I also didn't realize at the time, that when you share a link on Facebook as your Facebook business page, you need to include some text too. </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">Otherwise when other people share the link, it won't include the business page that it originated from. When my one headline went viral, </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">I could have had a lot more people being exposed to my Facebook page if I had known that. </span>
                </p>

                <p class="mb-8">
                    <span class="duration-[2000ms] transition data-inviewport fade-in">If I had to do it all over again, I would keep the costs of running the website as low as possible, </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">and I would make it as easy as possible to make a clone of the website. I would then let content creators </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">try their shot at making the website catch on by setting up a clone for them, and splitting any profit. I would </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">also look into what advertising platforms would approve my website and how lucrative it would be. Lastly, </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">when I ran ads on the viral headline after it went viral, I would have targeted people who followed The Onion </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">on Facebook. I would not target people by political affiliation. That way I could craft an audience </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">of people who would create a fun and humorous vibe. </span>
                </p>

                <p class="mb-48">
                    <span class="duration-[2000ms] transition data-inviewport fade-in">All in all, during the onset, I figured this whole website would be great experience as the first website I ever made, </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">and that it would also be a great portfolio piece. I do believe it was a success in that regard. I'm glad I made </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">the website even though I was eventually to take it down. </span>
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
