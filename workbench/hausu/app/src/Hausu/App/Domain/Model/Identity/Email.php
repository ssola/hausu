<?php namespace Hausu\App\Domain\Model\Identity;

use Hausu\App\Domain\ValueObject;

class Email implements ValueObject
{
	private $value;

	public function __construct($value) 
	{
		// validate email
		$this->value = $value;
	}

	public static function fromNative($native)
	{
		return new Email($native);
	}

	public function isEqual(ValueObject $object)
	{
		if ($this === $object) {
			return true;
		}

		return false;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function __toString()
	{
		return $this->value;
	}
}