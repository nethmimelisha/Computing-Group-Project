<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/contactus.css">
    <style>
        body {
            background-image:  url('img/background.jpg');
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="contact-form" action="contactus.php" method="POST">
            <h2>Contact Us</h2>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" onclick="SendMail()">Submit</button>
        </form>
    </div>

    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "5ttI2MkoOOQgWsEaZ",
      });
   })();
</script>

<script>
    function SendMail(){
    var params = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        message : document.getElementById("message").value,
    };
  
    const serviceID = "service_jyvwxzq";
    const templateID = "template_k7rvcsd"

    

    emailjs
    .send(serviceID,templateID,params)
    .then((res) => {
        document.getElementById("name").value = "" ;
        document.getElementById("email").value = "" ;
        document.getElementById("message").value = "" ;
        console.log(res);
        alert ("Your Message Sent Successfully");
    })
    .catch((err) => console.log(err));
}    

</script>

</body>
</html>
