 <?php
function insertcomment($conn,$data)
{
/*	print_r($data);
	exit();*/
	$stmt = $conn->prepare("INSERT INTO comment( `name`,`email`, `comment`) VALUES ( :name,:email, :comment)");
	$stmt->bindParam(':name',$data['name']);
	$stmt->bindParam(':email',$data['email']);	
	$stmt->bindParam(':comment',$data['comment']);
	if($stmt->execute())
		return true;
	return false;
}


/*function updategallery($conn,$data)
{
	if(isset($data['image']))
	{
		$stmt = $conn->prepare("UPDATE photogallery SET Caption=:Caption, category=:category,  image=:image WHERE id=:id");
		$stmt->bindParam(':Caption',$data['Caption']);
		$stmt->bindParam(':category',$data['category']);	
		$stmt->bindParam(':image',$data['image']);
		$stmt->bindParam(':id',$data['id']);
	}
	else
	{
		$stmt = $conn->prepare("UPDATE photogallery SET  Caption=:Caption, category=:category WHERE id=:id");
		$stmt->bindParam(':Caption',$data['Caption']);
		$stmt->bindParam(':category',$data['category']);	
		$stmt->bindParam(':id',$data['id']);
		
	}
	

	if($stmt->execute())
		return true;


	return false;
}
*/
function getAllcomment($conn)
{
	$stmt= $conn->prepare("SELECT * FROM comment");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getcommentById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM comment WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}


function deletecomment($conn,$id)
{
	$user = getcommentById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM comment WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		//@unlink('photouploads/'.$user['image']);
		return true;
	}	
	return false;
}

?>