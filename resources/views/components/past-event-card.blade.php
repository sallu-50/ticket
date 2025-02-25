<style>
    /* Keyframe animation for zoom effect */
    @keyframes zoomEffect {

        0%,
        100% {
            transform: scale(1);
        }

        30%,
        70% {
            transform: scale(0.9);
        }
    }

    /* Apply animation to cards */
    .card-zoom {
        animation: zoomEffect 6s infinite ease-in-out;
    }

    /* Delay for each card so they zoom one after another */
    .card-zoom:nth-child(1) {
        animation-delay: 0s;
    }

    .card-zoom:nth-child(2) {
        animation-delay: 2s;
    }

    .card-zoom:nth-child(3) {
        animation-delay: 4s;
    }
</style>

<div class="container-xl mt-8">
    <div class="">
        <h1 class="text-start fw-bolder display-6 my-6 text-uppercase">Past Events</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card card-zoom shadow-sm ">
                    <a href="{{ route('features_details') }}">

                        <div class="img-responsive img-responsive-16x9 card-img-top"
                            style="background-image: url('https://picsum.photos/1000/300')"></div>

                    </a>
                    <div class="card-body ">
                        <h2 class="">
                            <a href="#">How do you know she is a witch?</a>
                        </h2>
                        <h3>
                            <a href="#">How do you is a witch?</a>

                        </h3>


                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-zoom shadow-sm ">
                    <a href="{{ route('features_details') }}">

                        <div class="img-responsive img-responsive-16x9 card-img-top"
                            style="background-image: url('https://picsum.photos/1000/300')"></div>

                    </a>
                    <div class="card-body ">
                        <h2 class="">
                            <a href="#">How do you know she is a witch?</a>
                        </h2>
                        <h3>
                            <a href="#">How do you is a witch?</a>

                        </h3>


                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-zoom shadow-sm ">
                    <a href="{{ route('features_details') }}">

                        <div class="img-responsive img-responsive-16x9 card-img-top"
                            style="background-image: url('https://picsum.photos/1000/300')"></div>

                    </a>
                    <div class="card-body ">
                        <h2 class="">
                            <a href="#">How do you know she is a witch?</a>
                        </h2>
                        <h3>
                            <a href="#">How do you is a witch?</a>

                        </h3>


                    </div>
                </div>
            </div>



        </div>
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
            <a class="font-bold text-center btn btn-light p-2" href="">See More Events</a>
        </div>



    </div>

</div>
