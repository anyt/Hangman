<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => '_profiler_search_results',    'token' => 'empty',    'ip' => '',    'url' => '',    'method' => '',    'limit' => '10',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::signupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'hangman_game' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/game/',    ),  ),),
        'play_letter' => array (  0 =>   array (    0 => 'letter',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::letterAction',  ),  2 =>   array (    'letter' => '[A-Z]',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[A-Z]',      3 => 'letter',    ),    1 =>     array (      0 => 'text',      1 => '/game/letter',    ),  ),),
        'play_word' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::wordAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/game/word',    ),  ),),
        'game_hanged' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::hangedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/game/hanged',    ),  ),),
        'game_won' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::wonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/game/won',    ),  ),),
        'game_reset' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/game/reset',    ),  ),),
        'player' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'player_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),  ),),
        'player_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::signupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/signup',    ),  ),),
        'registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::createAction',  ),  2 =>   array (    '_method' => 'POST|GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create',    ),  ),),
        'player_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),  ),),
        'player_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::updateAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),  ),),
        'player_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::deleteAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),  ),),
        'signin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::signinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/signin',    ),  ),),
        'signout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/signout',    ),  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/auth',    ),  ),),
        '_internal' => array (  0 =>   array (    0 => 'controller',    1 => 'path',    2 => '_format',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\InternalController::indexAction',  ),  2 =>   array (    'path' => '.+',    '_format' => '[^.]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^.]+',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'path',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'controller',    ),    3 =>     array (      0 => 'text',      1 => '/_internal/secure',    ),  ),),
        '_internal_public' => array (  0 =>   array (    0 => 'controller',    1 => 'path',    2 => '_format',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\InternalController::indexAction',  ),  2 =>   array (    'path' => '.+',    '_format' => '[^.]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^.]+',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'path',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'controller',    ),    3 =>     array (      0 => 'text',      1 => '/_internal',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
