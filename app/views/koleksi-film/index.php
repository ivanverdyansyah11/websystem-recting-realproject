<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection Film Page | Recting Application</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="<?= BASEURL; ?>assets/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e5ccf98c71.js" crossorigin="anonymous"></script>
</head>

<body>

    <main class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 p-0">
                    <div class="sidebar d-flex flex-column align-items-center bg-danger">
                        <img src="<?= BASEURL; ?>assets/img/brand-logo-light.svg" alt="Brand Logo" class="img-fluid brand-logo">
                        <div class="sidebar-items d-flex flex-column gap-2 w-100">
                            <a href="<?= BASEURL; ?>film" class="item-link">Collection Film</a>
                        </div>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="topbar d-flex justify-content-end bg-warning align-items-center gap-3">
                        <p class="mb-0 username"><?= $_SESSION['user']['username'] ?></p>
                        <div class="wrapper-image">
                            <img src="<?= BASEURL; ?>assets/img/undraw_profile.svg" alt="Profile Image" class="img-fluid profile-image">
                        </div>
                    </div>
                    <div class="content-dashboard">
                        <div class="flasher-wrap w-100">
                            <?php Flasher::flash(); ?>
                        </div>
                        <div class="wrapper d-flex justify-content-between align-items-center mb-4">
                            <h4 class="title mb-0">List All Collection Film</h4>
                            <a href="<?= BASEURL; ?>/film/tambah" class="button-primary-small d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-plus fa-sm"></i>
                                Add New
                            </a>
                        </div>
                        <table class="w-100">
                            <tbody>
                                <tr>
                                    <td>No.</td>
                                    <td>Thumbnail</td>
                                    <td>Title</td>
                                    <td></td>
                                </tr>
                                <?php foreach ($data['movies'] as $i => $movie) { ?>
                                    <tr>
                                        <td><?= $i + 1 ?></td>
                                        <td><img src="<?= BASEURL ?>assets/img/thumbnails/<?= $movie['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid" width="100"></td>
                                        <td><?= $movie['title']; ?></td>
                                        <td>
                                            <div class="wrapper d-flex gap-2">
                                                <a href="<?= BASEURL; ?>film/detail/<?= $movie['id']; ?>" class="d-inline-block button-reverse-small d-flex align-items-center gap-2">
                                                    <i class="fa-regular fa-eye fa-sm"></i>
                                                    Detail
                                                </a>
                                                <a href="<?= BASEURL; ?>film/edit/<?= $movie['id']; ?>" class="d-inline-block button-reverse-small d-flex align-items-center gap-2">
                                                    <i class="fa-regular fa-pen-to-square fa-sm"></i>
                                                    Edit
                                                </a>
                                                <a href="<?= BASEURL; ?>film/hapusAction/<?= $movie['id']; ?>" class="d-inline-block button-reverse-small d-flex align-items-center gap-2">
                                                    <i class="fa-regular fa-trash-can fa-sm"></i>
                                                    Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<!-- <body id="page-top"> -->
<!-- <div id="wrapper" style="width: 100%;">
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
</a> -->