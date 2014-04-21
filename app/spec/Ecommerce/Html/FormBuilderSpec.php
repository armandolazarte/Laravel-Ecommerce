<?php

namespace spec\Ecommerce\Html;

use Illuminate\Html\HtmlBuilder;
use Illuminate\Routing\UrlGenerator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormBuilderSpec extends ObjectBehavior
{

	function let(UrlGenerator $urlGenerator)
    {
        $htmlBuilder = new HtmlBuilder;
        
        $this->beConstructedWith($htmlBuilder, $urlGenerator, null);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Ecommerce\Html\FormBuilder');
    }

    function it_creates_a_text_field_block()
    {
        $this->textField('name', 'Name')->shouldReturn(
            '<div class="form-group"><label for="field-name" class="col-sm-2 control-label">Name</label><div class="col-sm-10"><input name="name" type="text" class="form-control" id="field-name" placeholder="Name"></div></div>'
        );
    }
}
