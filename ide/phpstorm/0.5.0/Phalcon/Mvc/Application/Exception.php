<?php 

namespace Phalcon\Mvc\Application {

	class Exception extends \Phalcon\Exception {

		protected $message;

		protected $code;

		protected $file;

		protected $line;
	}
}