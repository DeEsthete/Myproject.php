<?php
include_once "./classes/School/Person.php";
include_once "./classes/School/Rating.php";

class Student extends Person{
    private $ratings = [], $kurs, $fakultet;

    public function getRatings()
    {
        return $this->ratings;
    }

    public function setRatings($ratings)
    {
        $this->ratings = $ratings;
    }

    public function getKurs()
    {
        return $this->kurs;
    }

    public function setKurs($kurs)
    {
        $this->kurs = $kurs;
    }

    public function getFakultet()
    {
        return $this->fakultet;
    }

    public function setFakultet($fakultet)
    {
        $this->fakultet = $fakultet;
    }

    public function getRating($key){
        return $this->ratings[$key];
    }

    public function getRatingByItem($item){
        $arr = [];
        foreach($this->ratings as $rating){
            if ($rating->getItem() == $item) $arr[] = $rating;
        }
        return $arr;
    }

    public function getMiddleRating(){
        $middle = 0;
        foreach($this->getRatings() as $rating){
            $middle += $rating->number;
        }
        $middle /= count($this->getRatings());
        return $middle;
    }
}