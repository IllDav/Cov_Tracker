<?php
class Timeline extends DB {
  function get(){
    if(isset($_POST['search'])){
					$szur=$_POST['szures'];
					return $this->select("SELECT datum, new_cases, new_deaths, total_cases, total_deaths, total_deaths_per_million FROM covid WHERE datum LIKE '%$szur%'");
					}

          else{
					return $this->select("SELECT datum, new_cases, new_deaths, total_cases, total_deaths, total_deaths_per_million FROM covid ORDER BY datum DESC");
        }
  }
}

class News extends DB{
  function get(){
    return $this->select("SELECT cim, url, img, datum FROM hirek");
  }
}

?>
