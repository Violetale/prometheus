<?php
namespace Mediabroker\Core\View\Components\Buttons;

use Illuminate\View\Component;

class Add extends Component
{
public $href;

public function __construct($href)
{
$this->href = $href;
}

public function render()
{
return view('core::admin.components.buttons.add');
}
}
