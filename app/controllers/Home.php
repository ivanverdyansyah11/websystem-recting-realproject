<?php

class Home extends Controller
{
  public function index()
  {
    $data['title'] = "Home";
    $data['movies'] = $this->model('film_model')->getAllMovies();
    $this->view('home/index', $data);
  }
}
