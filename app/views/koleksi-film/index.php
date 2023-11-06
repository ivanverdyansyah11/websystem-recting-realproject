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
                    <div class="flasher-wrap w-100 mb-4">
                        <?php Flasher::flash(); ?>
                    </div>
                    <div class="wrapper d-flex justify-content-between align-items-center mb-4">
                        <h3>Daftar Koleksi Film</h3>
                        <a href="<?= BASEURL; ?>/film/tambah" class="btn btn-primary">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Sampul Film</th>
                                <th scope="col">Judul Film</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['movies'] as $i => $movie) { ?>
                                <tr>
                                    <th><?= $i + 1 ?></th>
                                    <td>
                                        <img src="<?= BASEURL ?>img/thumbnails/<?= $movie['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid" width="100">
                                    </td>
                                    <td><?= $movie['title']; ?></td>
                                    <td class="d-flex" style="gap: 8px;">
                                        <a href="<?= BASEURL; ?>film/detail/<?= $movie['id']; ?>" class="d-inline-block btn btn-info">Detail</a>
                                        <a href="<?= BASEURL; ?>film/edit/<?= $movie['id']; ?>" class="d-inline-block btn btn-warning">Edit</a>
                                        <form action="<?= BASEURL; ?>film/hapusAction/<?= $movie['id']; ?>" method="post">
                                            <button type="submit" class="d-inline-block btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>