<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            // blog_users_homepage
            if (0 === strpos($pathinfo, '/api/') && preg_match('#^/api/\\.(?P<_format>json|xml|html)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_users_homepage')), array (  '_controller' => 'BLOG\\UsersBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/api/users')) {
                // get_users
                if (preg_match('#^/api/users(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_users;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_users')), array (  '_controller' => 'BLOG\\UsersBundle\\Controller\\UsersController::getUsersAction',  '_format' => NULL,));
                }
                not_get_users:

                // get_user
                if (preg_match('#^/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'BLOG\\UsersBundle\\Controller\\UsersController::getUserAction',  '_format' => NULL,));
                }
                not_get_user:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
