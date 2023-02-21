<!-- TODO add bounce on hover -->
<template>
<div class="flex flex-col flex-1 rounded-lg overflow-hidden">
    <a :href="`${href}`">
        <img class="flex-1" :src="`${imgSrc}`">
    </a>
    <div class="flex flex-col p-6 items-center bg-slate-800">
        <a :href="`${href}`">
            <h3 class="text-xl font-semibold">
                <slot name="headline"></slot>
            </h3>
        </a>
        <p class="mt-1 text-xs text-gray-400">
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
    props:['imgSrc', 'href'],
    setup(props) {
        return {}
    },
}
</script>