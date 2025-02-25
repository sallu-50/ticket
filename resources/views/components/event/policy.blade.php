<div class=" mt-8">
    <div class="row">
        <!-- Event Policy Section -->
        <div class="col-md-7">
            <div class="event-policy">
                <h1>EVENT POLICY</h1>
                <h2>1. Data Collection & Usage</h2>
                <p><strong>1.1</strong> Participants must provide accurate personal information (name, age,
                    contact details, etc.) during registration.</p>
                <p><strong>1.2</strong> The collected data will only be used for event-related purposes,
                    including communication, emergency response, and result processing.</p>
                <p><strong>1.3</strong> Sensitive personal data (e.g., health information) will be securely
                    handled and only shared with medical personnel if needed.</p>

                <h5>2. Data Protection & Security</h5>
                <p><strong>2.1</strong> All personal information will be stored securely and protected from
                    unauthorized access.</p>
                <p><strong>2.2</strong> Payment details will be processed through encrypted and secure
                    third-party payment gateways.</p>
                <p><strong>2.3</strong> Event organizers will not sell, trade, or share participants’ data with
                    third parties for marketing purposes.</p>

                <!-- Extra Content (Initially Hidden) -->
                <div class="extra-content">
                    <h5>3. Code of Conduct</h5>
                    <p><strong>3.1</strong> Participants must adhere to event guidelines and respect others.</p>
                    <p><strong>3.2</strong> Harassment, discrimination, or inappropriate behavior will not be
                        tolerated.</p>
                    <p><strong>3.3</strong> Violators may be removed from the event without a refund.</p>

                    <h5>4. Refund & Cancellation</h5>
                    <p><strong>4.1</strong> Refund requests must be submitted within 7 days of registration.</p>
                    <p><strong>4.2</strong> Cancellations after the deadline are non-refundable.</p>
                    <p><strong>4.3</strong> In case of event cancellation, full refunds will be issued.</p>
                </div>

                <a class="read-more" onclick="toggleReadMore()">READ MORE</a>
            </div>
        </div>

        <!-- Location Card Section -->
        <div class="col-md-5">
            <div class="location-card">
                <h2>Shanto Mariam & World University - Metro Track</h2>
                <p><i class="bi bi-geo-alt"></i> Uttara</p>
                <iframe width="100%" height="250" style="border:0;" loading="lazy" allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.openstreetmap.org/export/embed.html?bbox=90.3742,23.8751,90.4052,23.8851&layer=mapnik&marker=23.8801,90.3897">
                </iframe>
                <small><a href="https://www.openstreetmap.org" target="_blank">View Larger Map</a></small>
            </div>
        </div>
    </div>
</div>



<style>
    .event-policy p {
        font-size: 15px;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('.extra-content').style.display = "none"; // Hide content on load
    });

    function toggleReadMore() {
        var extraContent = document.querySelector('.extra-content');
        var readMoreBtn = document.querySelector('.read-more');

        if (extraContent.style.display === "none" || extraContent.style.display === "") {
            extraContent.style.display = "block";
            readMoreBtn.innerText = "READ LESS";
        } else {
            extraContent.style.display = "none";
            readMoreBtn.innerText = "READ MORE";
        }
    }
</script>
