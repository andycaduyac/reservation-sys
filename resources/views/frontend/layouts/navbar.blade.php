<nav class="navbar navbar-expand-lg" style="background-color: rgb(71, 222, 233)">
    <div class="container">
      <a class="navbar-brand mx-3" href="/">Jyra's Resort</a>
      <button class="navbar-toggler d-lg-none align-self-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            {{-- <a href="/make-reservation" class="mx-5 my-2 px-5 d-flex justify-content-center" id="book-btn">
                Book Now
            </a> --}}
            <a class="nav-link mx-3" aria-current="page" href="/">
                {{-- <i class="bi bi-house-door-fill"></i> --}}
                <span>Home</span>
            </a>
            <a class="nav-link mx-3" href="/contact-us">
            {{-- <i class="bi bi-telephone-fill"></i> --}}
                <span>Contact Us</span>
            </a>

        </div>
      </div>
    </div>
</nav>
<style>
    #book-btn {
        border-radius: 15px;
        border: 2px solid #0084ff;
        transition: 0.6s;
    }

    #book-btn:hover {
        background-color: #2495ff;
        color: white;

    }
    .nav-link:hover {
        color: #0084ff;
    }
</style>
