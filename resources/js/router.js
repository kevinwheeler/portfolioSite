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
            title: 'Kevin Wheeler\'s Software/Web Development Portfolio',
            description: 'Kevin Wheeler is a software and web developer with experience in Spring, Laravel, Node.js, React, Vue.js, Backbone.js, Java, JavaScript, PHP, Python, C++, Scala, HTML, and CSS among many other technologies listed on his resume. Kevin graduated with highest honors from UT Austin with a B.S. in Computer Science.'
        }
    },
    {
        path: "/projects",
        name: "Projects",
        component: Pages.Projects,
        meta: {
            title: 'All Projects',
            description: 'All of the projects in Kevin Wheeler\'s web development portfolio.'
        }
    },
    {
        path: "/projects/baby-keyboard-smash-game",
        name: "BabyKeyboardSmashGame",
        component: Pages.KeyboardSmash,
        meta: {
            title: 'Baby Keyboard Smash Game Porfolio Page',
            description: 'Portfolio page for Kevin Wheeler\'s Baby Keyboard Smash Game.'
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
        path: "/projects/geomesa-gui",
        name: "GeomesaGui",
        component: Pages.GeomesaGUI,
        meta: {
            title: 'GeoMesa GUI Portfolio Page',
            description: 'Portfolio page for Kevin Wheeler\'s GeoMesa GUI open source contribution.'
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
    {
        path: "/projects/portfolio",
        name: "PortfolioSite",
        component: Pages.PortfolioSite,
        meta: {
            title: 'Portfolio Page for Portfolio Project',
            description: 'Portfolio page for Kevin Wheeler\'s Portfolio project.'
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
        path: "/projects/hologram",
        name: "Hologram",
        component: Pages.Hologram,
        meta: {
            title: 'Realtime Hologram Portfolio Page',
            description: 'Portfolio page for Andrew Laboy\'s realtime hologram project.'
        }
    },
    {
        path: "/projects/ubuntu-vps",
        name: "UbuntuVPS",
        component: Pages.UbuntuVPS,
        meta: {
            title: 'Ubuntu VPS Portfolio Page',
            description: 'Portfolio page for Kevin Wheeler\'s Ubuntu VPS project.'
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
            title: "Kevin Wheeler's Resume",
            description: "Kevin Wheeler's Resume"
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
