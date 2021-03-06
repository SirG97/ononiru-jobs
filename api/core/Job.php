<?php namespace Ononiru\Core;

use Ononiru\Core\Base;
use \PDO;
use Ramsey\Uuid\Uuid;


class Job extends Base {

  // database connection and table name
  private $conn,$table_name = "jobs";

  // object properties
  public $id, $company_name, $description, $location, $salary_range, $qualification, $working_hours, $age,
   $gender, $sector, $status,$_error , $created_at, $updated_at, $deleted_at, $company_id,$_count,$_result,$_lastInsertID;
  private $null  = null,$deleted_status = 2;
  public $active_status = 1,$not_active = 0;
  private $_fetchStyle = PDO::FETCH_CLASS,$uuid;
  // constructor with $db as database connection
  public function __construct($db){
    $this->conn = $db;
    try {
      $this->uuid = Uuid::uuid4();
  } catch (UnsatisfiedDependencyException $e) {
  
      // Some dependency was not met. Either the method cannot be called on a
      // 32-bit system, or it can, but it relies on Moontoast\Math to be present.
      http_response_code(500);
      echo 'Caught exception: ' . $e->getMessage() . "\n";
      return;
  }
  
  }

  public function fetchCategory(){
    $query = "SELECT * FROM job_category ORDER BY available_jobs DESC LIMIT 4";
        
    $this->_query = $this->conn->prepare($query);
    
 $this->_query->execute();
 $this->_fetchStyle = PDO::FETCH_ASSOC;

 $this->_result = $this->_query->fetchAll($this->_fetchStyle);
 $this->_count = $this->_query->rowCount();
 
  }
/**
 * Dump and die a data
 * @return mixed
 * @param required
 */
public function dd($data = '') : void
{
    echo '<pre>';
    echo var_dump($data);
    echo '</pre>';
}

/**
 * Baptize the value
 * @param mixed required $data , data to sanitize
 * @return mixed
 */
public function sanitize($data)
{
    trim($data);
    \htmlspecialchars($data);
    \strip_tags($data);
    stripcslashes($data);
    return $data;
}

public function filter($category){


        $query = "SELECT * FROM jobs
     INNER JOIN job_category ON job_category.job_category_id = ". $this->table_name .".category_id
        
         WHERE category_id = ? AND status = ?";
        
       $this->_query = $this->conn->prepare($query);
       $this->_query->bindParam(1, $category);
       $this->_query->bindParam(2, $this->active_status);
        
    $this->_query->execute();
    $this->_fetchStyle = PDO::FETCH_ASSOC;
  
    $this->_result = $this->_query->fetchAll($this->_fetchStyle);
    $this->_count = $this->_query->rowCount();
    

  
  return $this->_query;
}

  // read jobs
  function read() {

    // select all query
    $query = "SELECT * FROM " . $this->table_name . " 
     INNER JOIN job_category ON job_category.job_category_id = ". $this->table_name .".category_id
    
     WHERE status = :status ORDER BY visits DESC LIMIT 3";

    // prepare query statement
    $this->_query = $this->conn->prepare($query);
    $this->_query->bindParam(":status", $this->active_status);


    // execute query
      $this->_query->execute();
      $this->_fetchStyle = PDO::FETCH_ASSOC;
      $this->_result = $this->_query->fetchAll($this->_fetchStyle);
      
      
    $this->_count = $this->_query->rowCount();
    $this->_lastInsertID = $this->conn->lastInsertId();
    
    
    return true;
  }

  // create job
  function create() {

    // query to insert record
    $query = "INSERT INTO " . $this->table_name . " SET job_id=:job_id,salary_range=:salary_range,title=:job_title,description=:description, company_id=:company_id, created_at=:created_at,
    qualification=:qualification,gender=:gender,age=:age,category_id=:category_id,location=:location,
                status=:status,working_hours=:working_hours,deleted_at=:deleted_at";

    // prepare query
    $stmt = $this->conn->prepare($query);
    
    // sanitize
    $this->salary_range = htmlspecialchars(strip_tags($this->salary_range));
    $this->description = htmlspecialchars(strip_tags($this->description));
    $this->company_id = htmlspecialchars(strip_tags($this->company_id));
    $this->created_at = htmlspecialchars(strip_tags($this->created_at));
    $this->job_title = htmlspecialchars(strip_tags($this->job_title));
    $this->qualification = htmlspecialchars(strip_tags($this->qualification));
    $this->location = htmlspecialchars(strip_tags($this->location));
    $this->category_id = htmlspecialchars(strip_tags($this->category_id));
    $this->status = 1;
    $this->gender = htmlspecialchars(strip_tags($this->gender));
    $this->age = htmlspecialchars(strip_tags($this->age));
    $this->working_hours = htmlspecialchars(strip_tags($this->working_hours));

    // bind values
    $stmt->bindParam(":salary_range", $this->salary_range);
    $stmt->bindParam(":job_id", $this->uuid);
    $stmt->bindParam(":description", $this->description);
    $stmt->bindParam(":company_id", $this->company_id);
    $stmt->bindParam(":created_at", $this->created_at);
    $stmt->bindParam(":job_title", $this->job_title);
    $stmt->bindParam(":location", $this->location);
    $stmt->bindParam(":qualification", $this->qualification);
    $stmt->bindParam(":category_id", $this->category_id);
    $stmt->bindParam(":gender", $this->gender);
    $stmt->bindParam(":status", $this->status);
    $stmt->bindParam(":age", $this->age);
    $stmt->bindParam(":working_hours", $this->working_hours);
    $stmt->bindParam(":deleted_at", $this->null);


    // execute query
    if ($stmt->execute()) {
      return true;
    }

    return false;
  }

  // used when filling up the update job form
  function readOne(){
    // query to read single record
    $query = "SELECT * FROM ".$this->table_name." 
    INNER JOIN company_profile ON company_profile.company_id = ". $this->table_name .".company_id
            WHERE job_id = ? AND status = ? LIMIT 0,1";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // bind id of job to be updated
    $stmt->bindParam(1, $this->id);
    $stmt->bindParam(2,$this->active_status);

    // execute query
    $stmt->execute();

    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // set values to object properties
    $this->salary_range = $row['salary_range'];
    $this->description = $row['description'];
    $this->company_id = $row['company_id'];
    $this->age = $row['age'];
    $this->qualification = $row['qualification'];
    $this->gender = $row['gender'];
    $this->title = $row['title'];
    $this->location = $row['location'];
    $this->education = $row['education'];
    $this->experience_level = $row['experience_level']; 
    $this->education = $row['education']; 
    $this->company_email = $row['email'];
    $this->phone = $row['phone1'];

  }


  //check if row can be worked on
  public function is_workable(){
    $_query = "SELECT * FROM ".$this->table_name."
                         WHERE job_id = :id AND status = :status";
  $stmt =   $this->conn->prepare($_query);
    $stmt->bindParam(':id',$this->id);
    $stmt->bindParam(':status', $this->active_status);

    $stmt->execute();
    $this->_count = $num =  $stmt->rowCount();
    $this->_result = $stmt->fetch(PDO::FETCH_ASSOC);
    if($this->_count < 0){
      $this->_error = true;
      return false;
    }else{
      return $num;
    }
  }

  /**
   * Perform raw query
   */
  public function query($sql, $params = [],$class = false,$fetch = true) {
    $this->_error = false;
    if($this->_query = $this->conn->prepare($sql)) {
      $x = 1;
      if(count($params)) {
        foreach($params as $param) {
          $this->_query->bindValue($x, $param);
          $x++;
        }
      }

      if($this->_query->execute()) {
          
        if($fetch){
          if($class && $this->_fetchStyle === PDO::FETCH_CLASS){
            $this->_result = $this->_query->fetchAll($this->_fetchStyle,$class);
          } else {
            $this->_result = $this->_query->fetchAll($this->_fetchStyle);
          }
          
        $this->_count = $this->_query->rowCount();
        $this->_lastInsertID = $this->conn->lastInsertId();
          }
        
      } else {
        $this->_error = true;
      }
    }
    return $this;
  }

  // update the job
  function update()
  {

    if(!$this->is_workable()){
      return false;
    }

    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                salary_range = :salary_range,
                description = :description,
                age = :age,
                gender = :gender,
                updated_at = :updated_at,
                qualification = :qualification,
                sector = :sector,
                working_hours =:working_hours,
                status = :status,
                location =:location,
                title =:title
                 WHERE
                job_id = :id AND status = :status";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->salary_range = htmlspecialchars(strip_tags($this->salary_range));
    $this->description = htmlspecialchars(strip_tags($this->description));
    $this->age = htmlspecialchars(strip_tags($this->age));
    $this->gender = htmlspecialchars(strip_tags($this->gender));
    $this->qualification = htmlspecialchars(strip_tags($this->qualification));
    $this->updated_at = htmlspecialchars(strip_tags($this->updated_at));
    $this->sector = htmlspecialchars(strip_tags($this->sector));
    $this->working_hours = htmlspecialchars(strip_tags($this->working_hours));
    $this->location = htmlspecialchars(strip_tags($this->location));
    $this->title = htmlspecialchars(strip_tags($this->title));
    $this->id = htmlspecialchars(strip_tags($this->id));
    $this->status = 1;


    // bind new values
    $stmt->bindParam(':salary_range', $this->salary_range);
    $stmt->bindParam(':description', $this->description);
    $stmt->bindParam(':age', $this->age);
    $stmt->bindParam(':gender', $this->gender);
    $stmt->bindParam(':working_hours', $this->working_hours);
    $stmt->bindParam(':title', $this->title);
    $stmt->bindParam(':location', $this->location);
    $stmt->bindParam(':qualification', $this->qualification);
    $stmt->bindParam(':updated_at', $this->updated_at);
    $stmt->bindParam(':sector', $this->sector);
    $stmt->bindParam(':status', $this->status);
    $stmt->bindParam(':id', $this->id);

    // execute the query
    if ($stmt->execute()) {
      return true;
    }

    return false;
  }

  // delete the job
  function delete()
  {


    if(!$this->is_workable()){
      return false;
    }

    // delete query
    $query = "UPDATE " . $this->table_name . "
    SET status = ?,
    deleted_at = ?
    WHERE job_id = ? AND status = ?";

    // prepare query
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->id = htmlspecialchars(strip_tags($this->id));
    $this->deleted_at = date('Y-m-d H:i:s');
    
    // bind id of record to delete
    $stmt->bindParam(1, $this->not_active);
    $stmt->bindParam(2, $this->deleted_at);
    $stmt->bindParam(3, $this->id);
    $stmt->bindParam(4, $this->active_status);


    // execute query
    if ($stmt->execute()) {
      return true;
    }

    return false;
  }

  // search products
  function search($keywords)
  {

    // select all query
    $query = "SELECT *
            FROM
                " . $this->table_name . "
     INNER JOIN job_category ON job_category.job_category_id = ". $this->table_name .".category_id

            WHERE
                title LIKE ? OR location LIKE ? OR qualification LIKE ? AND status = ?
            ORDER BY
                visits DESC LIMIT 7";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $keywords = htmlspecialchars(strip_tags($keywords));
    $keywords = "%{$keywords}%";

    // bind
    $stmt->bindParam(1, $keywords);
    $stmt->bindParam(2, $keywords);
    $stmt->bindParam(3, $keywords);
    $stmt->bindParam(4, $this->active_status);


    // execute query
    $stmt->execute();

    return $stmt;
  }

  // read jobs with pagination
  public function readPaging($from_record_num, $records_per_page)
  {

    // select query
    $query = "SELECT
            *
            FROM
                " . $this->table_name . "
                WHERE status = ?
            ORDER BY created_at DESC
            LIMIT ?, ?";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // bind variable values
    $stmt->bindParam(1, $this->active_status);
    $stmt->bindParam(2, $from_record_num, PDO::PARAM_INT);
    $stmt->bindParam(3, $records_per_page, PDO::PARAM_INT);

    // execute query
    $stmt->execute();

    // return values from database
    return $stmt;
  }

  public function count()
  {
    $query = "SELECT COUNT(*) as total_rows FROM " . $this->table_name . "";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row['total_rows'];
  }

}
