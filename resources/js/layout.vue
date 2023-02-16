<template>
    in layout
    <div class="flex min-h-screen">
      <div class="h-full w-full overflow-auto">
       <slot />
      </div>
    </div>
</template>

<script>
import { useRoute } from 'vue-router'
import { reactive } from "vue";

export default {
    components: {
        
    },
    setup() {
        const route = useRoute();

        return {
            route
        }
    }
}
</script>