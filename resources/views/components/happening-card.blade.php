<div class="container-xl mt-8">
    <div class=" ">
        <h1 class="text-center fw-bolder display-6 my-6 text-uppercase">HAPPENING EVENTS</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm ">
                    <a href="{{ route('features_details') }}">

                        <div class="img-responsive img-responsive-16x9 card-img-top"
                            style="background-image: url('https://picsum.photos/1000/300')"></div>

                    </a>
                    <div class="card-body ">
                        <h3 class="card-title">
                            <a href="#">How do you know she is a witch?</a>
                        </h3>
                        <div class="text-secondary d-flex gap-6">
                            <div class="d-flex gap-2">
                                <x-tabler-category />
                                <p>Concert</p>

                            </div>
                            <div>
                                <p>place name</p>
                            </div>
                        </div>



                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h2>Happening on</h2>
                                february 20th
                            </div>
                            <div class="col-6">
                                <h2>Organized By</h2>
                                The Space & Shahbaz Foundation
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h2> <x-tabler-map-pin /> Location : Dhaka</h2>
                            </div>
                        </div>




                    </div>

                    <div class="card-footer">
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary"><x-tabler-ticket /> Buy Ticket</a>
                            <a href="#" class=" ms-auto mt-2">know more <x-tabler-arrow-right /></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
            <a class="font-bold text-center btn btn-light p-2" href="">See More Events</a>
        </div>



    </div>

</div>
