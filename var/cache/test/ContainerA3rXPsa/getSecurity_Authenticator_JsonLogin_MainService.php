<?php

namespace ContainerA3rXPsa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_JsonLogin_MainService extends App_KernelTestContainer
{
    /*
     * Gets the private 'security.authenticator.json_login.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/JsonLoginAuthenticator.php';

        return $container->privates['security.authenticator.json_login.main'] = new \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), ($container->privates['security.authentication.success_handler.main.json_login'] ?? $container->load('getSecurity_Authentication_SuccessHandler_Main_JsonLoginService')), ($container->privates['security.authentication.failure_handler.main.json_login'] ?? $container->load('getSecurity_Authentication_FailureHandler_Main_JsonLoginService')), ['check_path' => '/authentication_token', 'username_path' => 'email', 'password_path' => 'password', 'use_forward' => false, 'require_previous_session' => false, 'login_path' => '/login'], ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')));
    }
}
