<?php namespace App\Http;

use Illuminate\Support\Facades\App;

trait ExecutableTrait {

	/**
	 * @param $request
	 * @throws HandlerNotRegisteredException
	 */
	protected function execute($request)
	{
		$handler = $this->toCommandHandler($request);

		$handler->handle((object) $request->all());
	}

	/**
	 * @param $request
	 * @return mixed
	 * @throws HandlerNotRegisteredException
	 */
	protected function toCommandHandler($request)
	{
		$requestClass = get_class($request);
		$handler = str_replace('Request','Handler',$requestClass);

		if (!class_exists($handler) || $handler == $requestClass)
		{
			$message = "Command handler [$handler] does not exist.";

			throw new HandlerNotRegisteredException($message);
		}

		return App::make($handler);
	}

} 