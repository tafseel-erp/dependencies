<?php

namespace TafseelERP\Core\Facades;

use Illuminate\Support\Facades\Facade;
use TafseelERP\Core\Bootstrap\Manager;

/**
 * Class AppManager
 * @package TafseelERP\Core\Facades
 * @method static registerRoutes
 * @method static getLoadedPackages
 * @method static getLoadedPackagesName
 */
class AppManager extends Facade
{
    /**
     * @inheritdoc
     */
    protected static function getFacadeAccessor()
    {
        return Manager::class;
    }
}