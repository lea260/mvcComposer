<?php
namespace Leandro\mvc\libs;

use Leandro\mvc\libs\Database;

 class Model {
  protected $db;

  public function __construct()
  {
    $this->db = new Database();
  }
}