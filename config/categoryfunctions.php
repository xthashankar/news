<?php
function insertcategory($conn,$data)
{
	
	$stmt = $conn->prepare("INSERT INTO category(`name`, `slug`, `status`) VALUES (:name, :slug, :status)");
	$stmt->bindParam(':name',$data['name']);
	$stmt->bindParam(':slug',$data['slug']);
	$stmt->bindParam(':status',$data['status']);

	if($stmt->execute())
		return true;


	return false;
}

function updatecategory($conn,$data)
{
	dd($data);
		$stmt = $conn->prepare("UPDATE category SET name=:name, slug=:slug, status=:status WHERE id=:id");
		$stmt->bindParam(':name',$data['name']);
		$stmt->bindParam(':slug',$data['slug']);
		$stmt->bindParam(':status',$data['status']);
		$stmt->bindParam(':id',$data['id']);


	if($stmt->execute())
		return true;


	return false;
}

function getAllCategory($conn)
{
	$stmt= $conn->prepare("SELECT * FROM category");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getCategoryById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM category WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}


function deleteCategory($conn,$id)
{
	$user = getCategoryById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM category WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		//@unlink('uploads/'.$user['image']);
		return true;
	}	


	return false;
}