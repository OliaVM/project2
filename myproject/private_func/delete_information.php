<?php
//Deleting of record
if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
	if (isset($_POST['button_del'])) {  
	    $del = $_POST['del_id'];
	    var_dump($del);
	    $sql = 'DELETE FROM notes WHERE id =:del and user_id=:user_id';
	    var_dump($sql);
	    $prep = $basa->prepare($sql);
		$prep->bindValue(':del', $del, PDO::PARAM_INT);
		$prep->bindValue(':user_id', $_SESSION['id'], PDO::PARAM_INT);
		$prep->execute(); 
<<<<<<< HEAD
		header("Location: ../index.php?page=1&key=indiv&page_name=content");
=======
		header("Location: ../index.php?page=1&key=indivpage_name=content");
>>>>>>> dc0ba4b324acb3b305154e40501cdfc4036a3143
		//header("Location: http://myproject.local/index.php?page=1&key=indiv");
	}
}
