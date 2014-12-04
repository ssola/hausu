<?php namespace Hausu\App\Domain\Model;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="orders")
 */
class Order
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */ 
	private $id;

	/**
	 * @ORM\Column(type="decimal", precision=10, scale=5)
	 */
	private $amount;

	/**
	 * @ORM\Column(type="string", name="first_name")
	 */ 
	private $firstname;

	/**
	 * @ORM\Column(type="string", name="last_name")
	 */ 
	private $lastname;

	public function __construct(
		$amount,
		$firstname,
		$lastname
	) {
		$this->amount = (int)$amount;
		$this->firstname = $firstname;
		$this->lastname = $lastname;
	}

	public function id()
	{
		return $this->id;
	}

	public function firstName() 
	{
		return $this->firstname;
	}

	public function lastName()
	{
		return $this->lastname;
	}

	public function amount()
	{
		return $this->amount;
	}
}