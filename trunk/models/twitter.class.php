<?php

class Twitter {

  public $title;
  public $description;
  public $image;
  public $creator;
  public $site;
  private $card;

  function __construct(){
     $this->card = "summary_large_image";
  }

  function getMetas(){
      return "\n\t".
            '<meta name="twitter:card" content="'.$this->card.'" />'."\n\t".
            '<meta name="twitter:title" content="'.$this->title.'" />'."\n\t".
            '<meta name="twitter:description" content="'.$this->description.'" />'."\n\t".
            '<meta name="twitter:site" content="'.$this->creator.'" />'."\n\t".
            '<meta name="twitter:image" content="http://'.$_SERVER['HTTP_HOST'].'/'.$this->image.'" />'."\n\t".
            '<meta name="twitter:image:alt" content="'.$this->title.'" />'."\n\t".
            '<meta name="twitter:creator" content="'.$this->creator.'" />'."\n\t";
  }

}

 ?>
