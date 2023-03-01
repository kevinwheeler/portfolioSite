import { createWebHistory, createRouter } from 'vue-router';
import * as Pages from './pages';

const routes = [
    {
        path: "/",
        name: "Home",
        component: Pages.Home,
        meta: { authorizationRequired: false },
    },
    {
        path: "/projects",
        name: "Projects",
        component: Pages.Projects,
    },
    {
        path: "/projects/baby-keyboard-smash-game",
        name: "BabyKeyboardSmashGame",
        component: Pages.KeyboardSmash,
    },
    {
        path: "/projects/density-iterator",
        name: "DensityIterator",
        component: Pages.DensityIterator,
    },
    {
        path: "/projects/geomesa-gui",
        name: "GeomesaGui",
        component: Pages.GeomesaGUI,
    },
    {
        path: "/projects/nothing-but-headlines",
        name: "NothingButHeadlines",
        component: Pages.NothingButHeadlines,
    },
    {
        path: "/projects/portfolio",
        name: "PortfolioSite",
        component: Pages.PortfolioSite,
    },
    {
        path: "/projects/translate-search",
        name: "TranslateSearch",
        component: Pages.TranslateSearch,
    },
    {
        path: "/projects/ubuntu-vps",
        name: "UbuntuVPS",
        component: Pages.UbuntuVPS,
    },
    {
        path: "/resume",
        name: "Resume",
        component: Pages.Resume,
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

export default router;