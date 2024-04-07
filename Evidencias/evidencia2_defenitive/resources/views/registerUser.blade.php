<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .user-list {
            list-style-type: none;
            padding: 0;
        }
        .user-list li {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <form id="userForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="role">Role:</label>
            <select id="role" name="role">
                <option value="Sales">Sales</option>
                <option value="Purchasing">Purchasing</option>
                <option value="Warehouse">Warehouse</option>
                <option value="Route">Route</option>
            </select>
            <button type="submit">Register User</button>
        </form>
        <h2>User List</h2>
        <ul class="user-list" id="userList">
         
        </ul>
    </div>

    <script>
        document.getElementById("userForm").addEventListener("submit", function(event) {
            event.preventDefault(); 

            var username = document.getElementById("username").value;
            var role = document.getElementById("role").value;
            
            var listItem = document.createElement("li");
            listItem.textContent = "Username: " + username + ", Role: " + role;
            
            document.getElementById("userList").appendChild(listItem);
            
            document.getElementById("username").value = "";
            document.getElementById("role").value = "Sales"; 
        });
    </script>
</body>
</html>
