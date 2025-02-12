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

<div class="my-6">
    <h1 class="font-bold my-4">Past Events</h1>
    <div class="d-flex gap-4">
        <!-- Card 1 -->
        <div class="card card-zoom d-flex flex-column">
            <a href="#">
                <img class="card-img-top" src="https://picsum.photos/1000/500?text=1" alt="" />
            </a>
            <div class="card-body d-flex flex-column">
                <h3 class="card-title">
                    <a href="#">How do you know she is a witch?</a>
                </h3>
                <div class="text-secondary">Are you suggesting she's a witch?</div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card d-flex card-zoom flex-column">
            <a href="#">
                <img class="card-img-top" src="https://picsum.photos/1000/500?text=2" alt="" />
            </a>
            <div class="card-body d-flex flex-column">
                <h3 class="card-title">
                    <a href="#">The Knight’s Tale</a>
                </h3>
                <div class="text-secondary">A medieval adventure story.</div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card d-flex card-zoom flex-column">
            <a href="#">
                <img class="card-img-top" src="https://picsum.photos/1000/500?text=3" alt="" />
            </a>
            <div class="card-body d-flex flex-column">
                <h3 class="card-title">
                    <a href="#">The Holy Grail Quest</a>
                </h3>
                <div class="text-secondary">A journey to find the sacred relic.</div>
            </div>
        </div>
    </div>
</div>
