<body id="page-top">
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
    </script>