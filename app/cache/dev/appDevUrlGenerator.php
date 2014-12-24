<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tms_user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tms_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tms_user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tms_user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tms_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tms_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tms_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_join_page_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'sonata_admin_dashboard',    'permanent' => 'true',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_append_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/append-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_short_object_information' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',    '_format' => 'html',  ),  2 =>   array (    '_format' => 'html|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/admin/core/get-short-object-description',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_set_object_field_value' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/set-object-field-value',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_autocomplete_items' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-autocomplete-items',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_usertype_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::listAction',    '_sonata_admin' => 'tms.userjoinpage.admin.usertype',    '_sonata_name' => 'admin_tms_userjoinpage_usertype_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/usertype/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_usertype_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::createAction',    '_sonata_admin' => 'tms.userjoinpage.admin.usertype',    '_sonata_name' => 'admin_tms_userjoinpage_usertype_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/usertype/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_usertype_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::batchAction',    '_sonata_admin' => 'tms.userjoinpage.admin.usertype',    '_sonata_name' => 'admin_tms_userjoinpage_usertype_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/usertype/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_usertype_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::editAction',    '_sonata_admin' => 'tms.userjoinpage.admin.usertype',    '_sonata_name' => 'admin_tms_userjoinpage_usertype_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/usertype',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_usertype_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::deleteAction',    '_sonata_admin' => 'tms.userjoinpage.admin.usertype',    '_sonata_name' => 'admin_tms_userjoinpage_usertype_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/usertype',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_usertype_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::showAction',    '_sonata_admin' => 'tms.userjoinpage.admin.usertype',    '_sonata_name' => 'admin_tms_userjoinpage_usertype_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/usertype',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_usertype_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::exportAction',    '_sonata_admin' => 'tms.userjoinpage.admin.usertype',    '_sonata_name' => 'admin_tms_userjoinpage_usertype_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/usertype/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_user_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::listAction',    '_sonata_admin' => 'tms.userjoinpage.admin.user',    '_sonata_name' => 'admin_tms_userjoinpage_user_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/user/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::createAction',    '_sonata_admin' => 'tms.userjoinpage.admin.user',    '_sonata_name' => 'admin_tms_userjoinpage_user_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_user_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::batchAction',    '_sonata_admin' => 'tms.userjoinpage.admin.user',    '_sonata_name' => 'admin_tms_userjoinpage_user_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/user/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::editAction',    '_sonata_admin' => 'tms.userjoinpage.admin.user',    '_sonata_name' => 'admin_tms_userjoinpage_user_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::deleteAction',    '_sonata_admin' => 'tms.userjoinpage.admin.user',    '_sonata_name' => 'admin_tms_userjoinpage_user_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::showAction',    '_sonata_admin' => 'tms.userjoinpage.admin.user',    '_sonata_name' => 'admin_tms_userjoinpage_user_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_tms_userjoinpage_user_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::exportAction',    '_sonata_admin' => 'tms.userjoinpage.admin.user',    '_sonata_name' => 'admin_tms_userjoinpage_user_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tms/userjoinpage/user/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
