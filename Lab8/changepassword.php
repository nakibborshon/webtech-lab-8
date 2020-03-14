<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
	<style>
header {
  background-color: #666;
  padding: 30px;
  text-align: left;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: right;
  width: 30%;
  height: 100px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}


/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  margin-left: 2px;
  margin-right: 2px;
  border-style: solid;
  border-color: black;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: red;
}
article {
  float: left;
  padding: 20px;
  width: 60%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;

}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}
/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

</style>
</head>
<body>
	<header>
  <h2>XComapany</h2>
  <ul>
      <li><a href="home_.html">Log Out</a></li>
    </ul>
</header>

<section> 
  <nav>
    <ul>
      <li><a href="dashboard.php">Dash Board</a></li>
      <li><a href="viewprofile.php">View Profile</a></li>
      <li><a href="editprofile.php">Edit Profile</a></li>
      <li><a href="#">Change Profile Picture</a></li>
      <li><a href="changepassword.php">Change Password</a></li>
      <li><a href="home_.php">Logout</a></li>
    </ul>
  </nav>
  <article>
    <form action="/action_page.php">
 <fieldset>
  <legend>Change Password:</legend>
  <label for="cpass">Current Password:</label>
  <input type="password" id="cpass" name="cpass"><br>
  <div class="line"></div><br>
  <label for="npass">New Password:</label>
  <input type="password" id="npass" name="npass"><br>
  <div class="line"></div><br>
  <label for="rpass">Retype Password:</label>
  <input type="password" id="rpass" name="rpass"><br>
   <input type="submit" value="submit"><br>
  </article>
</section>

<footer>
  <p>Copyright 2017</p>
</footer>

</body>
</html>