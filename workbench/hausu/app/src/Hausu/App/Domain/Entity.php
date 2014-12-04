<?php namespace Hausu\Domain;

interface Entity
{
	/**
	 * Returns the Entity identifier
	 * 
	 * @return Identifier
	 */ 
	public function id();
}