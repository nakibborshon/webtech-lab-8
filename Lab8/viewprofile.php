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
 <fieldset>
  <legend>View Profile:</legend>
  <label for="name">Name:</label>

  <div class="line"></div><br>
  <label for="email">Email:</label>

  <div class="line"></div><br>
  <label for="gender">Gender:</label>

  <div class="line"></div><br>
  <label for="date">Date of Birth:</label>
  <br><br>

  <a href="#">Edit Profile</a>
  </article>
</section>

<footer>
  <p>Copyright 2017</p>
</footer>

</body>
</html>