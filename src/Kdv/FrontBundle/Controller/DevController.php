<?php

namespace Kdv\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DevController extends Controller
{

 /**
  * 
  * @Template()
  */
 public function indexAction()
 {
  return array();
 }

 /**
  * 
  * @Template()
  */
 public function karuFileManagerAction(Request $request)
 {
  if ($request->getMethod() == 'POST') {

   $ration = $request->get('taille');
   $percent = ($ration * 100);
   
   
   $filename = WEB_DIRECTORY.'/dev/photos/cocotier.jpg';
   $resizeFilename = WEB_DIRECTORY.'/dev/photos/' . $percent . '/cocotier.jpg';
   $html = "";
   if ($this->get('karu.file.manager')->resize($filename, $ration, $resizeFilename)) {
    $html .='<h5>Redimensionnement OK</h5>';
   } else {
    $html .='<h5>Redimensionnement échoué</h5>';
   }

# Show files
   $html .='<a href="'.$this->generateUrl('dev_KaruFileManager').'">Retour au formulaire</a>'
           . '<h6>Liste des fichiers</h6><ul>';

   for ($i = 0.1; $i < 1; $i = $i + 0.1) {
    $percent = ($i * 100);
    $filename = 'dev/photos/' . $percent . '/cocotier.jpg';
    if (file_exists($filename)) {
     $html .='<li>' . $percent . '% : <img src="' .$this->get('templating.helper.assets')->getUrl($filename). '" /></li>';
    }
   }
   $html .='</ul>';

   return array('html' => $html);
  } else {
   return array();
  }
 }

}
