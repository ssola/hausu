<?php namespace Hausu\App\Controllers;

use \Illuminate\Routing\Controller;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;
use \Hausu\App\Domain\Model\Identity\User;
use \Hausu\App\Domain\Model\Identity\Email;
use \Hausu\App\Domain\Model\Identity\Password;
use Doctrine\ORM\EntityManagerInterface;

class IndexController extends Controller
{
	protected $layout = 'app::layouts.basic';

	protected $entityManager = null;

	public function __construct(EntityManagerInterface $em)
	{
		$this->entityManager = $em;
	}

	public function getIndex()
	{
		$order = new User(
			new Email("introduccio@gmail.com"),
			new Password("a90KLMp")
		);

		$this->entityManager->persist($order);
		$this->entityManager->flush();

		// if customer is already logged in redirects to dashboard
		return View::make('app::index.index');
	}
}