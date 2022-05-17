<!DOCTYPE html>
<html>
<head>
	<title>Add Customers</title>
  <link rel="stylesheet" href="add_customers.css" />
  <script src="https://kit.fontawesome.com/09e0f9fcdf.js" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	* {box-sizing: border-box}

  input[type=text] {
  width: 20%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: red;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 10%;
}

.container {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
</style>
<body>
<form action="insert_customers.php" method="post">
  <div class="container">
    <img class="logo" src="images.png" alt="car logo">
    <nav>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="addinv.php">ADD INVESTMENT</a></li>
        <li><a href="add_customers.php">ADD CUSTOMER</a></li>
        <li><a href="add_investment_portfolios.php">ADD INVESTMENT PORTFOLIO</a></li>
 
      </ul>
    </nav>
    
    <hr>
    <br>
    <br>
    <br>
    <br>
    <h1>Add Customer</h1>
    <p>Please fill in this form to add a customer.</p>
    <label for="name"><b>Customer Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <br>

    <label for="email"><b>Customer Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
<footer>
  <section class="foot">
    <h2 class="shift"><b>Follow Us on</b></h2>
    <ol  style="list-style-type:none">

    <li class="social-icon fab fa-facebook-f"></li>
    <li class="social-icon fab fa-twitter"></li>
    <li class="social-icon fab fa-instagram"></li>
<li> &copy; Copyright </li>
</ol>
  </section>
</footer>

</body>
</html>