<?php

require_once("models/facebook.class.php");
require_once("models/twitter.class.php");

 class Header {

    private $title;
    private $description;
    private $image; 
    private $author;
    private $keywords;
    private $facebook;
    private $twitter;

    function __construct(){
        $this->author = "Brilla la vida";
        $this->keywords = "ayudar, colaborar, brilla la vida, ong, eventos solidarios, estancia la candelaria, hospital ramos mejia, buenos aires, argentina, latinoamerica, romina blanco";
        $this->facebook = new Facebook();
        $this->twitter = new Twitter();
    }

    function setTitle($title){
        $this->title = "$title - Brilla la vida";
    }

    function setDescription($description){
        $this->description = $description;
    }
     
    function setImage($image){
        $this->image = $image;
    } 

    private function getMetas(){
        return "\n\t".
               '<meta name="author" content="'.$this->author.'">'."\n\t".
               '<meta name="description" content="'.$this->description.'">'."\n\t".
               '<meta name="title" content="'.$this->title.'">'."\n\t".
               '<meta name="keywords" content="'.$this->keywords.'">'."\n\t".
               '<meta property="article:publisher" content="http://www.soluxxione.com" />'."\n\t".
               '<meta property="article:author" content="'.$this->author.'" />'."\n\t".
               '<meta property="article:section" content="'.$this->title.'" />'."\n\t".
               '<meta property="article:tag" content="'.$this->keywords.'" />'."\n\t".
               '<title>'.$this->title.'</title>'."\n\t";
    }

    private function getFacebook(){
      $this->facebook->title = $this->title;
      $this->facebook->description = $this->description;
      $this->facebook->image = isset($this->image) ? "images/socials/$this->image" : "assets/img/socials/facebook/brilla-la-vida-default.jpg";
      return $this->facebook->getMetas();
    }

    private function getTwitter(){
      $this->twitter->title = $this->title;
      $this->twitter->description = $this->description;
      $this->twitter->site = "http://$_SERVER[HTTP_HOST]";
      $this->twitter->creator = "@soluxxione";
      $this->twitter->image = isset($this->image) ? "images/socials/$this->image" : "assets/img/socials/twitter/brilla-la-vida-default.jpg";
      return $this->twitter->getMetas();
    }

    public function showHeader(){
        echo("<!-- HTML -->");
        echo($this->getMetas());
        echo("<!-- Facebook -->");
        echo($this->getFacebook());
        echo("<!-- Twitter -->");
        echo($this->getTwitter());
    }
 }

?>
