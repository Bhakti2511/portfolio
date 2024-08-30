<?php
include "dbconnect.php";
header("Content-Type: application/json; charset=UTF-8");
$data = json_decode(file_get_contents("php://input"),true);


if(isset($data))
{
    $action = $data['action'];    
    if($action == "insertdata_personal")
    {
        $sql = "INSERT INTO personal_details (id, name, number, email, address , date , time) VALUES (:id, :name, :number, :email, :address , :date , :time)";
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(':id',$data['id'],PDO::PARAM_INT);
        $stmt->bindParam(':name',$data['name'],PDO::PARAM_STR);
        $stmt->bindParam(':number',$data['number'],PDO::PARAM_INT);
        $stmt->bindParam(':email',$data['email'],PDO::PARAM_STR);
        $stmt->bindParam(':address',$data['address'],PDO::PARAM_STR);
        $stmt->bindParam(':date',$data['date'],PDO::PARAM_STR);
        $stmt->bindParam(':time',$data['time'],PDO::PARAM_STR);
        $stmt->execute();
        
        if($conn->lastInsertId() > 0 )
        {
            $response = array("status"=>true, "data" => "added successfully");
        }
        else
        {
            $response = array("status"=>false, "data" => "No item found");
        }
        echo json_encode($response);
    }
    elseif($action == "insertdata_service")
    {
        $sql = "INSERT INTO service (id , services,company, problem) values (:id,:services , :comapny , :problem)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$data['id'],PDO::PARAM_INT);
        $stmt->bindParam(':services', $data['services'],PDO::PARAM_STR);
        $stmt->bindParam(':comapny', $data['company'],PDO::PARAM_STR);
        $stmt->bindParam(':problem', $data['problem'],PDO::PARAM_STR);
        $stmt->execute();

        if($conn->lastInsertId() > 0)
        {
            $response= array("status"=>true, "data" => "added successfully");
        }
        else
        {
            $response= array("status"=>false, "data" => "no item  found");
        }
        echo json_encode($response);
    }
    else if($action == "getuserdetails")
    {
        $query="select * from users";
        $step = $conn->prepare($query);
        $step->execute();
        $step = $step->fetchAll(PDO::FETCH_ASSOC);

        if(count($step) > 0 )
        {
            $response = array("status"=>true, "data" => $step);
        }
        else
        {
            $response = array("status"=>false, "data" => "No item found");
        }

        echo json_encode($response);
    }
    elseif($action = "Personal_delete")
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(':id',$data['id'],PDO::PARAM_INT);
        $stmt->execute();
        if($stmt)
        {
            $response = array("status"=>true, "data" => "data deleted");
        }
        else
        {
            $response = array("status"=>false, "data" => "ano data found");
        }
        echo json_encode($response);
        
    }
    // elseif($action == "updatedata")
    // {
    //     $sql = "UPDATE items SET name = :name, description = :description , price = :price , category_id = :category_id WHERE id = :id";
    //     $stmt= $conn->prepare($sql);
    //     $stmt->bindParam(':id',$data['id'],PDO::PARAM_INT);
    //     $stmt->bindParam(':name',$data['name'],PDO::PARAM_STR);
    //     $stmt->bindParam(':price',$data['price'],PDO::PARAM_STR);
    //     $stmt->bindParam(':category_id',$data['category_id'],PDO::PARAM_STR);
    //     $stmt->bindParam(':description',$data['description'],PDO::PARAM_STR);
    //     $stmt->execute();
    //     if($stmt)
    //     {
    //         $response = array("status"=>true, "data" => "updated successfully");
    //     }
    //     else
    //     {
    //         $response = array("status"=>false, "data" => "ano data found");
    //     }
    //     // $row=mysqli_fetch_assoc($stmt);
    //     echo json_encode($response);
    // }
    // 
}

?>

