<?php

class School{
    //работа с массивом(полностью)
    private $students = [];

    public function getStudents(): array
    {
        return $this->students;
    }

    public function setStudents(array $students)
    {
        $this->students = $students;
    }

    public function getStudent($key){
        $this->students[$key];
    }

    public function addStudent(Student $student){
        $this->students[] = $student;
    }

    public function removeStudent($name){
        foreach ($this->students as $key => $student)
            if ($student->getName() === $name)
                unset($this->students[$key]);
    }

    public function getStudentsWhereKurs($kurs){
        $arr = [];
        foreach($this->students as $student){
            if ($student->getKurs() == $kurs) $arr[] = $student;
        }
        return $arr;
    }

    public function getStudentsWhereFakultet($fakultet){
        $arr = [];
        foreach($this->students as $student){
            if ($student->getFakultet() == $fakultet) $arr[] = $student;
        }
        return $arr;
    }

    public function getMiddleRating(){
        $middle = 0;
        foreach ($this->getStudents() as $student){
            $middle += $student->getMiddleRating();
        }
        $middle /= count($this->getStudents());
        return $middle;
    }

    public function getMiddleAge(){
        $middle = 0;
        foreach ($this->getStudents() as $student){
            $middle += $student->getAge();
        }
        $middle /= count($this->getStudents());
        return $middle;
    }

    public function getMiddleHeight(){
        $middle = 0;
        foreach ($this->getStudents() as $student){
            $middle += $student->getHeight();
        }
        $middle = $middle / count($this->getStudents());
        return $middle;
    }
}