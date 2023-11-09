<?php

class film_model
{
    private $table = 'film';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMovies()
    {
        $this->db->query('SELECT * FROM movies ORDER BY id DESC LIMIT 10');
        return $this->db->resultSet();
    }

    public function getAllMoviesRating()
    {
        $this->db->query('SELECT * FROM movies ORDER BY rating DESC LIMIT 10');
        return $this->db->resultSet();
    }

    public function getMoviesSearch($data)
    {
        $this->db->query("SELECT * FROM movies WHERE title LIKE CONCAT('%', :search, '%');");
        $this->db->bind('search', $data['searching']);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getMovie($id)
    {
        $this->db->query('SELECT * FROM movies WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->resultSingle();
    }

    public function insertFilm($data)
    {
        $query = "INSERT INTO movies VALUES (null, :thumbnail, :title, :producer, :actor, :year_release, :rating, :trailer, :sinopsis)";
        $this->db->query($query);
        $this->db->bind('thumbnail', $data['thumbnail']);
        $this->db->bind('title', $data['title']);
        $this->db->bind('producer', $data['producer']);
        $this->db->bind('actor', $data['actor']);
        $this->db->bind('year_release', $data['year_release']);
        $this->db->bind('rating', $data['rating']);
        $this->db->bind('trailer', $data['trailer']);
        $this->db->bind('sinopsis', $data['sinopsis']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editMovie($data)
    {
        $query = "UPDATE movies set `thumbnail`=:thumbnail,`title`=:title,`producer`=:producer,`actor`=:actor,`year_release`=:year_release,`rating`=:rating,`trailer`=:trailer,`sinopsis`=:sinopsis WHERE `id`=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('thumbnail', $data['thumbnail']);
        $this->db->bind('title', $data['title']);
        $this->db->bind('producer', $data['producer']);
        $this->db->bind('actor', $data['actor']);
        $this->db->bind('year_release', $data['year_release']);
        $this->db->bind('rating', $data['rating']);
        $this->db->bind('trailer', $data['trailer']);
        $this->db->bind('sinopsis', $data['sinopsis']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteMovie($id)
    {
        $query = "DELETE FROM movies WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
