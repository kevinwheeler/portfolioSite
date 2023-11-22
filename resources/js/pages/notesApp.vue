<template>
    <main ref="main">
        <div class="flex flex-col gap-6">
            <div class="duration-1000 transition data-inviewport from-left motion-reduce:from-cancel">
                <h1 class="text-6xl font-bold text-center">Notes <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">App</span></h1>
                <div class="text-l text-gray-400 self-center text-center"><a href="https://notes-app.kevinwheeler.net">notes-app.kevinwheeler.net</a></div>
            </div>
            <img src="/storage/notes-app-hero.webp" alt="Portfolio Site Hero" class="md:px-32 sm:px-16 mb-16 duration-1000 transition data-inviewport from-right motion-reduce:from-cancel">
            <h2 class="text-5xl mb-6 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    A simple notes app created within three weeks as part of a job interview process
                    despite having never used NestJS, Next.js, AWS ECS, GraphQL, and other technologies before.
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    Source code: <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/notes-app">https://github.com/kevinwheeler/notes-app</a>
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    Live website: <a class="underline overflow-anywhere" href="https://notes-app.kevinwheeler.net">https://notes-app.kevinwheeler.net</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl text-center font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Tech<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">nologies</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Docker</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">AWS Elastic Container Service</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">AWS RDS PostgreSQL database</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">NestJS</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Next.js (Serve-Side Rendering)</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">GraphQL</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">React</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Redux</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">TypeScript</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Tailwind</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">ESLint + Prettier</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">TypeORM</li>
            </ul>

            <h2 class="text-5xl mb-6 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Archi<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">tecture</span></h2>
            <div class="text-2xl mb-10 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                <h3 class="font-bold accent-color text-4xl mb-3">Client-Side</h3>
                <p class="mb-3">
                    My basic client-side architecture was to have pages/notes.tsx be my Notes page/view component. It has three main subcomponents: a NoteCreator, a NotesSelector, and a NotesGrid.
                </p>

                <p class="mb-3">
                    The NotesGrid has NoteCard components which then in turn each have a NoteFormModal component to edit the notes. The NoteFormModal is also used/re-used by the NoteCreator component. The NoteFormModal calls out to a Redux action/thunk to do any data manipulations. Thus, our data layer logic is separate from our presentation layer and is encapsulated in our notes-slice.tsx file. Having our NoteFormModal use Redux to update a note was the way I chose to avoid prop drilling the notes data from back upwards from NoteModal → NoteCard → NoteGrid → Note.tsx to propagate the change when a note is updated. (You can look at this as prop drilling by passing a callback downwards too). Our NoteGrid takes in its notes data as a prop, however, thus potentially enabling future re-use of this component and also keeping it decoupled from what data it needs to display. This is in contrast to having the NoteGrid pull data from Redux itself, which would not be good design and would make the NoteGrid un-reusable and coupled to the specific data that it is supposed to present.
                </p>
                    
                <p class="mb-6">
                    The top level note.tsx / note page is responsible for wiring up the NoteGrid. It grabs data from the Redux store (initially using server-side rendering, and later on the client-side for updates) and passes it as a prop to the NoteGrid. The top level note.tsx / note page also contains a NoteSelector component which itself contains a SearchBar which will update the Redux store to add a search query. I wanted to keep the data logic encapsulated in notes-slice.tsx, so my SearchBar only job is to update Redux to set the search query.
                </p>
                    <h3 class="font-bold accent-color text-4xl mb-3">Server-Side</h3>
                    <p>
                        My server-side architecture was mostly fairly straightforward. In addition to using Next.js for SSR, I used NestJS conventions of controllers, entities, modules, resolvers (since I was using GraphQL), and services. The starter-kit I based my project on used Apollo and automatically generated my schema.gql file based on my entities and resolvers. Graphql-zeus allowed me to make TypeScript type safe queries to my graphql service. I stuck to best practices to keep my routes/controllers, services, and data layer decoupled.
                    </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Misc<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">ellaneous</span></h2>
            <div class="text-2xl mb-10 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                <p class="mb-3">
                    My notes page was built with accessibility in mind, and I tested it using VoiceOver on MacOS. The notes page can be easily operated using a screen reader by someone who is vision impaired.
                </p>

                <p class="mb-3">
                    I made “tags” an attribute of the note entity for simplicity. For a production grade application, I would have made tags a separate entity to keep data normalized.
                </p>
                    
                <p class="mb-3">
                    I used a hero element from Code Stitch. I could have rewritten it from scratch to use tailwind, BEM, or Web Components, but I didn't spend the time to do it, so the css styles are what they are. I did, however, tweak their styles to make sure the content stays centered and the hero background takes up a full screen.
                </p>
                    
                <p class="mb-3">
                    This TypeORM bug cost me a ton of development time, unfortunately, until I realized TypeORM itself was the problem. <a class="underline" href="https://github.com/typeorm/typeorm/issues/9761">https://github.com/typeorm/typeorm/issues/9761</a> TypeORM didn’t like the certificate that my AWS RDS database was using, despite me registering the certificate authority / certificate chain with TypeORM.
                </p>
                    
                <p class="mb-3">
                    If I had more time, I could probably have used a headless data table library with my own UI to get all sorts of filtering and sorting behavior for free. (ie filters and sorting ability on any attribute of a note, like the title, or the content, for instance, and filters like contains, doesn’t contain, starts with, doesn’t start with, ends with, doesn’t end with, etc etc. You could then use AND queries or OR queries to combine filters from different attributes.
                </p>
                <p class="mb-3">
                    ^ I actually made an open source contribution (found here: <a class="underline" href="https://github.com/kevinwheeler/primevue-datatables">https://github.com/kevinwheeler/primevue-datatables</a>) to the Savannabits/primevue-datatables library that does server-side pagination, filtering, and sorting in Laravel for the PrimeVue DataTable library (which I have of course also used), so I am familiar with using data table libraries.
                </p>
                <p class="mb-40">
                    During the follow-up interview, in regards to the application I submitted, the interviewer said "the team was impressed.. real impressed, actually."
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
