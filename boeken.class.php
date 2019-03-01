<?php

class boeken {

private $isbnNummer,
    $Verhuurd,
    $titel,
    $omschrijving,
    $uitgever,
    $genre,
    $datumVerhuur,
    $schrijver,
    $user_id;


//leen boek x aan lener y
public function rent ($book,$user){

}

//verwijder lener van boek, stel boek terug open voor ontlening
public function checkout ($book,$user){

}

    /**
     * @return mixed
     */
    public function getIsbnNummer()
    {
        return $this->isbnNummer;
    }

    /**
     * @param mixed $isbnNummer
     */
    public function setIsbnNummer($isbnNummer)
    {
        $this->isbnNummer = $isbnNummer;
    }

    /**
     * @return mixed
     */
    public function getVerhuurd()
    {
        return $this->Verhuurd;
    }

    /**
     * @param mixed $Verhuurd
     */
    public function setVerhuurd($Verhuurd)
    {
        $this->Verhuurd = $Verhuurd;
    }

    /**
     * @return mixed
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @param mixed $titel
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    /**
     * @return mixed
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * @param mixed $omschrijving
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;
    }

    /**
     * @return mixed
     */
    public function getUitgever()
    {
        return $this->uitgever;
    }

    /**
     * @param mixed $uitgever
     */
    public function setUitgever($uitgever)
    {
        $this->uitgever = $uitgever;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getDatumVerhuur()
    {
        return $this->datumVerhuur;
    }

    /**
     * @param mixed $datumVerhuur
     */
    public function setDatumVerhuur($datumVerhuur)
    {
        $this->datumVerhuur = $datumVerhuur;
    }

    /**
     * @return mixed
     */
    public function getSchrijver()
    {
        return $this->schrijver;
    }

    /**
     * @param mixed $schrijver
     */
    public function setSchrijver($schrijver)
    {
        $this->schrijver = $schrijver;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }



}