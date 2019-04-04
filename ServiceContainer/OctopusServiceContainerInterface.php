<?php


namespace Ling\Octopus\ServiceContainer;


use Ling\Octopus\Exception\OctopusServiceErrorException;

interface OctopusServiceContainerInterface
{


    /**
     * Returns the service which name is given.
     *
     * Note: a service is an object (i.e. an instance).
     *
     *
     * @param string $service
     * @return object
     * @throws OctopusServiceErrorException, when a problem occur and the requested service cannot be returned
     *
     */
    public function get(string $service);


    /**
     * Returns whether the service container has the given service
     * @param string $service
     * @return bool
     */
    public function has(string $service): bool;
}








