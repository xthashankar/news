<?php
function dd($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

function redirect($path)
{
	return header('location:'.$path);
}

function redirection($path)
{
	echo '<script>window.location.href="'.$path.'";</script>';
}

function showMsg($msg,$type)
{
	if($type=='success')
	{
		$_SESSION['showmsg'] = '<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i>
			</button><i class="icon-ok green"></i>Congrats !!! '.$msg.'</div>';
	}
}

function displayMsg()
{
	if(isset($_SESSION['showmsg'])) echo $_SESSION['showmsg']; unset($_SESSION['showmsg']);
}

function uploadFile($path,$file)
{
	$source = $file['tmp_name'];
	$oldName = $file['name'];
	$temp = explode('.', $oldName);
	$newName = md5(rand(111111,999999).time().$temp[0]).'.'.$temp[1];

	if(!is_dir($path))
		mkdir($path,777);
	
	if(move_uploaded_file($source, $path.'/'.$newName))
		return $newName;

	return false;	 

}