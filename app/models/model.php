<?php 
namespace coding\app\models;
use coding\app\system\AppSystem;
class Model{
    public static  $tblName;
   
    function save():bool{
        $values=array();
        $columns=array();
        //get_object_
        foreach(get_object_vars($this) as $key=> $property){
            //echo $property;
            if($property!=self::$tblName)
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;}

        }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
       $sql_query="insert into ".self::$tblName." (".$columns." ) values (".$values.")";
    //    echo  $sql_query."<br>";
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        if($stmt->execute())
         return true;
        return false;
    
    }
    public function selectWhere($condCol="id",$condVal="1"){
       
        $table=self::$tblName;
        $where="$condCol = '$condVal'";
        $sql_query="select * from $table where $where";
        // echo $sql_query."<br>";
        // print_r( $sql_query);
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
    
        return $stmt->fetchAll();
        
        

    }
    public function selectAll($order=null,$limit=null){
        $sql_query="select * from ".self::$tblName." ".$order." ".$limit;
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchAll();
      

    }
    public function joinThree($sl_list=null,$tbNameOne,$tbNameTwo,$condOne,$tbNameThree,$condTwo){
        if($sl_list!=null){
                 
            $query_list=implode(",",$sl_list);
        }
        $sql_query= " select $query_list from $tbNameOne JOIN $tbNameTwo on $condOne join 
        ,$tbNameThree on $condTwo";
        // $stmt=AppSystem::$appSystem->database->pdo->query("users")->join("products "," inner "," on category.id = 3")->query_build();
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
       
   return $stmt->fetchAll();
    }


   
    public function update($where_condition):bool{
  
        $table_name=self::$tblName;
        $query = '';  
        $condition = ''; 
          foreach(get_object_vars($this) as $key => $value)  
          {  
               $query .= $key . "='".$value."', ";  
          }  
         $query = substr($query, 0, -2);  
    
         foreach($where_condition as $key => $value)  
          {  
               $condition .= $key . "='".$value."' AND ";  
          }  
           $condition = substr($condition, 0, -5);  
            $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
            $stmt=AppSystem::$appSystem->database->pdo->prepare( $query);
            if($stmt->execute())
              return true;
             return false;
      
    
        }
        public function delete($where_condition):bool{
            $table_name=self::$tblName;
            $condition = '';
            foreach($where_condition as $key => $value)  
            {  
                 $condition .= $key . "='".$value."' AND ";  
            }  
            $condition = substr($condition, 0, -5);
            $sql_query= " delete from $table_name where ".$condition."";
            $stmt=AppSystem::$appSystem->database->pdo->prepare( $sql_query);
            if($stmt->execute())
              return true;
             return false;
        }
    
}
?>