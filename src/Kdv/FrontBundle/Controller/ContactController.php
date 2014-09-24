<?php

namespace Kdv\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
   /**
     * 
     * 
     * @Template()
     */
    public function indexAction(Request $request,$objet = null)
    {
       
        
       
        $errors = array();
        $success = false;
        
        $to = $this->container->getParameter('mailer_admin');

        if ($request->getMethod() == 'POST') {
            $firstname = $request->get('firstname', null);
            $lastname = $request->get('lastname', null);
            $company = $request->get('company', null);
            $email = $request->get('email', null);
            $objet = $request->get('subject', null);
            $message = $request->get('message', null);

           
            if ($lastname == null) {
                $errors[] = 'Le nom est obligatoire';
            }
            if ($firstname == null) {
                $errors[] = 'Le prenom est obligatoire';
            }
            if ($email == null) {
                $errors[] = 'L\'email est obligatoire';
            }
            if ($message == null) {
                $errors[] = 'Le message est obligatoire';
            }

            if (count($errors) == 0) {
                $html = "";

                $html .='Nom : ' . $firstname . ' ' . $lastname . '<br/>';
                $html .='Société : ' . $company . '<br/>';
                $html .='Email : ' . $email . '<br/>';
                $html .='Sujet : ' . $objet . '<br/>';
                $html .='---------------------------------------<br/>';
                $html .= $message . '<br/>';

                $msg = \Swift_Message::newInstance()
                        ->setSubject('Karudev - Contact')
                        ->setFrom($email, $firstname . ' ' . $lastname)
                        ->setTo($to)
                        ->setBody(nl2br($html), 'text/html');
                $this->get('mailer')->send($msg);
                $success = true;
            }
        }

        return array(
            'objet' => $objet,
            'errors' => $errors,
            'success' => $success);
    }
}
