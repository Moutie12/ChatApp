<?php
include_once('connect.php');
if (isset($_POST['envoyer']))
{
  $name = $_POST['name'];
  $message = $_POST['message'];
  $sql = "INSERT INTO details (name,message) VALUES ('$name','$message')" ;
  mysqli_query($connect,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Chat App</title>
    <script>
      function aj() {
        var req = new XMLHttpRequest () ;
        req.onreadystatechange = function() {
          if(req.readyState==4 && req.status==200){
            document.getElementById('chat').innerHTML=req.responseText ;
          }
        }
        req.open('GET','chat.php',true);
        req.send() ;
      }
      setInterval(function() {aj()},1000);
    </script>
  </head>
  <body onload="aj() ;">
    <div class="container">
      <div id="chatbox">
      <div id="chat"></div>
      </div>
      <form method="POST" class="inp">
        <input type="username" id="name" name="name" placeholder="Enter Your Name Here" />
        <textarea id="message" placeholder="Enter The Message Here" name="message"></textarea>
        <button id="envoyer" name="envoyer">Envoyer</button>
      </form>
    </div>
  </body>
</html>
