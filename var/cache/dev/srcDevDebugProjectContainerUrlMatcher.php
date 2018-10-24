<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/administration' => array(array('_route' => 'information', '_controller' => 'App\\Controller\\AdministrationController::administrationAction'), null, null, null),
                    '/administration/about' => array(array('_route' => 'about', '_controller' => 'App\\Controller\\AdministrationController::aboutAction'), null, null, null),
                    '/administration/skills' => array(array('_route' => 'skills', '_controller' => 'App\\Controller\\AdministrationController::skillAction'), null, null, null),
                    '/administration/logiciels' => array(array('_route' => 'logiciels', '_controller' => 'App\\Controller\\AdministrationController::logicielAction'), null, null, null),
                    '/administration/portfolio' => array(array('_route' => 'portfolio', '_controller' => 'App\\Controller\\AdministrationController::portfolioAction'), null, null, null),
                    '/' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::homeAction'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/login' => array(array('_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/login_check' => array(array('_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'), null, array('POST' => 0), null),
                    '/logout' => array(array('_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/profile/' => array(array('_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'), null, array('GET' => 0), null),
                    '/profile/edit' => array(array('_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register/' => array(array('_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register/check-email' => array(array('_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'), null, array('GET' => 0), null),
                    '/register/confirmed' => array(array('_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'), null, array('GET' => 0), null),
                    '/resetting/request' => array(array('_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'), null, array('GET' => 0), null),
                    '/resetting/send-email' => array(array('_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'), null, array('POST' => 0), null),
                    '/resetting/check-email' => array(array('_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'), null, array('GET' => 0), null),
                    '/profile/change-password' => array(array('_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/skill/' => array(array('_route' => 'skill_index', '_controller' => 'App\\Controller\\SkillController:indexAction'), null, array('GET' => 0), null),
                    '/skill/source' => array(array('_route' => 'skill_source', '_controller' => 'App\\Controller\\SkillController:sourceAction'), null, array('GET' => 0), null),
                    '/logiciel/' => array(array('_route' => 'logiciel_index', '_controller' => 'App\\Controller\\LogicielController:indexAction'), null, array('GET' => 0), null),
                    '/logiciel/source' => array(array('_route' => 'logiciel_source', '_controller' => 'App\\Controller\\LogicielController:sourceAction'), null, array('GET' => 0), null),
                    '/formation/' => array(array('_route' => 'formation_index', '_controller' => 'App\\Controller\\FormationController:indexAction'), null, array('GET' => 0), null),
                    '/formation/source' => array(array('_route' => 'formation_source', '_controller' => 'App\\Controller\\FormationController:sourceAction'), null, array('GET' => 0), null),
                    '/experience/' => array(array('_route' => 'experience_index', '_controller' => 'App\\Controller\\ExperienceController:indexAction'), null, array('GET' => 0), null),
                    '/experience/source' => array(array('_route' => 'experience_source', '_controller' => 'App\\Controller\\ExperienceController:sourceAction'), null, array('GET' => 0), null),
                    '/workcategory/' => array(array('_route' => 'workcategory_index', '_controller' => 'App\\Controller\\WorkCategoryController:indexAction'), null, array('GET' => 0), null),
                    '/workcategory/source' => array(array('_route' => 'workcategory_source', '_controller' => 'App\\Controller\\WorkCategoryController:sourceAction'), null, array('GET' => 0), null),
                    '/work/' => array(array('_route' => 'work_index', '_controller' => 'App\\Controller\\WorkController:indexAction'), null, array('GET' => 0), null),
                    '/work/source' => array(array('_route' => 'work_source', '_controller' => 'App\\Controller\\WorkController:sourceAction'), null, array('GET' => 0), null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:198)'
                        .'|setting/reset/([^/]++)(*:228)'
                    .')'
                    .'|/e(?'
                        .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:278)'
                        .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:321)'
                        .'|xperience/(?'
                            .'|new(?:/(\\d+))?(*:356)'
                            .'|(\\d+)(*:369)'
                            .'|(\\d+)/edit(*:387)'
                            .'|(\\d+)(*:400)'
                        .')'
                    .')'
                    .'|/skill/(?'
                        .'|new(?:/(\\d+))?(*:434)'
                        .'|(\\d+)(*:447)'
                        .'|(\\d+)/edit(*:465)'
                        .'|(\\d+)(*:478)'
                    .')'
                    .'|/logiciel/(?'
                        .'|new(?:/(\\d+))?(*:514)'
                        .'|(\\d+)(*:527)'
                        .'|(\\d+)/edit(*:545)'
                        .'|(\\d+)(*:558)'
                    .')'
                    .'|/formation/(?'
                        .'|new(?:/(\\d+))?(*:595)'
                        .'|(\\d+)(*:608)'
                        .'|(\\d+)/edit(*:626)'
                        .'|(\\d+)(*:639)'
                    .')'
                    .'|/work(?'
                        .'|category/(?'
                            .'|new(?:/(\\d+))?(*:682)'
                            .'|(\\d+)(*:695)'
                            .'|(\\d+)/edit(*:713)'
                            .'|(\\d+)(*:726)'
                        .')'
                        .'|/(?'
                            .'|new(?:/(\\d+))?(*:753)'
                            .'|(\\d+)(*:766)'
                            .'|(\\d+)/edit(*:784)'
                            .'|(\\d+)(*:797)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            38 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            57 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            102 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            116 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            136 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            149 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            159 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            198 => array(array('_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'), array('token'), array('GET' => 0), null),
                            228 => array(array('_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null),
                            278 => array(array('_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction', 'instance' => 'default', 'homeFolder' => ''), array('instance', 'homeFolder'), null, null),
                            321 => array(array('_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction', 'instance' => 'default', 'homeFolder' => ''), array('instance', 'homeFolder'), null, null),
                            356 => array(array('_route' => 'experience_new', '_controller' => 'App\\Controller\\ExperienceController:newAction', 'id' => null), array('id'), array('GET' => 0, 'POST' => 1), null),
                            369 => array(array('_route' => 'experience_show', '_controller' => 'App\\Controller\\ExperienceController:showAction'), array('id'), array('GET' => 0), null),
                            387 => array(array('_route' => 'experience_edit', '_controller' => 'App\\Controller\\ExperienceController:editAction'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            400 => array(array('_route' => 'experience_delete', '_controller' => 'App\\Controller\\ExperienceController:deleteAction'), array('id'), array('DELETE' => 0), null),
                            434 => array(array('_route' => 'skill_new', '_controller' => 'App\\Controller\\SkillController:newAction', 'id' => null), array('id'), array('GET' => 0, 'POST' => 1), null),
                            447 => array(array('_route' => 'skill_show', '_controller' => 'App\\Controller\\SkillController:showAction'), array('id'), array('GET' => 0), null),
                            465 => array(array('_route' => 'skill_edit', '_controller' => 'App\\Controller\\SkillController:editAction'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            478 => array(array('_route' => 'skill_delete', '_controller' => 'App\\Controller\\SkillController:deleteAction'), array('id'), array('DELETE' => 0), null),
                            514 => array(array('_route' => 'logiciel_new', '_controller' => 'App\\Controller\\LogicielController:newAction', 'id' => null), array('id'), array('GET' => 0, 'POST' => 1), null),
                            527 => array(array('_route' => 'logiciel_show', '_controller' => 'App\\Controller\\LogicielController:showAction'), array('id'), array('GET' => 0), null),
                            545 => array(array('_route' => 'logiciel_edit', '_controller' => 'App\\Controller\\LogicielController:editAction'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            558 => array(array('_route' => 'logiciel_delete', '_controller' => 'App\\Controller\\LogicielController:deleteAction'), array('id'), array('DELETE' => 0), null),
                            595 => array(array('_route' => 'formation_new', '_controller' => 'App\\Controller\\FormationController:newAction', 'id' => null), array('id'), array('GET' => 0, 'POST' => 1), null),
                            608 => array(array('_route' => 'formation_show', '_controller' => 'App\\Controller\\FormationController:showAction'), array('id'), array('GET' => 0), null),
                            626 => array(array('_route' => 'formation_edit', '_controller' => 'App\\Controller\\FormationController:editAction'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            639 => array(array('_route' => 'formation_delete', '_controller' => 'App\\Controller\\FormationController:deleteAction'), array('id'), array('DELETE' => 0), null),
                            682 => array(array('_route' => 'workcategory_new', '_controller' => 'App\\Controller\\WorkCategoryController:newAction', 'id' => null), array('id'), array('GET' => 0, 'POST' => 1), null),
                            695 => array(array('_route' => 'workcategory_show', '_controller' => 'App\\Controller\\WorkCategoryController:showAction'), array('id'), array('GET' => 0), null),
                            713 => array(array('_route' => 'workcategory_edit', '_controller' => 'App\\Controller\\WorkCategoryController:editAction'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            726 => array(array('_route' => 'workcategory_delete', '_controller' => 'App\\Controller\\WorkCategoryController:deleteAction'), array('id'), array('DELETE' => 0), null),
                            753 => array(array('_route' => 'work_new', '_controller' => 'App\\Controller\\WorkController:newAction', 'id' => null), array('id'), array('GET' => 0, 'POST' => 1), null),
                            766 => array(array('_route' => 'work_show', '_controller' => 'App\\Controller\\WorkController:showAction'), array('id'), array('GET' => 0), null),
                            784 => array(array('_route' => 'work_edit', '_controller' => 'App\\Controller\\WorkController:editAction'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            797 => array(array('_route' => 'work_delete', '_controller' => 'App\\Controller\\WorkController:deleteAction'), array('id'), array('DELETE' => 0), null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (797 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
