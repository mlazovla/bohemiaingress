<?php

namespace App\AdminModule\Presenters;

use Nette,
	App\Model;

use App\Model\Category;
use Nette\Database\Context;

/**
 * Article presenter.
 */
class ArticlePresenter extends BasePresenter
{
	/**
	 * @var Model\Article
	 * @inject
	 */
	public $article;

	public function actionDefault() {
	}

	public function renderDefault()
	{
		$this->template->article = $this->article;
	}

}
