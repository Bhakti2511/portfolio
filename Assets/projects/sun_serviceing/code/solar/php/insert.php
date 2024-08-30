<?php
include "dbconnect.php";
header("Content-Type: application/json; charset=UTF-8");
$data = json_decode(file_get_contents("php://input"),true);


if(isset($data))
{
    $action = $data['action'];    
    if($action == "insertdata_personal")
    {
        $sql = "INSERT INTO users (id, name, number, email, address , date ,slot, time) VALUES (:id, :name, :number, :email, :address , :date ,:slot , :time)";
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(':id',$data['id'],PDO::PARAM_INT);
        $stmt->bindParam(':name',$data['name'],PDO::PARAM_STR);
        $stmt->bindParam(':number',$data['number'],PDO::PARAM_INT);
        $stmt->bindParam(':email',$data['email'],PDO::PARAM_STR);
        $stmt->bindParam(':address',$data['address'],PDO::PARAM_STR);
        $stmt->bindParam(':date',$data['date'],PDO::PARAM_STR);
        $stmt->bindParam(':slot',$data['slot'],PDO::PARAM_STR);
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
    elseif($action == "feedback")
    {
        $sql = "INSERT INTO feedback (improvment, dislike, likes, suggestion) VALUES (:improvment, :dislike, :like, :suggestion)";
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(':improvment',$data['improvment'],PDO::PARAM_STR);
        $stmt->bindParam(':dislike',$data['dislike'],PDO::PARAM_STR);
        $stmt->bindParam(':like',$data['likes'],PDO::PARAM_STR);
        $stmt->bindParam(':suggestion',$data['suggestion'],PDO::PARAM_STR);
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
    elseif($action == "enquiry")
    {
        $sql = "INSERT INTO enquiry (name, email, number, problem) VALUES (:name, :email, :number, :problem)";
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(':name',$data['name'],PDO::PARAM_STR);
        $stmt->bindParam(':email',$data['email'],PDO::PARAM_STR);
        $stmt->bindParam(':number',$data['number'],PDO::PARAM_STR);
        $stmt->bindParam(':problem',$data['problem'],PDO::PARAM_STR);
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
        $sql = "INSERT INTO service_registered ( services,company, problem) values ( :services , :comapny , :problem)";
        $stmt = $conn->prepare($sql);
        // $stmt->bindParam(':id',$data['id'],PDO::PARAM_INT);
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
    // elseif($action == "deletedata")
    // {
    //     $sql = "DELETE FROM items WHERE id = :id";
    //     $stmt= $conn->prepare($sql);
    //     $stmt->bindParam(':id',$data['id'],PDO::PARAM_INT);
    //     $stmt->execute();
    //     if($stmt)
    //     {
    //         $response = array("status"=>true, "data" => "data deleted");
    //     }
    //     else
    //     {
    //         $response = array("status"=>false, "data" => "ano data found");
    //     }
    //     echo json_encode($response);
        
    // }
}

?>

