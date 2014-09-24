<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kdv\\FrontBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'company' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kdv\\FrontBundle\\Controller\\CompanyController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/societe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tech' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kdv\\FrontBundle\\Controller\\TechController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/technologies',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kdv\\FrontBundle\\Controller\\LegalController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mentions-legales',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dev' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kdv\\FrontBundle\\Controller\\DevController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/developpements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dev_KaruFileManager' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kdv\\FrontBundle\\Controller\\DevController::karuFileManagerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/developpements/karu-file-manager',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
