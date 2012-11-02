<?php

class Template {
	
	private static $DEBUGGING = true; 
	private static $TEMPLATE_DIRECTORY = '../views/templates';
	private static $COMPILE_DIRECTORY = '../views/templates_c';
	private static $CACHE_DIRECTORY = '../views/cache';
	private static $CONFIG_DIRECTORY = '../views/configs';
	
	private $template_engine = NULL;
	private static $instance = NULL;
	
	private function __construct() {
		
		$this->template_engine = new Smarty();
		$this->template_engine->debugging = self::$DEBUGGING;
		$this->template_engine->template_dir = self::$TEMPLATE_DIRECTORY;
		$this->template_engine->compile_dir = self::$COMPILE_DIRECTORY;
		$this->template_engine->cache_dir = self::$CACHE_DIRECTORY;
		$this->template_engine->config_dir = self::$CONFIG_DIRECTORY;
	}
	
	public function __destruct() {
		
		/* Left Empty */
	}
	private function __clone() {
		
		/* Left Empty */
	}
	
	public static function GetInstance() {
		
		if (!self::$instance) {
			self::$instance = new Template();
		}
		
		return self::$instance;
	}
	
	public function Display($template) {
		
		$this->template_engine->display($template);
	}
	
	public function SetParameter($key, $value) {
		
		$this->template_engine->assign($key, $value);
	}
	
	public function SetDebugMode($value) {
		
		$this->template_engine->debugging = $value;
	}
}
