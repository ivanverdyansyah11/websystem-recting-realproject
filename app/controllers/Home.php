<?php

class Home extends Controller
{
  public function index()
  {
    $data['title'] = "Home";
    $data['movies_recent'] = $this->model('film_model')->getAllMovies();
    $data['movies_rating'] = $this->model('film_model')->getAllMoviesRating();
    $this->view('home/index', $data);
  }

  public function search()
  {
    $data['title'] = "Home";
    $data['movies_recent'] = $this->model('film_model')->getAllMovies();
    $data['movies_rating'] = $this->model('film_model')->getAllMoviesRating();
    $data['movies_search'] = $this->model('film_model')->getMoviesSearch($_POST);

    $this->view('home/search', $data);
  }
}
