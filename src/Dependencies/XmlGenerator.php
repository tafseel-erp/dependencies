<?php

namespace TafseelERP\Dependencies;

use Illuminate\Database\Eloquent\Model;
use TafseelERP\Dependencies\Base\XmlGeneratorBase;

/**
 * Class XmlGenerator
 * @package TafseelERP\Dependencies
 * @property string $OrganizationReference
 * @property string $DateFormat
 * @property string $Reseller
 * @property float $MeasurementConverter
 * @method static array generateXmlFile(Model $item, Model $tailor_invoice, $i)
 * @method static array generateXmlFileV2(Model $tailor_invoice)
 */
class XmlGenerator extends XmlGeneratorBase
{
    /**
     * @param string $OrganizationReference
     */
    public static function setOrganizationReference(string $OrganizationReference): void
    {
        XmlGeneratorBase::$OrganizationReference = $OrganizationReference;
    }

    /**
     * @param string $DateFormat
     */
    public static function setDateFormat(string $DateFormat): void
    {
        XmlGeneratorBase::$DateFormat = $DateFormat;
    }

    /**
     * @param string $Reseller
     */
    public static function setReseller(string $Reseller): void
    {
        XmlGeneratorBase::$Reseller = $Reseller;
    }

    /**
     * @param float $MeasurementConverter
     */
    public static function setMeasurementConverter(float $MeasurementConverter): void
    {
        XmlGeneratorBase::$MeasurementConverter = $MeasurementConverter;
    }
}
