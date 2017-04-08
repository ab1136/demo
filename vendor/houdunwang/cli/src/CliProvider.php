<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace houdunwang\cli;

use houdunwang\framework\build\Provider;

class CliProvider extends Provider {
	//延迟加载
	public $defer = false;

	public function boot() {
		//执行命令行指令
		Cli::bootstrap();
	}

	public function register() {
		$this->app->single( 'Cli', function () {
			return new Cli();
		} );
	}
}