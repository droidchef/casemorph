<?php namespace Ishan\Casemorph;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class CasemorphServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	public function boot() {

		$this->package('ishan/casemorph');

		AliasLoader::getInstance()->alias('Casemorpher', 'Ishan\Casemorph\Casemorpher');

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
