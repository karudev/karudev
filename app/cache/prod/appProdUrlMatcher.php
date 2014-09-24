<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Kdv\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // company
        if ($pathinfo === '/societe') {
            return array (  '_controller' => 'Kdv\\FrontBundle\\Controller\\CompanyController::indexAction',  '_route' => 'company',);
        }

        // tech
        if ($pathinfo === '/technologies') {
            return array (  '_controller' => 'Kdv\\FrontBundle\\Controller\\TechController::indexAction',  '_route' => 'tech',);
        }

        // contact
        if (0 === strpos($pathinfo, '/contact') && preg_match('#^/contact(?:/(?P<objet>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact')), array (  '_controller' => 'Kdv\\FrontBundle\\Controller\\ContactController::indexAction',  'objet' => NULL,));
        }

        // legal
        if ($pathinfo === '/mentions-legales') {
            return array (  '_controller' => 'Kdv\\FrontBundle\\Controller\\LegalController::indexAction',  '_route' => 'legal',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
