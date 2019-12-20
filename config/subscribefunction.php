 <?php
function insertsubscriber($conn,$data)
{
/*	print_r($data);
	exit();*/
	$stmt = $conn->prepare("INSERT INTO subscriber( `name`,`email`) VALUES ( :name,:email)");
	$stmt->bindParam(':name',$data['name']);
	$stmt->bindParam(':email',$data['email']);	
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
function getAllsubscriber($conn)
{
	$stmt= $conn->prepare("SELECT * FROM subscriber");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getsubscriberById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM subscriber WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}


function deletesubscriber($conn,$id)
{
	$user = getsubscriberById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM subscriber WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		//@unlink('photouploads/'.$user['image']);
		return true;
	}	
	return false;
}

?>