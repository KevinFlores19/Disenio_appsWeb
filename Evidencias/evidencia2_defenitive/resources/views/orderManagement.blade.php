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
        input[type="date"],
        textarea {
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
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: -9.5px;
            margin-right: 10px;
            margin-left: 10px; 
        }
        button:hover {
            background-color: #45a049;
        }
        .order-list {
            list-style-type: none;
            padding: 0;
        }
        .order-list li {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
            position: relative; 
        }
        .order-list li button {
            position: absolute;
            right: 10px; 
            top: 10px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Management</h1>
        <h2>Orders in Process</h2>
        <ul class="order-list" id="orderList">
            
        </ul>
    </div>

    <script>
       
        var orders = [
            { invoiceNumber: "001", customerName: "Customer A", status: "In Process" },
            { invoiceNumber: "002", customerName: "Customer B", status: "In Process" }
            
        ];

        
        function displayOrders() {
            var orderList = document.getElementById("orderList");
            orderList.innerHTML = ""; 

            orders.forEach(function(order) {
                var listItem = document.createElement("li");
                listItem.textContent = "Invoice Number: " + order.invoiceNumber + ", Customer Name: " + order.customerName + ", Status: " + order.status;
                orderList.appendChild(listItem);

                var routeButton = document.createElement("button");
                routeButton.textContent = "Change to In Route";
                routeButton.addEventListener("click", function() {
                    order.status = "In Route";
                    displayOrders(); 
                    alert("Status Changed Successfully"); 

                });
                listItem.appendChild(routeButton);
            });
        }

        displayOrders();
    </script>
</body>
</html> 
