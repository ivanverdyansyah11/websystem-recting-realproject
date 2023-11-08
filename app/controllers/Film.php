<?php

class Film extends Controller
{
  public function index()
  {
    if (isset($_SESSION['user'])) {
      $data['title'] = "Koleksi Film";
      $data['movies'] = $this->model('film_model')->getAllMovies();

      $this->view('koleksi-film/index', $data);
    } else {
      header("Location:" . BASEURL . "login");
      exit;
    }
  }

  public function detail($id)
  {
    $data['title'] = " Koleksi Film";
    $data['movie'] = $this->model('film_model')->getMovie($id);

    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('koleksi-film/detail', $data);
    $this->view('templates/footer', $data);
  }

  public function tambah()
  {
    $data['title'] = " Koleksi Film";
    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('koleksi-film/tambah', $data);
    $this->view('templates/footer', $data);
  }

  public function tambahAction()
  {
    $typeName = explode('/', $_FILES['thumbnail']['type']);
    $filename = uniqid() . '.' . $typeName[1];
    $_POST['thumbnail'] = $filename;
    $path = __DIR__ . '/../../public/img/thumbnails/' . $filename;

    if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $path) && $this->model('film_model')->insertFilm($_POST) > 0) {
      Flasher::setFlash('success', 'Berhasil Menambahkan Koleksi Film!');
      header("Location:" . BASEURL . "film");
      exit;
    } else {
      Flasher::setFlash('danger', 'Gagal Menambahkan Koleksi Film!');
      header("Location:" . BASEURL . "film");
      exit;
    }
  }

  public function edit($id)
  {
    $data['title'] = " Koleksi Film";
    $data['movie'] = $this->model('film_model')->getMovie($id);

    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('koleksi-film/edit', $data);
    $this->view('templates/footer', $data);
  }

  public function editAction($id)
  {
    if (!empty($_FILES['thumbnail']['name'])) {
      $movie = $this->model('film_model')->getMovie($id);
      $path = __DIR__ . '/../../public/img/thumbnails/' . $movie['thumbnail'];
      if (!empty($path)) {
        unlink($path);
      }

      $typeName = explode('/', $_FILES['thumbnail']['type']);
      $filename = uniqid() . '.' . $typeName[1];
      $_POST['thumbnail'] = $filename;
      $path = __DIR__ . '/../../public/img/thumbnails/' . $filename;
      move_uploaded_file($_FILES['thumbnail']['tmp_name'], $path);
    } else {
      $movie = $this->model('film_model')->getMovie($id);
      $_POST['thumbnail'] = $movie['thumbnail'];
    }

    $_POST['id'] = $id;

    if ($this->model('film_model')->editMovie($_POST) > 0) {
      Flasher::setFlash('success', 'Berhasil Edit Koleksi Film!');
      header("Location:" . BASEURL . "film");
      exit;
    } else {
      Flasher::setFlash('danger', 'Gagal Edit Koleksi Film!');
      header("Location:" . BASEURL . "film");
      exit;
    }
  }

  public function hapusAction($id)
  {
    $movie = $this->model('film_model')->getMovie($id);
    $path = __DIR__ . '/../../public/img/thumbnails/' . $movie['thumbnail'];

    if (!empty($path)) {
      unlink($path);
    }

    if ($this->model('film_model')->deleteMovie($id) > 0) {
      Flasher::setFlash('success', 'Berhasil Menghapus Koleksi Film!');
      header("Location:" . BASEURL . "film");
      exit;
    } else {
      Flasher::setFlash('danger', 'Gagal Menghapus Koleksi Film!');
      header("Location:" . BASEURL . "film");
      exit;
    }
  }
}
