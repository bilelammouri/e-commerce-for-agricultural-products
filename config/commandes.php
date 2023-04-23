<?php

/* Function add user  credential */
function addUser($name, $surname, $email, $password)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("INSERT INTO user (name, surname, email, password) VALUES (?, ?, ?, ?)");

    $req->execute(array($name, $surname, $email, $password));

    return true;

    $req->closeCursor();
  }
}

/* Function get user  credential */
 function getUsers($email, $password){
  
   if(require("connexion.php")){

     $req = $access->prepare("SELECT * FROM user ");

     $req->execute();

     if($req->rowCount() == 1){
      
       $data = $req->fetchAll(PDO::FETCH_OBJ);

       foreach($data as $i){
         $mail = $i->email;
         $pw = $i->password;
       }

       if($mail == $email AND $pw == $password)
       {
         return $data;
       }
       else{
           return false;
       }

     }

   }

 }

/* Function update an product on database */
function update($image, $name, $price, $desc, $category, $id)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("UPDATE products SET `image` = ?, name = ?, price = ?, description = ?, category = ? WHERE id=?");

    $req->execute(array($image, $name, $price, $desc, $category, $id));

    $req->closeCursor();
  }
}

/* Function display an product on database */
function displayProduct($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM products WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

/* Function insert an product to database */
  function insert($image, $name, $price, $desc, $category)
  {
    if(require("connexion.php"))
    {
      $req = $access->prepare("INSERT INTO products (image, name, price, description, category) VALUES (?, ?, ?, ?, ?)");

      $req->execute(array($image, $name, $price, $desc, $category));

      $req->closeCursor();
    }
  }

/* Function display an product on database */
function display()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM products ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

/* Function delete an product in database */
function delete($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM products WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

/* Function get administrator  credential */
function getAdmin($email, $password){
  
  if(require("connexion.php")){

    $req = $access->prepare("SELECT * FROM admin WHERE id=33");

    $req->execute();

    if($req->rowCount() == 1){
      
      $data = $req->fetchAll(PDO::FETCH_OBJ);

      foreach($data as $i){
        $mail = $i->email;
        $pw = $i->password;
      }

      if($mail == $email AND $pw == $password)
      {
        return $data;
      }
      else{
          return false;
      }

    }

  }

}

?>