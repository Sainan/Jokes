<?php
namespace Sainan\Jokes;
abstract class Data
{
	static function getAllTypes() : array
	{
		return [
			General::class,
			Programming::class,
			KnockKnock::class,
		];
	}

	static function getRandomType() : string
	{
		$all = self::getAllTypes();
		return $all[array_rand($all)];
	}

	abstract static function getName() : string;

	static function getAll() : array
	{
		return json_decode(file_get_contents(__DIR__."/../data/".static::getName().".json"), true);
	}

	static function getRandomRaw() : array
	{
		$all = static::getAll();
		return $all[array_rand($all)];
	}

	static function getRandom() : Joke
	{
		$data = self::getRandomRaw();
		return new Joke($data["setup"], $data["punchline"]);
	}
}
