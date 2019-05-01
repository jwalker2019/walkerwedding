<template>
    <div class="fadeContent fadeIn giftContent">
        <h1>Registries</h1>
        <a href="https://www.amazon.com/wedding/jaycelyn-barten-taylor-walker-woodbine-june-2019/registry/3P9FXZ1SBJOWC" target="_blank"><img class="img-fluid" src="images/amazon-logo.png"></a><br>

        <a href="https://www.bedbathandbeyond.com/store/giftregistry/viewregistryguest/546803430" target="_blank"><img class="img-fluid" src="/images/bedbathbeyond-logo.png"></a><br><br>
        
        <a href="https://www.menards.com/main/registrydetail.html?registryId=95953536&lastName=WALKER" target="_blank"><img class="img-fluid" src="/images/menards-logo.png"></a><br><br><br>
        <h6>Cash gifts are also greatly appreciated <i class="far fa-smile-wink"></i></h6>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
    .kissBack {
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;
        height: 80vh;
    }

    .container-fluid {
        padding: 1rem;
    }

    img {
        margin: 1rem 0;
        width: 350px;
    }

    .giftContent {
        padding: 2.5rem 3rem;
    }

    h1 {
        margin-bottom: 2.5rem;
    }

    h6 {
        max-width: 520px;
        margin: auto;
    }


    

    @media (min-width: 768px) { 
        .kissBack {
            height: 100vh;
        }

        h6 {
            width: auto;
        }
    }


</style>