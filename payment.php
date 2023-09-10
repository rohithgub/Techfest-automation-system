<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>College Cultural Event Registration</title>
    <!-- Add any necessary CSS and JavaScript files here -->
    <style>/* Style for the header */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #f2f2f2;
  padding: 20px;
  border-bottom: 1px solid #ddd;
}

header img {
  height: 50px;
}

header nav {
  display: flex;
}

header a {
  margin: 0 10px;
  text-decoration: none;
  color: #333;
}

header a:hover {
  color: #666;
}

/* Style for the main content */
main {
  max-width: 800px;
  margin: 0 auto;
  padding: 40px 20px;
  text-align: center;
}

main h1 {
  margin-bottom: 10px;
}

main p {
  margin-bottom: 20px;
}

main img {
  height: 360px;
  margin: 0 10px;
}

main form {
  display: flex;
  flex-direction: column;
  max-width: 400px;
  margin: 0 auto;
  border: 1px solid #ddd;
  padding: 20px;
}

main label {
  margin-bottom: 10px;
  font-weight: bold;
}

main input[type="text"],
main input[type="password"],
main input[type="checkbox"] {
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ddd;
  border-radius: 3px;
  font-size: 16px;
  color: #333;
}

main input[type="checkbox"] {
  margin-bottom: 10px;
}



/* Style for the footer */
footer {
  background-color: #f2f2f2;
  text-align: center;
  padding: 20px;
  border-top: 1px solid #ddd;
}

footer p {
  margin: 0;
}

footer a {
  text-decoration: none;
  color: #333;
}

footer a:hover {
  color: #666;
}
.event-container {
      margin: 50px auto;
      max-width: 1000px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 0 20px rgba(0,0,0,0.5);
}

    .image-container {
      text-align: center;
    }
    .image-container img {
      max-width: 100%;
      margin-bottom: 20px;
    }
    #upi{
      color:blue;
      font-size:20px;
      font-family:Verdana, Geneva, Tahoma, sans-serif;

    }
    #back{
      background-image:url('paymentbg.png');
      background-repeat: no-repeat;
      background-size: cover;
    }
    
</style>
  </head>
  <body id="back">
    
    
    <main>
    <div class="container event-container">

      <h1>Go For Payment..</h1>
     

     <h3>Scan the QR to pay:</h3> 
      <br>
      <div class="image-container">
      <img src="qrcode.jpg" alt="qr code" height="360px" width="372px">
      </div>
      <br>
      <section>or</section>
      <center><h3>Pay Through UPI ID:</h3>
      <p id="upi">7981284433@ybl</p>
      <p id="upi">7981284433@paytm</p>
      <p id="upi">mrcet2004@okicici</p>
    
    
    </center>
      
      
    </main>
    
    
  </body>
</html>
