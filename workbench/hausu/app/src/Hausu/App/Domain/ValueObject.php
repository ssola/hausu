<?php namespace Hausu\App\Domain;

interface ValueObject
{
	/**
	 * Checks if another ValueObject is equals than this one
	 * 
	 * @param ValueObject $object
	 */
	public function isEqual(ValueObject $object);
}
