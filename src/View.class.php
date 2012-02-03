<?php

foreach (glob("view/*.php") as $filename)
  include_once $filename;

class			View
{
  var $views = array(
		     'header'		=> view_header,
		     'header_http'	=> view_header_http,
		     'footer'		=> view_footer,
		     'footer_http'	=> view_footer_http,
		     'home'		=> view_home,
		     'login_form'	=> view_login_form,
		     'logout_form'	=> view_logout_form
		     );

  public function	__construct()
  {}

  public function	view($function_name, $args = 0)
  {
    if (!isset($this->views[$function_name]))
      throw new Exception('View Function does not exists!');
    $this->views[$function_name]($args);
  }

}
