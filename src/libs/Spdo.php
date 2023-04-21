<?php 
namespace Leandro\mvc\libs;



class Spdo 
{
    private static $instance = null;
    private $db;

 
    public function __construct()
    {
       $this->db= new Database();
        //$config = Config::singleton();
    }
 
    public static function singleton()
    {
        if(self::$instance == null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    

    /**
     * Get the value of db
     */ 
    public function getDb()
    {
        return $this->db;
    }
}