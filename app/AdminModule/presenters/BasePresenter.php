<?php

namespace App\AdminModule\Presenters;

use Nette,
	App\Model;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	public function beforeRender()
	{
		$this->template->loggedIn = $this->getUser()->isLoggedIn();
		$this->template->user = $this->getUser();
	}

}
