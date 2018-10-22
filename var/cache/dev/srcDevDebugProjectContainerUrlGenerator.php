<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'information' => array(array(), array('_controller' => 'App\\Controller\\AdministrationController::administrationAction'), array(), array(array('text', '/administration')), array(), array()),
        'about' => array(array(), array('_controller' => 'App\\Controller\\AdministrationController::aboutAction'), array(), array(array('text', '/administration/about')), array(), array()),
        'skills' => array(array(), array('_controller' => 'App\\Controller\\AdministrationController::skillAction'), array(), array(array('text', '/administration/skills')), array(), array()),
        'logiciels' => array(array(), array('_controller' => 'App\\Controller\\AdministrationController::logicielAction'), array(), array(array('text', '/administration/logiciels')), array(), array()),
        'portfolio' => array(array(), array('_controller' => 'App\\Controller\\AdministrationController::portfolioAction'), array(), array(array('text', '/administration/portfolio')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::homeAction'), array(), array(array('text', '/')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'fos_user_security_login' => array(array(), array('_controller' => 'fos_user.security.controller:loginAction'), array(), array(array('text', '/login')), array(), array()),
        'fos_user_security_check' => array(array(), array('_controller' => 'fos_user.security.controller:checkAction'), array(), array(array('text', '/login_check')), array(), array()),
        'fos_user_security_logout' => array(array(), array('_controller' => 'fos_user.security.controller:logoutAction'), array(), array(array('text', '/logout')), array(), array()),
        'fos_user_profile_show' => array(array(), array('_controller' => 'fos_user.profile.controller:showAction'), array(), array(array('text', '/profile/')), array(), array()),
        'fos_user_profile_edit' => array(array(), array('_controller' => 'fos_user.profile.controller:editAction'), array(), array(array('text', '/profile/edit')), array(), array()),
        'fos_user_registration_register' => array(array(), array('_controller' => 'fos_user.registration.controller:registerAction'), array(), array(array('text', '/register/')), array(), array()),
        'fos_user_registration_check_email' => array(array(), array('_controller' => 'fos_user.registration.controller:checkEmailAction'), array(), array(array('text', '/register/check-email')), array(), array()),
        'fos_user_registration_confirm' => array(array('token'), array('_controller' => 'fos_user.registration.controller:confirmAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/register/confirm')), array(), array()),
        'fos_user_registration_confirmed' => array(array(), array('_controller' => 'fos_user.registration.controller:confirmedAction'), array(), array(array('text', '/register/confirmed')), array(), array()),
        'fos_user_resetting_request' => array(array(), array('_controller' => 'fos_user.resetting.controller:requestAction'), array(), array(array('text', '/resetting/request')), array(), array()),
        'fos_user_resetting_send_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:sendEmailAction'), array(), array(array('text', '/resetting/send-email')), array(), array()),
        'fos_user_resetting_check_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:checkEmailAction'), array(), array(array('text', '/resetting/check-email')), array(), array()),
        'fos_user_resetting_reset' => array(array('token'), array('_controller' => 'fos_user.resetting.controller:resetAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/resetting/reset')), array(), array()),
        'fos_user_change_password' => array(array(), array('_controller' => 'fos_user.change_password.controller:changePasswordAction'), array(), array(array('text', '/profile/change-password')), array(), array()),
        'ef_connect' => array(array('instance', 'homeFolder'), array('_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction', 'instance' => 'default', 'homeFolder' => ''), array(), array(array('variable', '/', '[^/]++', 'homeFolder'), array('variable', '/', '[^/]++', 'instance'), array('text', '/efconnect')), array(), array()),
        'elfinder' => array(array('instance', 'homeFolder'), array('_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction', 'instance' => 'default', 'homeFolder' => ''), array(), array(array('variable', '/', '[^/]++', 'homeFolder'), array('variable', '/', '[^/]++', 'instance'), array('text', '/elfinder')), array(), array()),
        'skill_index' => array(array(), array('_controller' => 'App\\Controller\\SkillController:indexAction'), array(), array(array('text', '/skill/')), array(), array()),
        'skill_source' => array(array(), array('_controller' => 'App\\Controller\\SkillController:sourceAction'), array(), array(array('text', '/skill/source')), array(), array()),
        'skill_new' => array(array('id'), array('_controller' => 'App\\Controller\\SkillController:newAction', 'id' => null), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/skill/new')), array(), array()),
        'skill_show' => array(array('id'), array('_controller' => 'App\\Controller\\SkillController:showAction'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/skill')), array(), array()),
        'skill_edit' => array(array('id'), array('_controller' => 'App\\Controller\\SkillController:editAction'), array('id' => '\\d+'), array(array('text', '/edit'), array('variable', '/', '\\d+', 'id'), array('text', '/skill')), array(), array()),
        'skill_delete' => array(array('id'), array('_controller' => 'App\\Controller\\SkillController:deleteAction'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/skill')), array(), array()),
        'logiciel_index' => array(array(), array('_controller' => 'App\\Controller\\LogicielController:indexAction'), array(), array(array('text', '/logiciel/')), array(), array()),
        'logiciel_source' => array(array(), array('_controller' => 'App\\Controller\\LogicielController:sourceAction'), array(), array(array('text', '/logiciel/source')), array(), array()),
        'logiciel_new' => array(array('id'), array('_controller' => 'App\\Controller\\LogicielController:newAction', 'id' => null), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/logiciel/new')), array(), array()),
        'logiciel_show' => array(array('id'), array('_controller' => 'App\\Controller\\LogicielController:showAction'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/logiciel')), array(), array()),
        'logiciel_edit' => array(array('id'), array('_controller' => 'App\\Controller\\LogicielController:editAction'), array('id' => '\\d+'), array(array('text', '/edit'), array('variable', '/', '\\d+', 'id'), array('text', '/logiciel')), array(), array()),
        'logiciel_delete' => array(array('id'), array('_controller' => 'App\\Controller\\LogicielController:deleteAction'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/logiciel')), array(), array()),
        'formation_index' => array(array(), array('_controller' => 'App\\Controller\\FormationController:indexAction'), array(), array(array('text', '/formation/')), array(), array()),
        'formation_source' => array(array(), array('_controller' => 'App\\Controller\\FormationController:sourceAction'), array(), array(array('text', '/formation/source')), array(), array()),
        'formation_new' => array(array('id'), array('_controller' => 'App\\Controller\\FormationController:newAction', 'id' => null), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/formation/new')), array(), array()),
        'formation_show' => array(array('id'), array('_controller' => 'App\\Controller\\FormationController:showAction'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/formation')), array(), array()),
        'formation_edit' => array(array('id'), array('_controller' => 'App\\Controller\\FormationController:editAction'), array('id' => '\\d+'), array(array('text', '/edit'), array('variable', '/', '\\d+', 'id'), array('text', '/formation')), array(), array()),
        'formation_delete' => array(array('id'), array('_controller' => 'App\\Controller\\FormationController:deleteAction'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/formation')), array(), array()),
        'experience_index' => array(array(), array('_controller' => 'App\\Controller\\ExperienceController:indexAction'), array(), array(array('text', '/experience/')), array(), array()),
        'experience_source' => array(array(), array('_controller' => 'App\\Controller\\ExperienceController:sourceAction'), array(), array(array('text', '/experience/source')), array(), array()),
        'experience_new' => array(array('id'), array('_controller' => 'App\\Controller\\ExperienceController:newAction', 'id' => null), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/experience/new')), array(), array()),
        'experience_show' => array(array('id'), array('_controller' => 'App\\Controller\\ExperienceController:showAction'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/experience')), array(), array()),
        'experience_edit' => array(array('id'), array('_controller' => 'App\\Controller\\ExperienceController:editAction'), array('id' => '\\d+'), array(array('text', '/edit'), array('variable', '/', '\\d+', 'id'), array('text', '/experience')), array(), array()),
        'experience_delete' => array(array('id'), array('_controller' => 'App\\Controller\\ExperienceController:deleteAction'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/experience')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
