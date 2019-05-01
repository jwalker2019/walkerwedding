<template>
    <div class="fadeContent fadeIn">
        <iframe src="https://www.youtube.com/embed/K517mu0fdqg" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
    .fadeContent {
        padding: 3rem 2rem;
    }

    iframe {
        min-height: 200px;
        max-height: 600px;
        height: 75vh;
        width: 100%;
    }

    @media (min-width: 768px) { 
        .fadeContent {
            height: 100vh;
        }

        iframe {
            height: 100%;
        }
    }

</style>
