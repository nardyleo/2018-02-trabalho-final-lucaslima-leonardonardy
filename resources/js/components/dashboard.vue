<template>
    <div id="dashboard">
        <cabecalho></cabecalho>
        <corpo></corpo>
    </div>
</template>
<script>
    import Cabecalho from './padrao/cabecalho-dashboard.vue'
    import Corpo from './padrao/corpo-dashboard.vue'

    export default {
        components: {
            Cabecalho,
            Corpo
        }
    }
</script>
