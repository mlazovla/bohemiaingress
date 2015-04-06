<?php

namespace App\Model;
use Nette\Database\Context;

/**
 * Persistent object Article. 
 */
class Article extends \Nette\Database\Table\Selection {
    private $db;
    private $table = "article";
    
    public function __construct(\Nette\Database\Context $database) {
        parent::__construct($database, $this->table);
        $this->db = $database;
    }
    
}
