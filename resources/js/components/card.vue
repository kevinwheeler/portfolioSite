<template>
    <div class="flex flex-col flex-1">
        <img class="flex-1" :src="`${imgSrc}`">
        <div class="">
            <slot />
        </div>

    </div>
</template>

<script>
export default {
    props:['imgSrc'],
    setup(props) {
        return {}
    },
}
</script>