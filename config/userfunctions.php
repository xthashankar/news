<?php
function insertUser($conn,$data)
{
	
	$data['password'] = isset($data['password'])? md5($data['password']):'';
	$stmt = $conn->prepare("INSERT INTO tbl_user(`f_name`, `l_name`, `email`, `password`,`address`, `contact`,`image`, `role`, `status`) VALUES (:f_name, :l_name, :email, :password, :address,:contact, :image, :role, :status)");
	$stmt->bindParam(':f_name',$data['f_name']);
	$stmt->bindParam(':l_name',$data['l_name']);
	$stmt->bindParam(':email',$data['email']);
	$stmt->bindParam(':password',$data['password']);
	$stmt->bindParam(':image',$data['image']);
	$stmt->bindParam(':address',$data['address']);
	$stmt->bindParam(':contact',$data['contact']);
	$stmt->bindParam(':role',$data['role']);
	$stmt->bindParam(':status',$data['status']);

	if($stmt->execute())
		return true;


	return false;
}

function updateUser($conn,$data)
{
	if(isset($data['image']))
	{
		$stmt = $conn->prepare("UPDATE tbl_user SET f_name=:f_name, l_name=:l_name, email=:email, image=:image, address=:address, contact=:contact,  role=:role, status=:status WHERE id=:id");
		$stmt->bindParam(':f_name',$data['f_name']);
		$stmt->bindParam(':l_name',$data['l_name']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':image',$data['image']);
		$stmt->bindParam(':address',$data['address']);
		$stmt->bindParam(':contact',$data['contact']);
		$stmt->bindParam(':role',$data['role']);
		$stmt->bindParam(':status',$data['status']);
		$stmt->bindParam(':id',$data['id']);
	}
	else
	{
		$stmt = $conn->prepare("UPDATE tbl_user SET f_name=:f_name, l_name=:l_name, email=:email, address=:address, contact=:contact, role=:role, status=:status WHERE id=:id");
		$stmt->bindParam(':f_name',$data['f_name']);
		$stmt->bindParam(':l_name',$data['l_name']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':address',$data['address']);
		$stmt->bindParam(':contact',$data['contact']);
		$stmt->bindParam(':role',$data['role']);
		$stmt->bindParam(':status',$data['status']);
		$stmt->bindParam(':id',$data['id']);	
	}
	

	if($stmt->execute())
		return true;


	return false;
}

function getAllUsers($conn)
{
	$stmt= $conn->prepare("SELECT * FROM tbl_user");
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getUserById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM tbl_user WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}


function deleteUser($conn,$id)
{
	$user = getUserById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM tbl_user WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		@unlink('uploads/'.$user['image']);
		return true;
	}	


	return false;
}