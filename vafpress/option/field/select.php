<?php

class VP_Option_Field_Select extends VP_Option_FieldMulti
{

	public function __construct()
	{
		
	}

	public static function withArray($arr)
	{
		$instance = new self();
		$instance->_basic_make($arr);

		// Turn default array to single value
		$instance->set_default(VP_Util_Array::first($instance->get_default()));
		
		return $instance;
	}

	public function render()
	{
		$this->_setup_data();
		return VP_Option_View::get_instance()->load('select', $this->get_data());
	}

}

/**
 * EOF
 */