<nav class="navbar navbar-expand-lg ">
    <div class="container" id="navbar-inner">
        <img src="{{ asset('resort-images/JYRasResort.png') }}" style="width: 50px; border-radius: 50%;" alt="">
      <a class="navbar-brand mx-3 text-white" href="/">Jyra's Resort</a>
      <button class="navbar-toggler d-lg-none align-self-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse  d-flex justify-content-end float-right" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                {{-- <a href="/make-reservation" class="mx-5 my-2 px-5 d-flex justify-content-center" id="book-btn">
                    Book Now
                </a> --}}

                <a class="nav-link mx-3" aria-current="page" href="/">
                    {{-- <i class="bi bi-house-door-fill"></i> --}}
                    <span class="text-white">Home</span>
                </a>
                <a class="nav-link mx-3" href="/contact-us">
                {{-- <i class="bi bi-telephone-fill"></i> --}}
                    <span class="text-white">Contact Us</span>
                </a>

            </div>
        </div>
    </div>
</nav>
<style>
#navbar-inner{
    background-color: transparent;
}
#book-btn {
        border-radius: 15px;
        border: 2px solid #0084ff;
        transition: 0.6s;
    }

    /* #book-btn:hover {
        background-color: #105697;
        color: white;

    } */
    .nav-link:hover {
        color: #5e54e7;
    }
</style>
