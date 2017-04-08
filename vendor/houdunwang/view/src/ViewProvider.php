<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace houdunwang\view;

use houdunwang\config\Config;
use houdunwang\framework\build\Provider;

class ViewProvider extends Provider {

	//延迟加载
	public $defer = true;

	public function boot() {
	}

	public function register() {
		Config::set( 'view.compile_open', Config::get( 'app.debug' ) );
		$this->app->single( 'View', function () {
			return View::single();
		} );
	}
}