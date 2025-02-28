<x-filament-widgets::widget>
    <x-filament::section>
        <div class="container">
            <div class="row">
                @for ($i = 0; $i < 2; $i++)
                    <div class="col-lg-6 col-md-12">
                        <div class="ticket d-flex shadow-lg">
                            <div class="ticket-left">
                                <h1 class="fw-bold">MUSIC FESTIVAL</h1>
                                <div>
                                    <span class="info-box">123 ANYWHERE ST., ANY CITY</span>
                                    <span class="info-box">JAN 25</span>
                                    <span class="info-box">07:00 PM</span>
                                </div>
                                <div>
                                    <span class="info-box">PRICE: $12</span>
                                </div>
                            </div>
                            <div class="ticket-right">
                                <span class="barcode">TICKET NUMBER:<br> 0123456789</span>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <style>
            .ticket {
                max-width: 900px;
                margin: 20px auto;
                display: flex;
                border-radius: 10px;
                overflow: hidden;
                background-color: #000;
                color: #f5c488;
                padding: 20px;
            }

            .ticket-left {
                flex: 2;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: flex-start;
            }

            .ticket-right {
                flex: 1;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .barcode {
                writing-mode: vertical-rl;
                transform: rotate(180deg);
                font-size: 18px;
                letter-spacing: 5px;
                color: #fff;
                text-align: center;
            }

            .info-box {
                border: 2px solid #f5c488;
                padding: 5px 15px;
                border-radius: 20px;
                display: inline-block;
                margin: 5px;
                font-weight: bold;
            }

            @media (max-width: 768px) {
                .ticket {
                    flex-direction: column;
                }
            }
        </style>

    </x-filament::section>
</x-filament-widgets::widget>
