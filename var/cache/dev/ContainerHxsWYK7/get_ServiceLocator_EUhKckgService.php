<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.eUhKckg' shared service.

return $this->privates['.service_locator.eUhKckg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'employer' => ['privates', '.errored..service_locator.eUhKckg.App\\Entity\\Employer', NULL, 'Cannot autowire service ".service_locator.eUhKckg": it references class "App\\Entity\\Employer" but no such service exists.'],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
], [
    'employer' => 'App\\Entity\\Employer',
    'manager' => '?',
]);
