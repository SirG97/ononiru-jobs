<?php

require 'Base.php';

class job extends Base {

  // database connection and table name
  private $conn,$table_name = "jobs";

  // object properties
  public $id, $company_name, $description, $location, $salary_range, $qualification, $working_hours, $age,
   $gender, $sector, $status,$_error , $created_at, $updated_at, $deleted_at, $company_id,$_count,$_result,$_lastInsertID;
  private $null  = null,$deleted_status = 2;
  public $active_status = 1,$not_active = 0;
  private $_fetchStyle = PDO::FETCH_CLASS;
  // constructor with $db as database connection
  public function __construct($db){
    $this->conn = $db;
  }

  // read jobs
  function read()
  {

    // select all query
    $query = "SELECT id,company_id,description,location,salary_range,qualification  FROM
                " . $this->table_name . "
                WHERE status = :status
                ORDER BY created_at
                 DESC";

    // prepare query statement
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":status", $this->active_status);


    // execute query
    $stmt->execute();

    return $stmt;
  }

  // create job
  function create()
  {

    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
             job_id=:job_id,salary_range=:salary_range,title=:job_title,description=:description, company_id=:company_id, created_at=:created_at,qualification=:qualification,gender=:gender,age=:age,sector=:sector,location=:location,
                status=:status,working_hours=:working_hours,deleted_at=:deleted_at";

    // prepare query
    $stmt = $this->conn->prepare($query);
    $job_id = time().uniqid();
    // sanitize
    $this->salary_range = htmlspecialchars(strip_tags($this->salary_range));
    $this->description = htmlspecialchars(strip_tags($this->description));
    $this->company_id = htmlspecialchars(strip_tags($this->company_id));
    $this->created_at = htmlspecialchars(strip_tags($this->created_at));
    $this->job_title = htmlspecialchars(strip_tags($this->job_title));

    $this->qualification = htmlspecialchars(strip_tags($this->qualification));
    $this->location = htmlspecialchars(strip_tags($this->location));
    $this->sector = htmlspecialchars(strip_tags($this->sector));
    $this->status = 1;
    $this->gender = htmlspecialchars(strip_tags($this->gender));
    $this->age = htmlspecialchars(strip_tags($this->age));
    $this->working_hours = htmlspecialchars(strip_tags($this->working_hours));

    // bind values
    $stmt->bindParam(":salary_range", $this->salary_range);
    $stmt->bindParam(":job_id", $job_id);
    $stmt->bindParam(":description", $this->description);
    $stmt->bindParam(":company_id", $this->company_id);
    $stmt->bindParam(":created_at", $this->created_at);
    $stmt->bindParam(":job_title", $this->job_title);
    $stmt->bindParam(":location", $this->location);
    $stmt->bindParam(":qualification", $this->qualification);
    $stmt->bindParam(":sector", $this->sector);
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
    $query = "SELECT
                id,company_name,company_id,location,qualification,description,age,gender,salary_range
            FROM
                " . $this->table_name . "
            WHERE
                id = ? AND status = ?
            LIMIT
                0,1";

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
            WHERE
                title LIKE ? OR location LIKE ? OR qualification LIKE ?
            ORDER BY
                created_at DESC";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $keywords = htmlspecialchars(strip_tags($keywords));
    $keywords = "%{$keywords}%";

    // bind
    $stmt->bindParam(1, $keywords);
    $stmt->bindParam(2, $keywords);
    $stmt->bindParam(3, $keywords);

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
