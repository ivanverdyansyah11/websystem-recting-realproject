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
}
