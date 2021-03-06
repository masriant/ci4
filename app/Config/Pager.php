<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Pager extends BaseConfig
{
	/*
	|--------------------------------------------------------------------------
	| Templates
	|--------------------------------------------------------------------------
	|
	| Pagination links are rendered out using views to configure their
	| appearance. This array contains aliases and the view names to
	| use when rendering the links.
	|
	| Within each view, the Pager object will be available as $pager,
	| and the desired group as $pagerGroup;
	|
	*/
	public $templates = [
		'default_full'   => 'CodeIgniter\Pager\Views\default_full',
		'default_simple' => 'CodeIgniter\Pager\Views\default_simple',
		'default_head'   => 'CodeIgniter\Pager\Views\default_head',
		'orang_pagination'   => 'CodeIgniter\Pager\Views\orang_pagination',
		'masrianto_pagination'   => 'CodeIgniter\Pager\Views\masrianto_pagination',
		'blog_pagination'   => 'CodeIgniter\Pager\Views\blog_pagination',
		'pager_pagination'   => 'CodeIgniter\Pager\Views\pager_pagination'
		//'orang_pagination' => 'App\Views\Pagers\orang_pagination',
		// 'masrianto_pagination' => 'App\Views\Pagers\masrianto_pagination',
		// 'blog_pagination' => 'App\Views\Pagers\blog_pagination',
		// 'pager_pagination' => 'App\Views\Pagers\pager_pagination'
	];

	/*
	|--------------------------------------------------------------------------
	| Items Per Page
	|--------------------------------------------------------------------------
	|
	| The default number of results shown in a single page.
	|
	*/
	public $perPage = 20;
}