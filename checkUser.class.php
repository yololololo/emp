<?php 
class checkUser{
	//验证用户合法性
function check($user,$pass){
	$db_class=new db();
	$db=$db_class->conn('emp');
	$stmt=$db->prepare("select * from admin where user=?");
	$stmt->execute(array($user));
		if($row=$stmt->fetch()){
			if($row['pass']==$pass){
				$id=$row['id'];
				return $id;
			}else{
				return null;
			}
		}else{
			return null;
			
		}
		
	

}
}

