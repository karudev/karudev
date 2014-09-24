<?php
namespace Kdv\FrontBundle\Controller;
class FileManager
{

 public static function resize($filename, $percent, $resizeFilename)
 {

// Calcul des nouvelles dimensions
  list($width, $height) = getimagesize($filename);
  $newwidth = $width * $percent;
  $newheight = $height * $percent;

// Chargement
  $thumb = imagecreatetruecolor($newwidth, $newheight);
  $source = imagecreatefromjpeg($filename);

// Redimensionnement
  imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


// Affichage
  return imagejpeg($thumb, $resizeFilename, 100);
 }

}
