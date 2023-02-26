<template>
    <main>
        <div class="flex flex-col gap-6">
            <h1 class="text-6xl font-bold self-center text-center">Nothing But <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Headlines</span></h1>
            <div class="text-l text-gray-400 self-center text-center overflow-anywhere">www.nothingbutheadlines.lol (end of life)</div>
            <div class="md:px-32 mb-16">
                <iframe class="aspect-video w-full" src="https://www.youtube.com/embed/mkbxh0QLh-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <h2 class="text-5xl mb-6 font-bold text-center">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-8 font-bold text-center">
                    <span>A web application for creating fake/funny headlines to be displayed as articles on Facebook.</span>
                </p>
                <p class="mb-8">
                    The inspiration for this website came from the fact that satire news organizations like The Onion, for instance, post fake, funny articles on their Facebook page all the time. My view was and is that people generally don't care about the articles, however. Generally, people really only read the headline and comment about it. After researching this, I found that <span class="accent-color">60% of the time when viral news articles are shared on Facebook, the sharer never even clicked on the article first</span><span class="whitespace-nowrap">.<span class="font-bold text-xl align-super leading-[0px]">[<a class=" px-0.5 text-blue-400" href="https://web.archive.org/web/20170515042650/https://www.washingtonpost.com/news/the-intersect/wp/2016/06/16/six-in-10-of-you-will-share-this-link-without-reading-it-according-to-a-new-and-depressing-study/">1</a>]</span></span> So why not just focus on what matters: the headline. As an added bonus, my website gave users the ability to create their own headlines and share them on Facebook. Our website would be better than existing satire news websites in every way. We would focus on headlines, and we would also benefit from user generated content in addition to any content we produced ourselves.
                </p>

                <p class="mb-8">
                    Nothing But Headlines is no longer active. See elaboration below.
                </p>
                <p class="mb-8">The video overview is the best introduction to the functionality of Nothing But Headlines.
                </p>
                <p class="mb-8">
                    Source code: <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/Headlines"> github.com/kevinwheeler/Headlines </a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold">Nota<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">bles</span></h2>
            <div class="text-2xl">
                <ul class="mb-8">
                    <li class="text-2xl mb-4 list-style-blue-bullet">One headline went viral for a short time, gaining <span class="accent-color">80,000 engagements</span> on Facebook. If I knew then what I know now,
                        I could have capitalized on it more, as mentioned in the Reflections section.
                    </li>
                    <li class="text-2xl mb-4 list-style-blue-bullet">
                        My website was referenced in a <a class="underline" href="https://medium.com/@laura_bauman/media-literacy-in-the-era-of-fake-news-e10edab52d0f">Medium article</a> by a stranger I've never talked to.
                    </li>

                </ul>
            </div>

            <h2 class="whitespace-none text-5xl font-bold">Tech<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">nologies</span></h2>

            <ul class="text-2xl mb-8">
                <li class="inline">Heroku, </li>
                <li class="inline">Node, </li>
                <li class="inline">Mongo, </li>
                <li class="inline">Express, </li>
                <li class="inline">Backbone, </li>
                <li class="inline">S3, </li>
                <li class="inline">Facebook APIs, </li>
                <li class="inline">reCAPTCHA, </li>
                <li class="inline">Webpack, </li>
                <li class="inline">Passport, </li>
                <li class="inline">Stylus, </li>
                <li class="inline">diffDOM, </li>
                <li class="inline">Gulp, </li>
                <li class="inline">Masonry, </li>
                <li class="inline">Bootstrap 4 + JQuery, </li>
                <li class="inline">Heroku Scheduler, </li>
                <li class="inline">Babel, </li>
                <li class="inline">EJS, </li>
                <li class="inline">Git, </li>
                <li class="inline">EditorConfig, </li>
                <li class="inline">JSCS, </li>
                <li class="inline">And many more.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold">Main <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 list-style-blue-bullet">Ran flawlessly without any server side errors when the website went viral for a short period of time (One post had over 81K Facebook engagements as evidenced by the Facebook share counter at 0:47).</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Tolerant of crashes / pulling the power plug at any time during code execution.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">Infinite scroll of headlines to keep users engaged.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Responsive web design adjusts to the size of the display area.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Headlines sortable by "best", "most recent", and "most views" by day, month, year, and all time (except most recent).</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">Used the "Wilson score" to sort headlines by "best" given their upvote and downvote counts. Headlines are sorted by the lower bound of a 95% confidence interval of what their actual upvote to downvote ratio would be if we had a larger sample size. This is a much better way to rank items than using "upvotes minus downvotes" or "average rating" because it avoids the flaws thereof.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Used Heroku Scheduler to maintain a running count of the number of views each headline had over the last 24 hours, month, and year.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">An admin page to review recently submitted, user generated headlines to make sure they don't contain hate speech, etc, before being displayed on our website or being shareable to Facebook. Admins are notified by email when new headlines are submitted.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">Ability for users to report headlines.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">All variations of https/http www/non-www redirect to https://www. Uses an alias DNS record to accomplish this.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Uses isomorphic code (code shared by server and client) to perform input validations.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">Complete error handling logs all errors. Uses a lambda function trick in async callbacks so that the original line of code where the error originated from will be displayed in the stack trace.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Other standard events were also logged and viewable using Papertrail.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Built using a scaffold repository providing features such as minification+concatenation using Webpack, es6 transpilation using Babel, watching and auto rebuilding using Gulp, etc.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold">Security <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 list-style-blue-bullet">Validate all inputs. Avoid injection attacks, XSS attacks, and CSRF attacks.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Helmet.js for added security.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">Requires a captcha (using google's reCAPTCHA) to submit a headline.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Rate limits incoming requests by IP address to mitigate DDoS attacks.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Admins log in through Facebook and authenticated using Passport.js</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">All passwords, api keys, etc stored in config variables rather than in source code, allowing the source code to be shared publicly.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold">Refl<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">ections</span></h2>
            <div class="text-2xl">
                <p class="mb-8">
                    I ended up taking the website down because it was costing me money in Heroku add-ons that I utilized. 
                    I was not approved for Google Ads, and when I tried to set up ads with Chitika, it wasn't
                    compatible with fancy client side rendered websites. I didn't realize at the time that 
                    Google Ads was so selective in who they would approve. However, Eventually MongoLab, the Heroku add on 
                    I used for Mongo DB was discontinued, and I've never updated the website to use a different
                    database solution.
                </p>

                <p class="mb-8">
                    I also didn't realize at the time, that when you share a link on Facebook as your Facebook business page, you need to include some text too.
                    Otherwise when other people share the link, it won't include the Business Page that it originated from. When my one headline went viral,
                    I could have had a lot more people being exposed to my Facebook page if I had known that. 
                </p>

                <p class="mb-8 accent-color">
                    If I had to do it all over again, I would keep the costs of running the website as low as possible,
                    and I would make it as easy as possible to make a clone of the website. I would then let content creators
                    try their shot at making the website catch on by setting up a clone for them, and splitting any profit. I would
                    also look into what advertising platforms would approve my website and how lucrative it would be. Lastly,
                    when I ran ads on the viral headline after it went viral, I would have targeted people who followed The Onion
                    on Facebook. I would not target people by political affiliation. That way I could craft an audience 
                    of people who would create a fun and humorous vibe. 
                </p>

                <p class="mb-48">
                    All in all, during the onset, I figured this whole website would be great experience as the first website I ever made,
                    and that it would also be a great portfolio piece. I do believe it was a success in that regard. I'm glad I made
                    the website even though I was eventually to take it down.
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
