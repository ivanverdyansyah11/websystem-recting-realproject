<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Recting Application</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="<?= BASEURL; ?>assets/css/style.css" rel="stylesheet">
</head>

<style>
    .swiper-button-next,
    .swiper-button-prev {
        background-color: rgba(33, 37, 41, 1);
        width: 42px;
        height: 42px;
        border-radius: 9999px;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 1rem;
        color: white;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg py-3" style="background-color: rgba(24, 27, 25, 1); border-bottom: 1px solid rgba(255, 255, 255, 0.12);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= BASEURL; ?>">
                <img src="<?= BASEURL; ?>assets/img/brand-logo-danger.svg" alt="Brand Logo" class="img-fluid brand-logo" width="62">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex justify-content-between align-items-center w-100">
                    <a class="nav-link" href="<?= BASEURL; ?>">Home</a>
                    <form action="<?= BASEURL; ?>home/search" method="post">
                        <input type="text" class="input" placeholder="Searching movie.." style="width: 300px !important;" name="searching">
                    </form>
                    <?php if (empty($_SESSION['user'])) { ?>
                        <a class="nav-link" href="<?= BASEURL; ?>login">Login</a>
                    <?php } else { ?>
                        <form action="<?= BASEURL; ?>login/logout" method="post">
                            <button type="submit" class="nav-link">Logout</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>

    <main class="home mt-5">
        <div class="container">
            <section class="hero">
                <div class="swiper mySwiperHero">
                    <div class="swiper-wrapper">
                        <?php foreach ($data['movies_recent'] as $movie) { ?>
                            <div class="swiper-slide">
                                <div class="wrapper w-100 position-relative" style="aspect-ratio: 4/1.6;">
                                    <div class="wrapper-image w-100 d-flex align-items-center position-relative" style="aspect-ratio: 4/1; overflow: hidden;">
                                        <img src="<?= BASEURL ?>/assets/img/thumbnails/<?= $movie['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid w-100">
                                    </div>
                                    <div class="wrapper-content position-absolute bottom-0 start-50 translate-middle-x d-flex gap-4 align-items-center">
                                        <img src="<?= BASEURL ?>/assets/img/thumbnails/<?= $movie['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid rounded" width="240" style="aspect-ratio: 2.9/4;">
                                        <div class="wrapper">
                                            <h1 class="title mb-3"><?= $movie['title']; ?></h1>
                                            <h4 class="mb-0 subtitle">Watch the trailer</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next swiper-button-next-hero"></div>
                    <div class="swiper-button-prev swiper-button-prev-hero"></div>
                </div>
            </section>

            <section class="search" style="margin-top: 120px;">
                <h2 class="text-warning text-semibold">hasil Pencarian</h2>
                <p class="subtitle">Cari film favoritemu yang main</p>

                <div class="row mt-5">
                    <div class="col-12">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($data['movies_search'] as $movie) { ?>
                                    <div class="swiper-slide">
                                        <img src="<?= BASEURL ?>assets/img/thumbnails/<?= $movie['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid rounded" style="aspect-ratio: 2.9/4;">
                                        <div class="wrapper p-3 rounded-bottom" style="background-color: rgba(255,255,255,0.04);">
                                            <p class="text-light mb-0"><?= $movie['title']; ?> <span class="text-secondary">(<?= $movie['rating']; ?>)</span></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="recent" style="margin: 120px 0;">
                <h2 class="text-warning text-semibold">Terbaru Untukmu</h2>
                <p class="subtitle">Film populer terbaru hanya untukmu</p>

                <div class="row mt-5">
                    <div class="col-12">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($data['movies_recent'] as $movie) { ?>
                                    <div class="swiper-slide">
                                        <img src="<?= BASEURL ?>assets/img/thumbnails/<?= $movie['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid rounded" style="aspect-ratio: 2.9/4;">
                                        <div class="wrapper p-3 rounded-bottom" style="background-color: rgba(255,255,255,0.04);">
                                            <p class="text-light mb-0"><?= $movie['title']; ?> <span class="text-secondary">(<?= $movie['rating']; ?>)</span></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="favorite" style="margin: 120px 0;">
                <h2 class="text-warning text-semibold">Top 10 Film dari Recting</h2>
                <p class="subtitle">Kumpulan fIlm terbaik di bulan Oktober!</p>

                <div class="row mt-5">
                    <div class="col-12">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($data['movies_rating'] as $movie) { ?>
                                    <div class="swiper-slide">
                                        <img src="<?= BASEURL ?>assets/img/thumbnails/<?= $movie['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid rounded" style="aspect-ratio: 2.9/4;">
                                        <div class="wrapper p-3 rounded-bottom" style="background-color: rgba(255,255,255,0.04);">
                                            <p class="text-light mb-0"><?= $movie['title']; ?> <span class="text-secondary">(<?= $movie['rating']; ?>)</span></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiperHero", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next-hero",
                prevEl: ".swiper-button-prev-hero",
            },
        });

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>