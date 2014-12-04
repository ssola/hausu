<?php namespace Hausu\App\Domain\Model\Identity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string")
	 */
	private $email;

	/**
	 * @ORM\Column(type="string")
	 */
	private $password;

	public function __construct(
		Email $email,
		Password $password
	) {
		$this->setEmail($email);
		$this->setPassword($password);
	}

	public function setEmail(Email $email)
	{
		$this->email = $email->getValue();
	}

	public function setPassword(Password $password)
	{
		$this->password = $password->getValue();
	}
}