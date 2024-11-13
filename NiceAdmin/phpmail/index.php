<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="mail.php" method="post">
      <h1>User Form</h1>
        <br></br>
        
        <input placeholder="Your Name" name="name" type="text" tabindex="1" autofocus>
        <br></br>
      
        <input placeholder="Your Email" name="email" type="email" tabindex="2">
        <br></br>
      
        <input placeholder="Type your subject" type="text" name="subject" tabindex="4">
        <br></br>
      
        <textarea name="message" placeholder="Type your Message" tabindex="5"></textarea>
        <br></br>
 
      
        <button type="submit" name="send" id="contact-submit">Submit</button>
      
    </form>
</body>
</html>