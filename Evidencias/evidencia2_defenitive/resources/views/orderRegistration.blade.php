<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Registration</title>
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
        <h1>Order Registration</h1>
        <form id="orderForm">
            <label for="invoiceNumber">Invoice Number:</label>
            <input type="text" id="invoiceNumber" name="invoiceNumber">
            <label for="customerName">Customer Name:</label>
            <input type="text" id="customerName" name="customerName">
            <label for="customerNumber">Customer Number:</label>
            <input type="text" id="customerNumber" name="customerNumber">
            <label for="fiscalData">Fiscal Data:</label>
            <textarea id="fiscalData" name="fiscalData"></textarea>
            <label for="orderDate">Order Date:</label>
            <input type="date" id="orderDate" name="orderDate">
            <label for="deliveryAddress">Delivery Address:</label>
            <textarea id="deliveryAddress" name="deliveryAddress"></textarea>
            <label for="notes">Notes:</label>
            <textarea id="notes" name="notes"></textarea>
            <button type="submit">Submit Order</button>
        </form>
    </div>

    <script>
        document.getElementById("orderForm").addEventListener("submit", function(event) {
            event.preventDefault(); 

          
            var invoiceNumber = document.getElementById("invoiceNumber").value;
            var customerName = document.getElementById("customerName").value;
            var customerNumber = document.getElementById("customerNumber").value;
            var fiscalData = document.getElementById("fiscalData").value;
            var orderDate = document.getElementById("orderDate").value;
            var deliveryAddress = document.getElementById("deliveryAddress").value;
            var notes = document.getElementById("notes").value;

           

            
            alert("Order submitted successfully!");
            
            
            document.getElementById("orderForm").reset();
        });
    </script>
</body>
</html> 
