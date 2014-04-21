<?php namespace Ecommerce\Html;

use Illuminate\Html\FormBuilder as IlluminateFormBuilder;

class FormBuilder extends IlluminateFormBuilder {

	public function textField($name, $label, $value = null, $options = [])
	{
		return "<div class=\"form-group\"><label for=\"field-" . $name . "\" class=\"col-sm-2 control-label\">" . $label . "</label><div class=\"col-sm-10\"><input name=\"" . $name . "\" type=\"text\" class=\"form-control\" id=\"field-" . $name . "\" placeholder=\"" . $label . "\"></div></div>";
	}

} 