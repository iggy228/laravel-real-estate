<div>
    <nav class="navbar navbar-expand-md bg-white">
        <div class="logo-section col-12 col-md-4 d-flex justify-content-between">
            <a href="/" class="navbar-brand logo">
                <b>Real</b>Estate
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-primary"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-between col-12 col-md-8" id="navbarContent">
            <!-- Links -->
            <ul class="navbar-nav align-items-stretch">
                <li class="nav-item text-center">
                    <a class="nav-link active" aria-current="page" href="/">Buy</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="#">Sell</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="#">Rent</a>
                </li>
            </ul>
            <!-- Actions -->
            <div class="row px-3">
                <button class="btn btn-primary rounded-pill col-md col px-3 py-2">
                    <i class="fa fa-plus me-3"></i>
                    <span class="text-white">Add Listing</span>
                </button>
                <button class="button col-auto">
                    <img class="profile-btn-img" src="{{ asset('assets/images/avatar.png') }}" alt="profile menu">
                </button>
            </div>
        </div>
    </nav>
</div>
