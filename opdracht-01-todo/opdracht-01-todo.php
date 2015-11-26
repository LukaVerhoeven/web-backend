<?php
session_start();
$todo = array();


//var_dump( str_split($arrayy));
$todostring;
$donestring;
$AlleTakenZijnKlaar = false;

if (!isset($_SESSION["Todo"])){
   $_SESSION["Todo"]= array();  
}
if (!isset($_SESSION["done"])){
   $_SESSION["done"]= array();  
}

/*
if (!isset($_COOKIE["todo"])){
 // setcookie( "todo" , time() + 300000 );    
}
*/


if (isset($_COOKIE["todo"])){
    
    $todostring = $_COOKIE["todo"] ;
    $todo = unserialize($_COOKIE["todo"]); 
    $_SESSION["Todo"] = $todo;
}

if (isset($_COOKIE["done"])){
    
    $donestring = $_COOKIE["done"] ;
    $todo = unserialize($_COOKIE["done"]); 
    $_SESSION["done"] = $todo;
}






if    (isset($_POST["submit"]) && !empty($_POST["item"])){   
   
    

    $_SESSION["Todo"][] = $_POST["item"];     
    $todostring = serialize($_SESSION["Todo"]);
    
    //array_push($_COOKIE["todo"] , $_SESSION["Item"]);
    setcookie( "todo" ,$todostring, time() + 300000 );
    
    //$_COOKIE["todo"] = $todostring; //werkt niet
    
  
    }


if    (isset($_SESSION["Todo"]) && isset($_COOKIE["todo"])){
   /*
   var_dump($_COOKIE["todo"]);
   var_dump($todo);
   var_dump($_SESSION["Todo"]);
    var_dump( $_SESSION["done"]);
   */
    
    
}


 
    if(isset($_POST["todo"]) && isset($_SESSION["Todo"][(int)$_POST["todo"]])){
        
        //var_dump((int)$_POST["todo"]);
        $id = (int)$_POST["todo"];
        
        $_SESSION["done"][] = $_SESSION["Todo"][$id];
        unset($_SESSION["Todo"][$id]);   
        $todostring = serialize($_SESSION["Todo"]);
        $donestring = serialize($_SESSION["done"]); 
        setcookie( "todo" ,$todostring, time() + 300000 );
        setcookie( "done" ,$donestring, time() + 300000 );
 
    
    }  

 if(isset($_POST["done"]) && isset($_SESSION["done"][(int)$_POST["done"]])){
     
       
     
     $id = (int)$_POST["done"];
    // var_dump((int)$_POST["done"]);
     //var_dump($_SESSION["done"][$id]);
     
        $_SESSION["Todo"][] = $_SESSION["done"][$id];
     
        unset($_SESSION["done"][$id]);
        $todostring = serialize($_SESSION["Todo"]);
        $donestring = serialize($_SESSION["done"]); 
        setcookie( "todo" ,$todostring, time() + 300000 );
        setcookie( "done" ,$donestring, time() + 300000 );
     
 }

 if(isset($_POST["Deletetodo"]) && isset($_SESSION["Todo"][(int)$_POST["Deletetodo"]])){
     
          $id = (int)$_POST["Deletetodo"];
        //var_dump($_SESSION["todo"][$id]);
     
        unset($_SESSION["todo"][$id]);
        $donestring = serialize($_SESSION["done"]); 
        setcookie( "done" ,$todostring, time() + 300000 );
     
 }
        


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
<style>

            
  
    h1{
        color:white;
        padding:20px;
        padding-left :30px;
        background-color:#a3a2a2;
         width:400px;
        font-size:25px;
        border-radius:10px;
        font-family:sans-serif;
       
    }
    h2{
        
        font-family:sans-serif;
        color: #3b3b3b;
    }
        h5{
        color:red;
        background-color:rgb(255, 138, 138);
            width:380px;
            padding: 10px;
            border-radius:5px;
        }
    a{
        
        display: block;    
        text-decoration: none;
    }
    button{
        margin: 10px;
    }
    button:hover{
        //text-decoration:line-through;
        color: red;
    }
        
    
    </style>
</head>
<body>

 <h1>ToDo app</h1>
 <?php if ( !empty($_SESSION["Todo"]) ||  !empty($_SESSION["done"]) ): ?>
  
 <h2>Nog te doen</h2>
 <?=  (isset($_SESSION["Todo"]) && empty($_SESSION["Todo"]) )? "Alle Taken Zijn klaar": "" ;?>
  
   
    <?php foreach( $_SESSION["Todo"] as $id => $item):?>
    
    
    <form action="opdracht-01-todo.php" method="POST">
    
    <button  name="todo" value="<?= $id ?>" type="submit">  <?= $_SESSION["Todo"][$id] ?></button>
    <button  name="Deletetodo" value="<?= $id ?>" >  Delete</button>
    </form>
    
    
    <?php endforeach ?> 
    
    
 <h2>done and done!</h2>
 <?= (isset($_SESSION["done"]) && empty($_SESSION["done"]))?
     "Werk aan de winkel": ""  ?>
    
     <?php foreach( $_SESSION["done"] as $id => $item):?>
    
    
    <form action="opdracht-01-todo.php" method="POST">
    
    <button  name="done" value="<?= $id ?>" type="submit">  <?= $_SESSION["done"][$id] ?></button>
    <button  name="Deletedone" value="<?= $id ?>" >  Delete</button>
    </form>
    
    
    <?php endforeach ?> 
    
 
  <?php endif ?>
 <h2>ToDo toevoegen</h2>
 
<form action="opdracht-01-todo.php" method="POST">
    
    
    <label for="item">Item:</label>
    <input type="text" name="item">
    
    <input type="submit" name="submit" value="toevoegen">
</form>
  
   
    
</body>
</html>