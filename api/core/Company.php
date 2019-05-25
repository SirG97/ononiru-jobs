<?php
namespace Ononiru\Core;
session_start();

use Ononiru\Core\Base;
use Ononiru\Config\Database;
    
class Company  extends Base {

    protected $conn,$table_name = 'company_profile';
    public $user_id,$active_status,$count,$_lastInsertID,$_result,$_fetchStyle =  PDO::FETCH_ASSOC;

    public function __construct(){

      $this->user_id =  isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;  
      $db = new Database(); 
      $this->conn = $db->getConnection();

    }

    public function create(){

    $user = userIsAvailable();
    if(!$user) return $this->forbidden('User not found');
    
    //check if user has an existing company profile 
    $query = "SELECT * FROM ".$this->table_name." WHERE user_id =: user_id AND status =: status";
    $prepared_statement =   $this->conn->prepare(1,$user);
    $prepared_statement->bindParam(':user_id',$user);
    $prepared_statement->bindParam(':status',$active_status);
    $prepared_statement->execute();

    $this->_result = $prepared_statement->fetchAll($this->_fetchStyle);
    $rows = $this->_count = $this->_query->rowCount();
    $this->_lastInsertID = $this->conn->lastInsertId();
  
        if($rows > 0){
            return $this->forbidden('User cannot own two company profiles on this platform');
        }

    $query = "INSERT INTO " . $this->table_name . " SET " ;

    // prepare query
    $stmt = $this->conn->prepare($query);
    
    }

   public function userIsAvailable(){
    
    if(is_null($this->user_id)){
        return false;
    }
    return $this->user_id;
   }



}

