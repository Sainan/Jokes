<?php
namespace Sainan\Jokes;
class Joke
{
	public $setup;
	public $punchline;

	function __construct($setup, $punchline)
	{
		$this->setup = $setup;
		$this->punchline = $punchline;
	}

	function __toString() : string
	{
		if(strpos($this->setup, "\n") === false)
		{
			return $this->setup." ".$this->punchline;
		}
		return $this->setup."\n".$this->punchline;
	}
}
