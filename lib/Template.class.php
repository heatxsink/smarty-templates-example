<?php

class Template {
	
	protected static $DEBUGGING = true; 
	protected static $TEMPLATE_DIRECTORY = '../views/templates';
	protected static $COMPILE_DIRECTORY = '../views/templates_c';
	protected static $CACHE_DIRECTORY = '../views/cache';
	protected static $CONFIG_DIRECTORY = '../views/configs';
	
	protected static $template_engine = NULL;
	
	public function __construct() {}
	public function __destruct() {}
	public function __clone()    {}
	
	public static function Display($template) {
		
		self::getTemplateEngine()->display($template);
	}
	
	public static function SetParameter($key, $value) {
		
		self::getTemplateEngine()->assign($key, $value);
	}
	
	public static function SetDebugMode($value) {
		
		self::getTemplateEngine()->debugging = $value;
	}
	
	public static function getTemplateEngine() {
		
		if (!self::$template_engine) {
			self::$template_engine = new Smarty();
			self::$template_engine->debugging = self::$DEBUGGING;
			self::$template_engine->template_dir = self::$TEMPLATE_DIRECTORY;
			self::$template_engine->compile_dir = self::$COMPILE_DIRECTORY;
			self::$template_engine->cache_dir = self::$CACHE_DIRECTORY;
			self::$template_engine->config_dir = self::$CONFIG_DIRECTORY;
		}
		
		return self::$template_engine;
	}
}
