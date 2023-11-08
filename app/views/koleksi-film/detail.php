<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Collection Film Page | Recting Application</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="<?= BASEURL; ?>assets/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e5ccf98c71.js" crossorigin="anonymous"></script>
</head>

<body>

    <main class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 p-0">
                    <div class="sidebar d-flex flex-column align-items-center">
                        <img src="<?= BASEURL; ?>assets/img/brand-logo.svg" alt="Brand Logo" class="img-fluid brand-logo">
                        <div class="sidebar-items d-flex flex-column gap-2 w-100">
                            <a href="<?= BASEURL; ?>film" class="item-link">Collection Film</a>
                        </div>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="topbar d-flex justify-content-end">
                        <div class="wrapper-image">
                            <img src="<?= BASEURL; ?>assets/img/undraw_profile.svg" alt="Profile Image" class="img-fluid profile-image">
                        </div>
                    </div>
                    <div class="content-dashboard">
                        <div class="wrapper d-flex justify-content-between align-items-center mb-4">
                            <h4 class="title mb-0">Detail Collection Film</h4>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                <div class="form-group">
                                    <img src="<?= BASEURL ?>assets/img/thumbnails/<?= $data['movie']['thumbnail'] ?>" alt="Image Not Found" class="img-fluid mb-3 tag-thumbnail w-100">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3 d-flex flex-column">
                                    <label for="title">Title</label>
                                    <input type="text" class="input" id="title" name="title" placeholder="Enter your title.." readonly value="<?= $data['movie']['title'] ?>">
                                </div>
                                <div class="input-group mb-3 d-flex flex-column">
                                    <label for="actor">Actor</label>
                                    <input type="text" class="input" id="actor" name="actor" placeholder="Enter your actor.." readonly value="<?= $data['movie']['actor'] ?>">
                                </div>
                                <div class="input-group mb-3 d-flex flex-column">
                                    <label for="producer">Producer</label>
                                    <input type="text" class="input" id="producer" name="producer" placeholder="Enter your producer.." readonly value="<?= $data['movie']['producer'] ?>">
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="input-group d-flex flex-column">
                                            <label for="year_release">Year Release</label>
                                            <input type="number" class="input" id="year_release" name="year_release" placeholder="Enter your year release.." readonly value="<?= $data['movie']['year_release'] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group d-flex flex-column">
                                            <label for="rating">Rating</label>
                                            <input type="text" class="input" id="rating" name="rating" placeholder="Enter your rating.." readonly value="<?= $data['movie']['rating'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group d-flex flex-column">
                                        <label for="trailer">Trailer</label>
                                        <input type="text" class="input" id="trailer" name="trailer" placeholder="Enter your trailer.." readonly value="<?= $data['movie']['trailer'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group d-flex flex-column">
                                    <label for="sinopsis">Sinopsis</label>
                                    <textarea type="text" class="input" id="sinopsis" name="sinopsis" placeholder="Enter your sinopsis.." rows="4" readonly><?= $data['movie']['sinopsis'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 d-flex gap-2">
                                <a href="<?= BASEURL; ?>film" class="button-reverse-small d-flex gap-2 align-items-center">
                                    <i class="fa-solid fa-angles-left fa-sm"></i>
                                    Back to Page
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<!-- <body id="page-top">
    <div id="wrapper" style="width: 100%;">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <img src="<?= BASEURL; ?>img/undraw_profile.svg" alt="Profile Image" class="img-fluid ml-auto" width="42">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>
                <div class="container-fluid">
                    <div class="wrapper d-flex justify-content-between align-items-center mb-4">
                        <h3>Detail Koleksi Film</h3>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <div class="form-group">
                                <img src="<?= BASEURL ?>img/thumbnails/<?= $data['movie']['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid mb-3" width="150">
                            </div>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-3" placeholder="Judul" readonly name="title" value="<?= $data['movie']['title']; ?>">
                            <input type="text" class="form-control mb-3" placeholder="Sutradara" readonly name="actor" value="<?= $data['movie']['actor']; ?>">
                            <input type="text" class="form-control mb-3" placeholder="Aktor" readonly name="producer" value="<?= $data['movie']['producer']; ?>">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <input type="number" class="form-control" placeholder="Tahun Rilis" readonly name="year_release" value="<?= $data['movie']['year_release']; ?>">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Rating" readonly name="rating" value="<?= $data['movie']['rating']; ?>">
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Trailer" readonly name="trailer" value="<?= $data['movie']['trailer']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea class="form-control" placeholder="Sinopsis" rows="4" readonly name="sinopsis"><?= $data['movie']['sinopsis']; ?></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <a href="<?= BASEURL; ?>film" class="btn btn-secondary">Kembali ke Halaman</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a> -->