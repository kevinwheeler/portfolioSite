<template>

<layout>
    <router-view></router-view>
    <Resume v-show="$route.path == '/resume'" />
</layout>
</template>

<script>
import Layout from './layout.vue'
import * as Pages from './pages';
const Resume = Pages.Resume;
export default {
    components: {
        Layout, Resume
    },
    setup() {
        return {}
    }
}
</script>
