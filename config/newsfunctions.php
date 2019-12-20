 <?php
function insertnews($conn,$data)
{
	$stmt = $conn->prepare("INSERT INTO news(`title`, `description`, `date`, `image`,`categories`, `status`,`source`, `publisher`) VALUES (:title,  :description, :d, :image,:categories, :status, :source, :publisher )");
	$stmt->bindParam(':title',$data['title']);
	$stmt->bindParam(':description',$data['description']);
	$stmt->bindParam(':d',$data['date']);
	$stmt->bindParam(':image',$data['image']);
	$stmt->bindParam(':categories',$data['categories']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':source',$data['source']);
	$stmt->bindParam(':publisher',$data['publisher']);


	if($stmt->execute())
		return true;
	return false;
}
function categorynews($conn)
{
	
	$stmt= $conn->prepare("SELECT * FROM category");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;

}

function updatenews($conn,$data)
{
	if(isset($data['image']))
	{
		$stmt = $conn->prepare("UPDATE news SET title=:title, description=:description,  image=:image, categories=:categories, status=:status,  source=:source, publisher=:publisher WHERE id=:id");
		$stmt->bindParam(':title',$data['title']);
		$stmt->bindParam(':description',$data['description']);
		$stmt->bindParam(':image',$data['image']);
		$stmt->bindParam(':categories',$data['categories']);
		$stmt->bindParam(':status',$data['status']);
		$stmt->bindParam(':source',$data['source']);
		$stmt->bindParam(':publisher',$data['publisher']);
		$stmt->bindParam(':id',$data['id']);
	}
	else
	{
		$stmt = $conn->prepare("UPDATE news SET  title=:title, description=:description, categories=:categories, status=:status,  source=:source, publisher=:publisher WHERE id=:id");
		$stmt->bindParam(':title',$data['title']);
		$stmt->bindParam(':description',$data['description']);
		/*$stmt->bindParam(':image',$data['image']);*/
		$stmt->bindParam(':categories',$data['categories']);
		$stmt->bindParam(':status',$data['status']);
		$stmt->bindParam(':source',$data['source']);
		$stmt->bindParam(':publisher',$data['publisher']);
	}
	

	if($stmt->execute())
		return true;


	return false;
}

function getAllNews($conn)
{
	$stmt= $conn->prepare("SELECT * FROM news");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getNewsById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM news WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}


function deleteNews($conn,$id)
{
	$user = getNewsById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM news WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		@unlink('newsuploads/'.$user['image']);
		return true;
	}	
	return false;
}

?>