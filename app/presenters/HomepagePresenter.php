<?php

namespace App\Presenters;

use Nette,
    App\Model;

use App\Model\Article;
use App\Model\Category;
use Nette\Database\Context;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
    /**
     * @var Context
     * @inject
     */    
    public $context;
    
    /**
     * @var Category
     * @inject
     */    
    public $category;
    
    
        
	public function renderDefault()
	{
		$this->template->categories = $this->category;
	}

}
