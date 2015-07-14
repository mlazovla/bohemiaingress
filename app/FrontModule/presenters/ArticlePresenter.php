<?php

namespace App\FrontModule\Presenters;

use Nette,
	App\Model;

use App\Model\Article;


/**
 * Article presenter.
 */
class ArticlePresenter extends BasePresenter
{

	/**
	 * @var Article
	 * @inject
	 */
	public $article;

	public function renderShow($id)
	{
		$this->template->article = $this->article->get($id);
	}

}
