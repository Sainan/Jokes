<?php
namespace Sainan\Jokes;
class Joke
{
	function __construct(
		public string $setup,
		public string $punchline,
	) {}

	function __toString() : string
	{
		if(strpos($this->setup, "\n") === false)
		{
			return $this->setup." ".$this->punchline;
		}
		return $this->setup."\n".$this->punchline;
	}
}
