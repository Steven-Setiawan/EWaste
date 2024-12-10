@extends('layout.layout')
@extends('components.navBarLanding')

@section('content')
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 class="display-4 text-primary">About Us</h1>
                <p class="lead text-muted">Learn more about our mission and how we help make the planet a cleaner place.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="about-us-section p-4 shadow-lg rounded-lg bg-white" data-aos="fade-right">
                    <h4 class="text-primary">Our Mission</h4>
                    <p>
                        We aim to provide sustainable solutions for the disposal of electronic waste. By offering
                        easy-to-use services, we ensure that old electronics are safely recycled, reducing the environmental
                        impact.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="about-us-section p-4 shadow-lg rounded-lg bg-white" data-aos="fade-left">
                    <h4 class="text-primary">Our Vision</h4>
                    <p>
                        Our vision is to become the leading platform for responsible e-waste disposal, enabling communities
                        to reduce their carbon footprint and contribute to a cleaner environment through a simple yet
                        impactful service.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-6 mb-4">
                <div class="about-us-section p-4 shadow-lg rounded-lg bg-white" data-aos="fade-up">
                    <h4 class="text-primary">Our Values</h4>
                    <p>
                        <strong>Eco-Friendliness</strong>: We prioritize sustainability in everything we do. <br>
                        <strong>Customer-Centricity</strong>: Your satisfaction is at the core of our mission. <br>
                        <strong>Innovation</strong>: We continuously improve our services for the betterment of the planet
                        and our customers.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="about-us-section p-4 shadow-lg rounded-lg bg-white" data-aos="fade-up">
                    <h4 class="text-primary">How We Work</h4>
                    <p>
                        We offer a simple process to dispose of your e-waste. Schedule a pick-up, and our team will ensure
                        that your electronic waste is safely collected and recycled. Our partners ensure all materials are
                        processed according to the highest standards.
                    </p>
                </div>
            </div>
        </div>

        <!-- Interactive FAQ Section -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <h3 class="text-primary mb-4">Frequently Asked Questions</h3>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is E-Waste?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                E-waste refers to discarded electrical or electronic devices that are no longer useful, such
                                as phones, computers, and televisions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How can I schedule a pick-up?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Simply go to our 'Schedule Pick-up' page and fill in the details for your e-waste. Our team
                                will contact you to arrange a convenient time.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('styles')
        <style>
            .about-us-section {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .about-us-section:hover {
                transform: translateY(-10px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            .text-primary {
                color: #007bff !important;
            }

            .accordion-button {
                font-size: 1.1rem;
            }
        </style>
    @endpush

    @push('scripts')
        <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true
            });
        </script>
    @endpush
