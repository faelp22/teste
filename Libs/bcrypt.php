<?php

namespace Libs;

class Bcrypt {

	protected static $_saltPrefix = '2a';
	protected static $_defaultCost = 10;
	protected static $_saltLength = 22;

	public static function hash($string, $cost = null) {
		if (empty($cost)) {
			$cost = self::$_defaultCost;
		}

		// Salt
		$salt = self::generateRandomSalt();

		// Hash string
		$hashString = self::__generateHashString((int)$cost, $salt);

		return crypt($string, $hashString);
	}// FIM hash

	public static function check($string, $hash) {
		return (crypt($string, $hash) === $hash);
	}// FIM check

	public static function generateRandomSalt() {
		// Salt seed
		$seed = uniqid(mt_rand(), true);

		// Generate salt
		$salt1 = base64_encode($seed);
		$salt = str_replace('+', '.', $salt1);

		return substr($salt, 0, self::$_saltLength);
	}// FIM generateRandomSalt

	private static function __generateHashString($cost, $salt) {
		return sprintf('$%s$%02d$%s$', self::$_saltPrefix, $cost, $salt);
	}// FIM __generateHashString

}// FIM CLASS Bcrypt