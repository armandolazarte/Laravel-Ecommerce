<?php namespace Ecommerce\Url;

use Illuminate\Database\Eloquent\Model;
use App;

class UrlGenerator {

	public function generate(Model $model, $nameColumn = 'name', $urlColumn = 'url')
	{

		$class = get_class($model);

		$url = $this->toAscii($model->$nameColumn);

		// If id is null, which means model is not saved yet
		// so we need to make sure the url generated doesn't not exist in DB
		// if exists, we append current timestamp to it
		if (is_null($model->id))
		{
			if (App::make($class)->where($urlColumn, $url)->count())
			{
				$url .= time();
			}
		} else
		{
			// If id is not null, we need to make sure other resources not have same url
			// otherwise append current timestamp to it
			if (App::make($class)->where('id', '<>', $model->id)->where($urlColumn, $url)->count())
			{
				$url .= time();
			}

		}

		return $url;

	}

	public function toAscii($str, $replace = array(), $delimiter = '-')
	{
		if (!empty($replace))
		{
			$str = str_replace((array) $replace, ' ', $str);
		}

		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

		return $clean;
	}

} 