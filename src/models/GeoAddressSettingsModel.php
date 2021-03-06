<?php

namespace TDE\GeoAddress\models;

use Craft;
use craft\base\Model;

/**
 * Class GeoAddressSettingsModel
 *
 * @package TDE\GeoAddress\models
 */
class GeoAddressSettingsModel extends Model
{
	/**
	 * @var string
	 */
	public $googleApiKey;

	/**
	 * @var string
	 */
	public $geocoderService;

	/**
	 * @return array
	 */
	public function rules()
	{
		return [
			['googleApiKey', 'string'],
			['geocoderService', 'string']
		];
	}
}
