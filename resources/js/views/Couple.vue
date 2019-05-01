<template>
    <div class="fadeContent fadeIn">
        <div class="row simpleRow" id="acc">
            <div class="col-lg-4 section">
                <h1>Groom</h1>
                <br>
                <h6>Taylor Walker</h6>
                <br>
                <img src="/images/groom.png" class="img-fluid">
                <br><br>
                <i class="far fa-caret-square-down" data-toggle="collapse" data-target="#groomBio"></i>
            </div>
            <div class="collapse col-12 order-lg-12 bio" id="groomBio" data-parent="#acc">
                <div class="bioInner">
                    <p>
                        <b>Taylor</b> grew up in Tescott, KS
                    </p>
                    <p>
                        Delivery Driver at Taco Shop &#38; Behavioral Tech at KVC Wheatland Hospital
                    </p>
                    <p>
                        &#9702; Enjoys long, romantic walks to the movie theater<br>
                        &#9702; Has yet to meet a pizza he didn't like (pineapple and all)<br>
                        &#9702; Always has an eye-rolling dad joke up his sleeve<br>
                        &#9702; Loves Jaycelyn very much
                    </p>
                </div>
            </div>
            <div class="col-lg-4 section">
                <h1>Bride</h1>
                <br>
                <h6>Jaycelyn Barten</h6>
                <br>
                <img src="/images/bride.png" class="img-fluid">
                <br><br>
                <i class="far fa-caret-square-down" data-toggle="collapse" data-target="#brideBio"></i>
            </div>
            <div class="collapse col-12 order-lg-12 bio" id="brideBio" data-parent="#acc">
                <div class="bioInner">
                    <p>
                        <b>Jaycelyn</b> grew up in Woodbine, KS
                    </p>
                    <p>
                        Web Developer
                    </p>
                    <p>
                        &#9702; Avid listener of broadway showtunes &#38; 90's country music<br>
                        &#9702; Netflix marathoner patiently awaiting the next season of Black Mirror<br>
                        &#9702; Doting dog mom to a cute, ornery rascal named Coulson<br>
                        &#9702; Loves Taylor very much
                    </p>
                </div>
            </div>
            <div class="col-lg-4 section">
                <h1>Love Story</h1>
                <br>
                <h6>Our Favorite</h6>
                <br>
                <img src="/images/ring.png" class="img-fluid">
                <br><br>
                <i class="far fa-caret-square-down" data-toggle="collapse" data-target="#loveStory"></i>
            </div>
            <div class="collapse col-12 order-lg-12 bio" id="loveStory" data-parent="#acc">
                <div class="bioInner">
                    <p>
                        <b>Our love story</b> began when we met at Fort Hays State University 
                    </p>
                    <p>
                        11/22/2011: First official date
                    </p>
                    <p>
                        Got to know one another over countless hours at the movies, trips to the lake, and delicious Taco Shop dinners
                    </p>
                    <p>
                        12/02/2017: Engaged! (finally)
                    </p>
                    <p>
                        We are beyond excited for the big day to arrive, and to celebrate the next chapter of our lives together
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>

    .section {
        padding-top: 2.5rem;
        padding-bottom: 2rem;
    }

    .bioInner {
        padding: 2em;
        text-align: left;
    }

    img {
        width: 60px; 
    }

    i {
        font-size: 1.8rem;
        color: #0051ba;
    }

    p {
        margin-bottom: 1.6em;
    }

    @media (min-width: 992px) { 
        .section {
            border-left: 1px solid #CCCCCC;
            padding-bottom: 2.5rem;
        }

        p {
            text-align: left;
        }
    }

</style>