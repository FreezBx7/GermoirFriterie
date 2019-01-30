<template>
    <div class="home">
        <menu-composition></menu-composition>
    </div>
</template>

<script>
    import MenuComposition from './MenuComposition/MenuComposition.vue';

    export default {
        created() {
            console.log('home');
        },
        components: {
            MenuComposition,
        },
    };
</script>
