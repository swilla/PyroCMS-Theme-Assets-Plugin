<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Plugin_Theme_Assets extends Plugin {
	/**
	 * combine and insert multiple js files
	 *
	 * usage:
	 * { theme_assets:js_files files="file1.js,file2.js" }
	 */
	function js_files() 
	{
		$files = $this -> attribute('files');
	
		$files_a = explode(",", $files);

		foreach ($files_a as $file)
		{
			Asset::js($file);
		}

		return Asset::render_js();
	}
	
	function css_files()
	{
		$files = $this -> attribute('files');
	
		$files_a = explode(",", $files);

		foreach ($files_a as $file)
		{
			Asset::css($file);
		}

		return Asset::render_css();		
	}
}