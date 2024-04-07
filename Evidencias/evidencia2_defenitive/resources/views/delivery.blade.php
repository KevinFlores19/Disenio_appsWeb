<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Page</title>
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
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            margin-right: 10px;
        }
        input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 200px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .delivery-status {
            margin-top: 20px;
            text-align: center;
        }
        .delivery-photo {
            max-width: 300px;
            margin: 0 auto;
            display: none; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Delivery Page</h1>
        <form id="searchForm">
            <label for="invoiceNumber">Search by Invoice #:</label>
            <input type="text" id="invoiceNumber" name="invoiceNumber">
            <button type="submit">Search</button>
        </form>
        <div class="delivery-status" id="deliveryStatus">
            <h2>Delivery Status</h2>
            <p id="deliveryInfo"></p>
            <img id="deliveryPhoto" class="delivery-photo" src="" alt="Delivery Photo">
        </div>
    </div>

    <script>
        document.getElementById("searchForm").addEventListener("submit", function(event) {
            event.preventDefault(); 

            var invoiceNumber = document.getElementById("invoiceNumber").value;
            var deliveryStatus = document.getElementById("deliveryStatus");
            var deliveryInfo = document.getElementById("deliveryInfo");
            var deliveryPhoto = document.getElementById("deliveryPhoto");

            switch(invoiceNumber) {
                case '1':
                    deliveryInfo.textContent = "Ordered";
                    deliveryPhoto.style.display = "none"; 
                    break;
                case '2':
                    deliveryInfo.textContent = "In Process";
                    deliveryPhoto.style.display = "none"; 
                    break;
                case '3':
                    deliveryInfo.textContent = "In Route";
                    deliveryPhoto.style.display = "none"; 
                    break;
                case '4':
                    deliveryInfo.textContent = "Delivered";
                    deliveryPhoto.style.display = "block"; 
                    deliveryPhoto.src = "[URL de la foto]";
                    break;
                default:
                    deliveryInfo.textContent = "Invalid Invoice #";
                    deliveryPhoto.style.display = "none"; 
            }
        });
    </script>
</body>
</html>
