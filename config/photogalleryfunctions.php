 <?php
function insertgallery($conn,$data)
{
/*	print_r($data);
	exit();*/
	$stmt = $conn->prepare("INSERT INTO photogallery( `Caption`,`category`, `image`) VALUES ( :Caption,:category, :image)");
	$stmt->bindParam(':Caption',$data['Caption']);
	$stmt->bindParam(':category',$data['category']);	
	$stmt->bindParam(':image',$data['image']);
	if($stmt->execute())
		return true;
	return false;
}
function categoryphotogallery($conn)
{
	
	$stmt= $conn->prepare("SELECT * FROM photocategory");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;

}

function updategallery($conn,$data)
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

function getAllgallery($conn)
{
	$stmt= $conn->prepare("SELECT * FROM photogallery");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getgalleryById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM photogallery WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}


function deletegallery($conn,$id)
{
	$user = getNewsById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM photogallery WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		@unlink('photouploads/'.$user['image']);
		return true;
	}	
	return false;
}

?>