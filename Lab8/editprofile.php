<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
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
      <li><a href="home_.php">Log Out</a></li>
    </ul>
</header>

<section> 
  <nav>
    <ul>
      <li><a href="dashboard.html">Dash Board</a></li>
      <li><a href="viewprofile.php">View Profile</a></li>
      <li><a href="editprofile.php">Edit Profile</a></li>
      <li><a href="#">Change Profile Picture</a></li>
      <li><a href="changepassword.php">Change Password</a></li>
      <li><a href="home_.html">Logout</a></li>
    </ul>
  </nav>
  <article>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <fieldset>
  <legend>Edit Profile:</legend>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br>
  <div class="line"></div><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br>
  <div class="line"></div><br>
 <legend>Gender</legend>
      <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
  <div class="line"></div><br>
  <label for="date">Date of Birth:</label>
  <input type="date" id="date" name="date"><br>
  <input type="submit" value="Submit">
  </article>
</section>

<footer>
  <p>Copyright 2017</p>
</footer>

</body>
</html>