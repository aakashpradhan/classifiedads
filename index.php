<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classified Ads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="container-fluid text-center py-5">
        <div class="container search p-5 w-50 bg-success text-light text-center rounded-5 my-5">
            <h2 class="mb-5">What are You Looking for Today?</h2>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search Listings..." aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </section>

    <section class="categories container-fluid text-center bg-light py-5">
        <h2 class="text-center mb-5">Categories</h2>

        <div class="row container text-center mx-auto mb-3 d-flex justify-content-center">
            <div class="col-md-2">
                <div class="card bg-primary text-center">
                    <i class="text-white bi bi-house-door fs-1 my-3"></i>
                    <p class="text-white">Real Estate</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card bg-primary text-center">
                    <i class="text-white bi bi-briefcase fs-1 my-3"></i>
                    <p class="text-white">Jobs</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card bg-primary text-center">
                    <i class="text-white bi bi-car-front fs-1 my-3"></i>
                    <p class="text-white">Vehicles</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card bg-primary text-center">
                    <i class="text-white bi bi-phone fs-1 my-3"></i>
                    <p class="text-white">Electronics</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card bg-primary text-center">
                    <i class="text-white bi bi-lamp fs-1 my-3"></i>
                    <p class="text-white">Home & Furniture</p>
                </div>
            </div>
        </div>
        <div class="row container text-center mx-auto d-flex justify-content-center">
            <div class="col-md-2">
                <div class="card bg-primary text-center">
                    <i class="text-white bi bi-tools fs-1 my-3"></i>
                    <p class="text-white">Services</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card bg-primary text-center">
                    <i class="text-white bi bi-handbag fs-1 my-3"></i>
                    <p class="text-white">Fashion & Accessories</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card bg-primary text-center">
                    <i class="text-white bi bi-book fs-1 my-3"></i>
                    <p class="text-white">Education & Courses</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card bg-primary text-center">
                    <i class="text-white bi bi-heart-pulse fs-1 my-3"></i>
                    <p class="text-white">Health & Fitness</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card bg-primary text-center">
                    <i class="text-white bi bi-music-note-beamed fs-1 my-3"></i>
                    <p class="text-white">Events & Entertainment</p>
                </div>
            </div>
        </div>


    </section>

    <section class="container listings py-5">
        <h2 class="text-center mb-5">Latest Listings</h2>

        <div class="row mb-5">
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://placehold.co/600x400/EEE/31343C" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://placehold.co/600x400/EEE/31343C" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://placehold.co/600x400/EEE/31343C" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://placehold.co/600x400/EEE/31343C" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://placehold.co/600x400/EEE/31343C" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://placehold.co/600x400/EEE/31343C" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://placehold.co/600x400/EEE/31343C" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://placehold.co/600x400/EEE/31343C" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>