import { createWebHistory, createRouter } from 'vue-router';
import * as Pages from './pages';
import { nextTick } from 'vue';

// !! TITLES AND DESCRPTIONS ARE DUPLICATED/RELIED UPON IN WEB.PHP !!

const routes = [
    {
        path: "/",
        name: "Home",
        component: Pages.Home,
        meta: {
            title: 'Andrew Laboy\'s Unity and AR / VR / XR Portfolio',
            description: 'Andrew Laboy is a Unity developer specializing in augmented and virtual reality applications and games.'
        }
    },
    {
        path: "/projects",
        name: "Projects",
        component: Pages.Projects,
        meta: {
            title: 'All Projects',
            description: 'All of the projects in Andrew Laboy\'s portfolio.'
        }
    },
    {
        path: "/projects/ar-graffiti",
        name: "Graffiti",
        component: Pages.Graffiti,
        meta: {
            title: 'AR Graffiti Portfolio Project',
            description: 'Portfolio page for Andrew Laboy\'s AR Graffiti project.'
        }
    },
    {
        path: "/projects/dream-stream",
        name: "Graffiti",
        component: Pages.DreamStream,
        meta: {
            title: 'Dream Stream Portfolio Project',
            description: 'Portfolio page for Andrew Laboy\'s Dream Stream project.'
        }
    },
    {
        path: "/projects/hologram",
        name: "Hologram",
        component: Pages.Hologram,
        meta: {
            title: 'Realtime Hologram Portfolio Page',
            description: 'Portfolio page for Andrew Laboy\'s realtime hologram project.'
        }
    },
    {
        path: "/projects/multiplayer-painting",
        name: "MultiplayerPainting",
        component: Pages.MultiplayerPainting,
        meta: {
            title: 'Nothing But Headlines Portfolio Page',
            description: "Portfolio page for Kevin Wheeler's Nothing But Headlines project."
        }
    },
    // Resume route is being implemented by a v-show element in App.vue, so that the
    // PDF won't have to reload everytime the user revisits the Resume page. 
    {
        path: "/resume",
        name: "Resume",
        // Suppress the warning: [Vue Router warn]: Record with path "/resume" is either missing a "component(s)" or "children" property.
        component: {template: `<span style="display: none;"></span>`},
        meta: {
            title: "Andrew Laboy's Resume",
            description: "Andrew Laboy's Resume"
        }
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    //https://stackoverflow.com/questions/50449123/vue-js-scroll-to-top-of-page-for-same-route?answertab=trending#tab-top
    scrollBehavior() {
        document.getElementById('app').scrollIntoView({});
    }
});

router.beforeEach( (to, from, next) => {
    // console.log("Route: ", to);
    next(true);
});

router.afterEach(async (to, from) => {
    // Use next tick to handle router history correctly
    // see: https://github.com/vuejs/vue-router/issues/914#issuecomment-384477609
   await nextTick();
   document.title = to.meta.title;
   document.querySelector('meta[name="description"]').setAttribute("content", to.meta.description);
});

export default router;
