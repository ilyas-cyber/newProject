<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style>
        /* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
}

/* Navigation bar styles */
nav {
    background-color: #333;
    color: #fff;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav li {
    padding: 1em;
}

nav a {
    color: #fff;
    text-decoration: none;
}

nav a:hover {
    text-decoration: underline;
}

/* Main section styles */
main {
    padding: 2em;
}

section {
    margin-bottom: 2em;
}

h1, h2, h3 {
    margin-top: 0;
}

/* Dashboard section styles */
.statistics {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.statistics p {
    font-size: 1.5em;
    margin: 0;
}

/* Users section styles */
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 0.5em;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

button[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 0.5em 1em;
    border: none;
    border-radius: 0.5em;
    font-size: 1em;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #555;
}

    </style>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#dashboard">Dashboard</a></li>
				<li><a href="#products">Products</a></li>
				<li><a href="#orders">Orders</a></li>
				<li><a href="#logout">Logout</a></li>
			</ul>
		</nav>
	</header>
    <main>
        <section id="dashboard">
            <h1>Dashboard</h1>
            <div class="statistics">
                <p>Total revenue: $5000</p>
                <p>Total orders: 100</p>
                <p>Total users: 50</p>
            </div>
        </section>
        
        <section id="users">
            </table>
            <h3>Add Admin User</h3>
            <form action="/users" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                </select>
                <button type="submit">Add Admin</button>
            </form>
            <br><br>
            <h3>Delete Admin</h3>
            <form action="/delete_admin" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                </select>
                <button type="submit">Delete Admin</button>
            </form>
        </section>
        
        <section id="products">
            <h2>Products</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product 1</td>
                        <td>A product description</td>
                        <td>$10</td>
                        <td>
                            <a href="#">View</a>
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product 2</td>
                        <td>Another product description</td>
                        <td>$20</td>
                     </tr>    
</section>

    
</body>
</html>