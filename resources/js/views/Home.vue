<template>
    <div class="homeBack fadeContent fadeIn">
    <div style="background-image: url(/images/home.png);" class="homeBack">
    </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>

    .homeBack {
        background-size: cover;
        background-position: right center;
        background-repeat: no-repeat;
        height: 80vh;
    }

    @media (min-width: 768px) { 
        .homeBack {
            height: 100vh;
        }
    }
    
</style>
