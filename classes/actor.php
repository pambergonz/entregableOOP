<?php

class Actor
{
    private $firstName;
    private $lastName;
    private $rating;
    private $favoriteMovieId;
    private $movieTitle;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;

    }
    public function getTitle()
    {
      if($this->movieTitle) {
        return $this->movieTitle;
      }

    return 'Sin pelicula favorita';
    }


    public function setTitle($movieTitle)
      {
        $this->movieTitle = $movieTitle;
      }

      public function getFirstName()
      {
        return $this->firstName;
      }

      public function setFirstName($firstName)
      {
        $this->firstName = $firstName;
      }

      public function getLastname()
      {
        return $this->lastName;
      }

      public function setLastname($lastName)
      {
        $this->lastName=$lastName;
      }

      public function getRating()
      {
        return $this->rating;
      }

      public function setRating($rating)
      {
        $this->rating = $rating;
      }

      public function getFavoriteMovieId()
      {
        return $this->favoriteMovieId;
      }

      public function setfavoriteMovieId($favoriteMovieId)
      {
        $this->favoriteMovieId = $favoriteMovieId;
      }
}
