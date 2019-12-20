<?php
function insertphoto($conn,$data)
{	
	//$data['password'] = isset($data['password'])? md5($data['password']):'';
	$stmt = $conn->prepare("INSERT INTO photocategory (`name`) VALUES (:name)");
	$stmt->bindParam(':name',$data['name']);
	if($stmt->execute())
		return true;
	return false;
}

function updatephoto($conn,$data,$id)
{

		$stmt = $conn->prepare("UPDATE photocategory SET name=:name WHERE id=:id");
		$stmt->bindParam(':name',$data['name']);
		$stmt->bindParam(':id',$id);
		if($stmt->execute())
		return true;
		return false;
}

function getAllphoto($conn)
{
	$stmt= $conn->prepare("SELECT * FROM photocategory");
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getphotoById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM photocategory WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}


function deletephoto($conn,$id)
{
	$user = getphotoById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM photocategory WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		//@unlink('uploads/'.$user['image']);
		return true;
	}	
	return false;
}