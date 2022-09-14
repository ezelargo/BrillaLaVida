<?php

class Facebook {

  public $title;
  public $description;
  public $image;
  private $locale;
  private $type;
  private $url;
  private $site_name;

  function __construct(){
      $this->type = "website";
      $this->locale = "es_AR";
      $this->locale_alternate = "es_LA";
      $this->url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      $this->site_name = "Brilla la vida";
  }

  function getMetas(){
      list($width, $height) = getimagesize($this->image);
      return "\n\t".
             '<meta property="og:locale" content="'.$this->locale.'" />'."\n\t".
             '<meta property="og:locale:alternate" content="'.$this->locale_alternate.'" />'."\n\t".
             '<meta property="og:type" content="'.$this->type.'" />'."\n\t".
             '<meta property="og:title" content="'.$this->title.'" />'."\n\t".
             '<meta property="og:description" content="'.$this->description.'" />'."\n\t".
             '<meta property="og:url" content="'.$this->url.'" />'."\n\t".
             '<meta property="og:site_name" content="'.$this->site_name.'" />'."\n\t".
             '<meta property="og:image" content="http://'.$_SERVER['HTTP_HOST'].'/'.$this->image.'" />'."\n\t".
             '<meta property="og:image:width" content="'.$width.'" />'."\n\t".
             '<meta property="og:image:height" content="'.$height.'" />'."\n\t";
  }

}

 ?>
