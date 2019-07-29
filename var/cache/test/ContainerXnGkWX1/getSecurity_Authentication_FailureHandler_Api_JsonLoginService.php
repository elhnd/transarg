<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.failure_handler.api.json_login' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Authentication/CustomAuthenticationFailureHandler.php';

return $this->privates['security.authentication.failure_handler.api.json_login'] = new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(($this->privates['lexik_jwt_authentication.handler.authentication_failure'] ?? $this->load('getLexikJwtAuthentication_Handler_AuthenticationFailureService.php')), []);
