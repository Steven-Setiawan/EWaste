<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 mb-3">
                <h5 class="text-uppercase">Founder</h5>
                <ul class="list-unstyled">
                    <li>Fendi Willyanto</li>
                    <li>Steven Jimmy Setiawan</li>
                    <li>Howen Antonio</li>
                    <li>Aldika Danendra</li>
                    <li>Dario Lyman</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 mb-3">
                <h5 class="text-uppercase">About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel urna nulla. Fusce varius nisi at massa venenatis, eget tempor velit cursus.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <h5 class="text-uppercase">Follow Us</h5>
                <ul class="list-unstyled d-flex">
                    <li class="me-3"><a href="#" class="text-white fs-4"><i class="bi bi-facebook"></i></a></li>
                    <li class="me-3"><a href="#" class="text-white fs-4"><i class="bi bi-twitter"></i></a></li>
                    <li class="me-3"><a href="#" class="text-white fs-4"><i class="bi bi-instagram"></i></a></li>
                    <li class="me-3"><a href="#" class="text-white fs-4"><i class="bi bi-linkedin"></i></a></li>
                </ul>
            </div>
        </div>

        <hr class="my-4">

        <div class="row">
            <div class="col text-center">
                <p>&copy; {{ date('Y') }} E-Waste Management. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

{{-- Add your custom styles for the footer if needed --}}
@push('styles')
    <style>
        footer {
            background-color: #343a40;
        }

        footer a {
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .fs-4 {
            font-size: 1.5rem;
        }
    </style>
@endpush
