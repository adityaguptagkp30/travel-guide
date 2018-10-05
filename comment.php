<?php
require('connection.php');
 session_start();
 error_reporting(0);
 if(isset($_SESSION['user']))
 {
   ?>

<style type="text/css">
    
  *{
  box-sizing: border-box;
  margin: 0px;
  padding: 0px;
  }
  nav.menu{
  width:  100%;
  height: 100px;
  /*border-radius: 25px;*/
  background-color: #129490;
  opacity: 0.5;
  position: fixed;
  }

  .leftmenu{
  width:  40%;
  line-height:100px;
  float:  left;
  }

  .leftmenu h1{
  padding-left: 10px;
  font-weight: bold;
  color: white;
  font-size: 25px;
  font-family: 'Cedarville Cursive', cursive;
  }
  
  .rightmenu{
  width:  55%;
  height: 200px;
  padding-top: 40px;
  padding-bottom: 100px;
  float: right;
  }

  .rightmenu ul{
  margin-left: 200px;
  }


  .rightmenu ul li{
  font-family: 'Monsterrat', sans-serif;
  display: inline-block;
  list-style: none;
  font-size: 18px;
  color: blue;
  font-weight: bold;
  /*line-height: 10px;*/
  margin-left: 30px;
  text-transform: uppercase;
  }

  .rightmenu ul li a{
  text-decoration: none;
  color: white;
  }

  #firstlist{ 
  color: white;
  }

  .rightmenu ul li a:hover{
  color:  darkblue;
  }
/*
  .gallery{ 
  
  margin-top: 300px;



  }*/




  div.gallery {
    margin-top: 100px;
    margin-left: 40px;
    border: 1px solid #ccc;
    float:left;
    width: 270px;
  }


  div.gallery:hover {
        
    transform: scale(1.2);
    transition: transform .5s;
  }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }

  </style>


</head>
<body>
  <nav class="menu">
    <div class="leftmenu">
      <h1>Welcome, <?php 
      session_start();
      if(isset($_SESSION['user'])){
        echo " ".$_SESSION['user']."";

      }
        else
        {
          header('Location:index.php');
        }
      ?></h1>     
    </div>


  <div class="rightmenu">
        <ul>
          <li id="firstlist"><a href="userpanel.php">HOME</a></li>
         <li><a href="comment.php">REVIEW</a></li>
          <li><a href="profileUpdate.php?email="<?php echo $_SESSION['user']; ?>"">YOUR PROFILE</a></li>
          <li><a href="logout1.php">LOGOUT</a></li>
        </ul>
  </div>

  </nav>
  <br><br><br><br><br><br><br><br>
   <?php
  echo' <form action="comment.php" method="post">
  <input type="text" name="comment" placeholder="ADD COMMENTS HERE">
  <input type="submit" name="submit" >
 
     ';
     $a=$_SESSION['user'];
              $sql="SELECT * FROM users WHERE email='$a'";
              $result=mysqli_query($conn,$sql);
              if (mysqli_num_rows($result) > 0)  
            {
   	    while($row = mysqli_fetch_assoc($result))
              {  $id    = $row["id"];
                
               }
           }
     if(isset($_POST['submit']))
     {       $comment=$_POST['comment'];
             
              
              $sql="INSERT INTO comments(id,comment) VALUES('$id','$comment')";
              $result=mysqli_query($conn,$sql);
               $sql="SELECT * FROM comments WHERE id='$id'";
              $result=mysqli_query($conn,$sql);
              if (mysqli_num_rows($result) > 0)  
            {
   	    while($row = mysqli_fetch_assoc($result))
              {  $id    = $row["comment"];
                 echo '<br>';
                 echo $id;
               }
           }
             
             
       }
       else
       {                $sql="SELECT * FROM comments WHERE id='$id'";
              $result=mysqli_query($conn,$sql);
              if (mysqli_num_rows($result) > 0)  
            {
   	    while($row = mysqli_fetch_assoc($result))
              {  $id    = $row["comment"];
                 echo '<br>';
                 echo $id;
               }
           }

       }
}
else
{
	header('Location:index.php');
}
?>