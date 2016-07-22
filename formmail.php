<!DOCTYPE html>
<html lang="en">
<head>
   
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
	<meta name = "description" content = "Please use the provided contact form to send us your feedback and comments. If you have any questions will we get back to you as soon as we can. Thank you.">
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="stylesheet.css">
<style>
    img{
      height:50%; 
      width:50%; 
      
    }
    
    body{
    background-image: url(images/background_contact.jpg);
    background-size:cover;
    background-attachment: fixed;
    } 
    </style>


</head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META HTTP-EQUIV="refresh" content="0;URL=contact.html">
<title>Email Form</title>
</head>

<body>
<?php
  $name=addslashes($_POST['name']);
  $email=addslashes($_POST['email']);
  $comments=addslashes($_POST['comments']);

 // you can specify which email you want your contact form to be emailed to here

  $toemail = "010josh010@gmail.com";
  $subject = "@Anime Hub";

  $headers = "MIME-Version: 1.0\n"
            ."From: \"".$name."\" <".$email.">\n"
            ."Content-type: text/html; charset=iso-8859-1\n";

  $body = "Name: ".$name."<br>\n"
            ."Email: ".$email."<br>\n"
            ."Comments:<br>\n"
            .$comments;

  if (!ereg("^[a-zA-Z0-9_.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $email))
  {
    echo "That is not a valid email address.  Please return to the"
           ." previous page and try again.";
    exit;
  }

    mail($toemail, $subject, $body, $headers);
    echo "Thanks for submitting your comments";
?>

<header>
		<img id="logo" src="images/logo_small.png" alt="Anime Hub">
</header>

<nav class="navigation">
	<ul>
    <a href="index.html"><li class ="navHome ">Home</li></a>
    <a href="vocaloid.html"><li class ="navVocaloid">Vocaloid</li></a>
    <a href="about.html"><li class="navAbout">About</li></a>
    <a href="contact.html"><li class="navContact active">Contact</li></a>
	</ul>
</nav>

<section class="bulletin">
 <p>Please use the provided contact form to send us your feedback and comments. If you have any questions will we get back to you as soon as we can. Thank you.</p>

    </section>

<div class= "contact_container">
    

<aside class="contact">
   <h2>Contact</h2>
<form  name="form1" id="form1" action="formmail.php" method="POST">
<label for="name"> Name: </label><br>
<input id="name" name="name" type="text" required id="name" form="form1" size="18" style="color:black"><br><br>  
<label for="email"> Email: </label> <br>
<input id="email" name="email" type="email" required id="email" form="form1" size="18" style="color:black"><br>
<label for ="textarea"><br> Comments:</label><br> 
<textarea id="comments" type="textarea"name="comments" cols="18" required id="comments" style="color:black"></textarea><br>
<input id="submit" type="submit" name="submit" id="submit" value="Submit">
&nbsp;
</form>
  
    </aside>
    
      <img src = "images/contact_right.png"/>
    

 
 
    </div>
    
     <section class="bulletin" style="clear:both; background-color:#000000;">
       <p> Anime images provided by <a target="_blank" href="http://www.crunchyroll.com">crunchyroll</a> & <a target="_blank" href="https://wall.alphacoders.com/by_category.php?id=3">Alpha Coder's Anime Wallpaper</a></p>
    </section>


<script type=text/javascript src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script>
    var submit = document.getElementById("submit"); 
    var name = document.getElementById("name");
    var email= document.getElementById("email");
    var comments= document.getElementById("comments"); 
    submit.onclick = function(){
       for(i=0;i <=email.value.length; i++){
                if(email.value[i] === "@" && name.value !== "" && comments.value !== ""){
                    alert("Thank you for your comments!"); 
                }
            };
        
    }
    </script>
    
<footer><p> AnimeHub Media Group 2016</p></footer>
</body>

</html>