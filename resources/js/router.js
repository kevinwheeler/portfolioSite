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
        path: "/translate-search",
        name: "TranslateSearch",
        component: Pages.TranslateSearch,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

// project route guards
router.beforeEach( (to, from, next) => {
    console.log("Route:", to);
    next(true);
});

export default router;