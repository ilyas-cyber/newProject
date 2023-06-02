<!DOCTYPE html>
<html>
<head>
  <title>Administrator Dashboard</title>
  <!-- Include any necessary CSS and JavaScript files here -->
  <style>
  /* General Styles */
body {
font-family: Arial, sans-serif;
margin: 0;
}

h1, h2, h3, h4, h5, h6 {
margin: 0;
}

a {
text-decoration: none;
color: #333;
}

/* Navigation Styles */
nav {
background-color: #f5f5f5;
padding: 20px;
display: flex;
justify-content: space-between;
align-items: center;
}

nav ul {
list-style: none;
margin: 0;
padding: 0;
display: flex;
}

nav ul li {
margin: 0 10px;
}

nav ul li a {
font-weight: bold;
}

nav ul li a:hover {
color: #007bff;
}

/* Dashboard Styles */
#dashboard {
padding: 50px;
}

/* Form Styles */
form {
margin: 50px;
display: flex;
flex-direction: column;
}

form label {
font-weight: bold;
margin-bottom: 10px;
}

form input[type="text"], form input[type="email"], form textarea {
padding: 10px;
margin-bottom: 20px;
border: 1px solid #ccc;
border-radius: 5px;
font-size: 16px;
}

form input[type="submit"], form button[type="submit"] {
padding: 10px;
border: none;
border-radius: 5px;
background-color: #007bff;
color: #fff;
font-weight: bold;
cursor: pointer;
}

form input[type="submit"]:hover, form button[type="submit"]:hover {
background-color: #0062cc;
}

/* Table Styles */
table {
width: 100%;
border-collapse: collapse;
margin-bottom: 50px;
}

table th, table td {
padding: 10px;
text-align: left;
border-bottom: 1px solid #ccc;
}

table th {
background-color: #f5f5f5;
font-weight: bold;
}

table td a {
color: #007bff;
}

table td a:hover {
text-decoration: underline;
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
nav {
flex-direction: column;
}

nav ul {
margin-top: 20px;
justify-content: space-around;
flex-direction: row;
}

nav ul li {
margin: 0;
}

#dashboard {
padding: 20px;
}

form {
margin: 20px;
}
}

</style>

</head>
<body>
  <!-- Include a navigation bar here with links to each section of the dashboard -->
  <nav>
    <ul>
      <li><a href="#dashboard">Dashboard</a></li>
      <li><a href="#add-data">Add Data</a></li>
      <li><a href="#edit-data">Delete Data</a></li>
    </ul>
  </nav>
  
  <div id="dashboard">
    <!-- Display data from the database here, such as tables or graphs -->
  </table>
  <h3>Add Users </h3>
  <form action="/users" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email">
      <label for="password">Password</label>
      <input type="password" id="password" name="password">
      </select>
      <br><br>

      <button type="submit">Add Admin</button>
  </form>
  <br><br>
  </div>
  
  <div id="edit-data">
    <!-- Include a form to edit or delete existing data in the database here -->
    <h3>Delete user</h3>
  <form action="/delete_admin" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email">
      <label for="password">Password</label>
      <input type="password" id="password" name="password">
      </select>
      <br><br>
      <button type="submit">Delete Admin</button>
  </form>
  </div>
</body>
</html>
