<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Collection Film Page | Recting Application</title>

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
                        <div class="flasher-wrap w-100">
                            <?php Flasher::flash(); ?>
                        </div>
                        <div class="wrapper d-flex justify-content-between align-items-center mb-4">
                            <h4 class="title mb-0">Edit Collection Film</h4>
                        </div>
                        <form class="form" action="<?= BASEURL; ?>film/editAction/<?= $data['movie']['id']; ?>" method="post" enctype='multipart/form-data'>
                            <div class="row mb-3">
                                <div class="col-3">
                                    <div class="form-group">
                                        <img src="<?= BASEURL ?>assets/img/thumbnails/<?= $data['movie']['thumbnail'] ?>" alt="Image Not Found" class="img-fluid mb-3 tag-thumbnail w-100">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input input-thumbnail" id="inputThumbnail" name="thumbnail" style="position: absolute; top: -100px; left: -100px; opacity: 0;">
                                            <label class="button-reverse-small" for="inputThumbnail">Choose Thumbnail</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3 d-flex flex-column">
                                        <label for="title">Title</label>
                                        <input type="text" class="input" id="title" name="title" required placeholder="Enter your title.." value="<?= $data['movie']['title'] ?>">
                                    </div>
                                    <div class="input-group mb-3 d-flex flex-column">
                                        <label for="actor">Actor</label>
                                        <input type="text" class="input" id="actor" name="actor" required placeholder="Enter your actor.." value="<?= $data['movie']['actor'] ?>">
                                    </div>
                                    <div class="input-group mb-3 d-flex flex-column">
                                        <label for="producer">Producer</label>
                                        <input type="text" class="input" id="producer" name="producer" required placeholder="Enter your producer.." value="<?= $data['movie']['producer'] ?>">
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="input-group d-flex flex-column">
                                                <label for="year_release">Year Release</label>
                                                <input type="number" class="input" id="year_release" name="year_release" required placeholder="Enter your year release.." value="<?= $data['movie']['year_release'] ?>">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group d-flex flex-column">
                                                <label for="rating">Rating</label>
                                                <input type="text" class="input" id="rating" name="rating" required placeholder="Enter your rating.." value="<?= $data['movie']['rating'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group d-flex flex-column">
                                            <label for="trailer">Trailer</label>
                                            <input type="text" class="input" id="trailer" name="trailer" required placeholder="Enter your trailer.." value="<?= $data['movie']['trailer'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group d-flex flex-column">
                                        <label for="sinopsis">Sinopsis</label>
                                        <textarea type="text" class="input" id="sinopsis" name="sinopsis" required placeholder="Enter your sinopsis.." rows="4"><?= $data['movie']['sinopsis'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 d-flex gap-2">
                                    <button type="submit" class="button-primary-small d-flex gap-2 align-items-center">
                                        <i class="fa-regular fa-circle-check fa-sm"></i>
                                        Save Changes
                                    </button>
                                    <a href="<?= BASEURL; ?>film" class="button-reverse-small d-flex gap-2 align-items-center">
                                        <i class="fa-regular fa-circle-xmark fa-sm"></i>
                                        Cancel Edit
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        const tagThumbnail = document.querySelector('.tag-thumbnail');
        const inputThumbnail = document.querySelector('.input-thumbnail');

        inputThumbnail.addEventListener('change', function() {
            tagThumbnail.src = URL.createObjectURL(inputThumbnail.files[0]);
        });
    </script>
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
                        <h3>Edit Koleksi Film</h3>
                    </div>
                    <form action="<?= BASEURL; ?>film/editAction/<?= $data['movie']['id']; ?>" method="post" enctype='multipart/form-data'>
                        <div class="row mb-3">
                            <div class="col-3">
                                <div class="form-group">
                                    <img src="<?= BASEURL ?>img/thumbnails/<?= $data['movie']['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid mb-3 tag-thumbnail" width="150">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input input-thumbnail" id="inputThumbnail" name="thumbnail">
                                        <label class="custom-file-label" for="inputThumbnail">Pilih Thumbnail</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control mb-3" placeholder="Judul" required name="title" value="<?= $data['movie']['title']; ?>">
                                <input type="text" class="form-control mb-3" placeholder="Sutradara" required name="actor" value="<?= $data['movie']['actor']; ?>">
                                <input type="text" class="form-control mb-3" placeholder="Aktor" required name="producer" value="<?= $data['movie']['producer']; ?>">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <input type="number" class="form-control" placeholder="Tahun Rilis" required name="year_release" value="<?= $data['movie']['year_release']; ?>">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Rating" required name="rating" value="<?= $data['movie']['rating']; ?>">
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Trailer" required name="trailer" value="<?= $data['movie']['trailer']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea class="form-control" placeholder="Sinopsis" rows="4" required name="sinopsis"><?= $data['movie']['sinopsis']; ?></textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="<?= BASEURL; ?>film" class="btn btn-secondary">Batal Edit</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script>
        const tagThumbnail = document.querySelector('.tag-thumbnail');
        const inputThumbnail = document.querySelector('.input-thumbnail');

        inputThumbnail.addEventListener('change', function() {
            tagThumbnail.src = URL.createObjectURL(inputThumbnail.files[0]);
        });
    </script> -->