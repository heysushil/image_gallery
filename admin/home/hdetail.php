<?php
include('database.php');
error_reporting(0);
// recive cover photo
if(isset($_POST['uploadcover'])){
	$albumName = $_POST['albumName'];
	$albumDetail = $_POST['albumDetail'];

	$cover = $_FILES['cover'];
	// echo "<pre>";print_r($cover);
	$path = '../cover/';
	$coverName = date('ymdhis').$_FILES['cover']['name'];
	$tmpPath = $_FILES['cover']['tmp_name'];
	$finalPath = $path.$coverName;
	
	$data = "INSERT INTO covers(covTitile,covShortDetail,covImgName) VALUES('$albumName','$albumDetail','$coverName')";
	if($_FILES['cover']['size'] !== 0){
		if(mysqli_query($con, $data)){
			move_uploaded_file($tmpPath, $finalPath);
			$coverData = mysqli_query($con, "SELECT cov_id FROM covers WHERE covImgName='$coverName' LIMIT 1");
			$row = mysqli_fetch_assoc($coverData);
			$covid = $row['cov_id'];
			// print_r($row);exit();
			header('Location:add-images.php?cover_id='.$covid.'');
		}else{
			header('Location:add-album.php?message=problem-upload-cover');
		}
	}else{
		header('Location:index.php?message=blank-try');
	}

}

// add inner imageg behalf of cover images
if(isset($_POST['uploadimage'])){
	error_reporting(0);
	$coverID = $_POST['cover_id'];
	$path = '../images/';
	$img = $_FILES['img'];
	$imgName =date('ymdhis'). $_FILES['img']['name'];
	$imgTmpName = $_FILES['img']['tmp_name'];
	$imgFinalPath = $path.$imgName ;
	move_uploaded_file($_FILES['img']['tmp_name'], $imgFinalPath);
	$img1 = $_FILES['img1'];
	$img1Name = date('ymdhis').$_FILES['img1']['name'];
	$img1TmpName = $_FILES['img1']['tmp_name'];
	$img1FinalPath = $path.$img1Name;
	move_uploaded_file($_FILES['img1']['tmp_name'], $img1FinalPath);
	$img2 = $_FILES['img2'];
	$img2Name = date('ymdhis').$_FILES['img2']['name'];
	$img2TmpName = $_FILES['img2']['tmp_name'];
	$img2FinalPath = $path.$img2Name;
	move_uploaded_file($_FILES['img2']['tmp_name'], $img2FinalPath);
	$img3 = $_FILES['img3'];
	$img3Name = date('ymdhis').$_FILES['img3']['name'];
	$img3TmpName = $_FILES['img3']['tmp_name'];
	$img3FinalPath = $path.$img3Name;
	move_uploaded_file($_FILES['img3']['tmp_name'], $img3FinalPath);
	$img4 = $_FILES['img4'];
	$img4Name = date('ymdhis').$_FILES['img4']['name'];
	$img4TmpName = $_FILES['img4']['tmp_name'];
	$img4FinalPath = $path.$img4Name;
	move_uploaded_file($_FILES['img4']['tmp_name'], $img4FinalPath);
	$img5 = $_FILES['img5'];
	$img5Name = date('ymdhis').$_FILES['img5']['name'];
	$img5TmpName = $_FILES['img5']['tmp_name'];
	$img5FinalPath = $path.$img5Name;
	move_uploaded_file($_FILES['img5']['tmp_name'], $img5FinalPath);
	$img6 = $_FILES['img6'];
	$img6Name = date('ymdhis').$_FILES['img6']['name'];
	$img6TmpName = $_FILES['img6']['tmp_name'];
	$img6FinalPath = $path.$img6Name;
	move_uploaded_file($_FILES['img6']['tmp_name'], $img6FinalPath);
	$img7 = $_FILES['img7'];
	$img7Name = date('ymdhis').$_FILES['img7']['name'];
	$img7TmpName = $_FILES['img7']['tmp_name'];
	$img7FinalPath = $path.$img7Name;
	move_uploaded_file($_FILES['img7']['tmp_name'], $img7FinalPath);
	$img8 = $_FILES['img8'];
	$img8Name = date('ymdhis').$_FILES['img8']['name'];
	$img8TmpName = $_FILES['img8']['tmp_name'];
	$img8FinalPath = $path.$img8Name;
	move_uploaded_file($_FILES['img8']['tmp_name'], $img8FinalPath);
	$img9 = $_FILES['img9'];
	$img9Name = date('ymdhis').$_FILES['img9']['name'];
	$img9TmpName = $_FILES['img9']['tmp_name'];
	$img9FinalPath = $path.$img9Name;
	move_uploaded_file($_FILES['img9']['tmp_name'], $img9FinalPath);

	if(mysqli_query($con, "INSERT INTO imges(cov_id,img,img1,img2,img3,img4,img5,
img6,img7,img8,img9) VALUES('$coverID','$imgName','$img1Name','$img2Name','$img3Name',
'$img4Name','$img5Name','$img6Name','$img7Name','$img8Name','$img9Name'
) ")){
		header('Location:index.php?message=successfully-uploaded-images');
	}else{
		header('Location:add-album?message=problem-uploading-images');
	}

}

if(isset($_POST['innerimg'])){
		
	for($i=0; $i<count($_FILES['img']['name']); $i++){
		// echo $_FILES['img']['name'][$i];
		$coverID = $_POST['cover_id'];
		$path = '../images/';
		if(isset($_FILES['img'])){
			// var_dump($_FILES['img']);
			// print_r($_FILES['img']);exit();
			$imgName = date('ymdhis').$_FILES['img']['name'][$i];
			$imgFinalPath = $path.$imgName;
			move_uploaded_file($_FILES['img']['tmp_name'][$i], $imgFinalPath);
			if($_FILES['img']['size'][$i] !== 0 ){
				mysqli_query($con, "INSERT INTO imges(cov_id,img) VALUES('$coverID','$imgName')");
			}
		}

	}
	header('Location:index.php?message=successfully-uploaded-images');
}

// delete full album at once
if (!empty($_GET['cov_delete'])) {
	$covid = substr($_GET['cov_delete'], 4);
	echo "<script>alert('Warning! If click ok, then the full album with inner images will delete.')</script>";

	// delete covers related images
	$imgdata = mysqli_query($con, "SELECT * FROM imges WHERE cov_id='$covid' ");
	foreach ($imgdata as $key => $value) {		
		// $imgrow = mysqli_fetch_assoc($imgdata);
		// echo "<pre>";print_r($value);
		$filelink = '../images/'.$value['img'];
		if ($value) {
			if(unlink($filelink)){
				mysqli_query($con, "DELETE FROM imges WHERE cov_id='$covid'");
				echo "<script>alert('File deleted successfully.')</script>";
				header('Location:albums.php?message=successfully-deleted-album');
			}else{
				echo "<script>alert('File deleted successfully.')</script>";
				mysqli_query($con, "DELETE FROM imges WHERE cov_id='$covid'");
				header('Location:albums.php?message=successfully-deleted-album');
			}
		}	
	}
	// echo $count = $i;
	// echo "<pre>"; print_r($imgrow);
	// $filelink = '../images/'.$row['covImgName'];
	// break();
	// exit();

	// delete cover detail from table
	$covdata = mysqli_query($con, "SELECT * FROM covers WHERE cov_id='$covid' ");
	$row = mysqli_fetch_assoc($covdata);
	$filelink = '../cover/'.$row['covImgName'];
	if ($row) {
		if(unlink($filelink)){
			mysqli_query($con, "DELETE FROM covers WHERE cov_id='$covid'");
			echo "<script>alert('File deleted successfully.')</script>";
			header('Location:albums.php?message=successfully-deleted-album');
		}else{
			echo "<script>alert('File deleted successfully.')</script>";
			mysqli_query($con, "DELETE FROM covers WHERE cov_id='$covid'");
			header('Location:albums.php?message=successfully-deleted-album');
		}

	}
	
}

if(!empty($_GET['singleImgId'])){
	$imgid = $_GET['singleImgId'];
	$covdata = mysqli_query($con, "SELECT * FROM imges WHERE img_id='$imgid' ");
	$row = mysqli_fetch_assoc($covdata);
	$covid = $row['cov_id'];
	$filelink = '../images/'.$row['img'];
	if ($row) {
		if(unlink($filelink)){
			mysqli_query($con, "DELETE FROM imges WHERE img_id='$imgid'");
			echo "<script>alert('File deleted successfully.')</script>";
			header('Location:images-list.php?cover_id='.$covid.'');
		}else{
			echo "<script>alert('File deleted successfully.')</script>";
			mysqli_query($con, "DELETE FROM imges WHERE cov_id='$covid'");
			header('Location:images-list.php?cover_id='.$covid.'');
		}
	}
}
?>