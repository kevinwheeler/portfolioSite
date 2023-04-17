<!-- TODO add bounce on hover -->
<template>
<div :class="`flex flex-col flex-1 rounded-lg overflow-hidden hover:translate-y-1 ${classes}`">
    <router-link :to="`${href}`">
        <img class="flex-1" :src="`${imgSrc}`">
    </router-link>
    <div class="flex flex-col flex-1 p-6 items-center bg-slate-800">
        <router-link :to="`${href}`">
            <h3 class="text-xl font-semibold text-center">
                <slot name="headline"></slot>
            </h3>
        </router-link>
        <p class="mt-1 text-xs text-gray-400 text-center">
            <slot name="secondary-headline"></slot>
        </p>
        <p class="mt-2 text-sm">
            <slot name="paragraph"></slot>
        </p>
    </div>
</div>
</template>

<script>
export default {
    props:['imgSrc', 'href', 'classes'],
    setup(props) {
        return {}
    },
}
</script>