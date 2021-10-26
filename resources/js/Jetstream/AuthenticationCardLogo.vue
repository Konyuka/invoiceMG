<template>
    <Link :href="'/'">
        <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-teal-200-cyan-400.svg" alt="">
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
    })
</script>
