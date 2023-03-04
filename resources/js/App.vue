<template>

<layout>
    <router-view></router-view>
    <!-- This route string is duplicated/relied upon in router.js -->
    <!-- Using v-show instead of a traditional route so that the PDF doesn't have
         to reload every time we navigate to the resume page. -->
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
