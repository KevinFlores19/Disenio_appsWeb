<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
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
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Management</h1>
        <h2>All Orders</h2>
        <form id="searchForm">
            <label for="searchTerm">Search:</label>
            <input type="text" id="searchTerm" name="searchTerm" placeholder="Enter search term">
            <button type="submit">Search</button>
        </form>
        <table id="orderTable">
            <thead>
                <tr>
                    <th>Invoice Number</th>
                    <th>Customer ID</th>
                    <th>Photo ID</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $item)
                <tr>
                    <td>{{ $item-> invoice_number}}</td>
                    <td>{{ $item-> customer_id}}</td>
                    <td>{{ $item-> photo_id}}</td>
                    <td>{{ $item-> data_time}}</td>
                    <td>{{ $item-> status}}</td>
                    <td>
                        <button onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function deleteRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }

        document.getElementById("searchForm").addEventListener("submit", function(event) {
            event.preventDefault();

            var searchTerm = document.getElementById("searchTerm").value.toLowerCase();
            var rows = document.querySelectorAll("#orderTable tbody tr");

            rows.forEach(function(row) {
                var invoiceNumber = row.cells[0].textContent.toLowerCase();
                var customerID = row.cells[1].textContent.toLowerCase();
                var photoID = row.cells[2].textContent.toLowerCase();
                var date = row.cells[3].textContent.toLowerCase();
                var status = row.cells[4].textContent.toLowerCase();

                if (invoiceNumber.includes(searchTerm) ||
                    customerID.includes(searchTerm) ||
                    photoID.includes(searchTerm) ||
                    date.includes(searchTerm) ||
                    status.includes(searchTerm)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }); 
        });
    </script>
</body>
</html>
