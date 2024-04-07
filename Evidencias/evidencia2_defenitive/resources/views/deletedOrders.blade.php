<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Orders</title>
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
            padding: 5px 10px;
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
        <h1>Deleted Orders</h1>
        <table id="deletedOrderTable">
            <thead>
                <tr>
                    <th>Invoice Number</th>
                    <th>Customer Number</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se mostrarán los pedidos eliminados -->
            </tbody>
        </table>
    </div>

    <script>
        // Datos de ejemplo de los pedidos eliminados
        var deletedOrders = [
            { invoiceNumber: "003", customerNumber: "789", date: "2024-04-03", status: "Deleted" }
            
        ];

        // Función para mostrar los pedidos eliminados en la tabla
        function displayDeletedOrders() {
            var deletedOrderTable = document.getElementById("deletedOrderTable");
            var tbody = deletedOrderTable.querySelector("tbody");
            tbody.innerHTML = ""; // Limpiar la tabla antes de mostrar los pedidos eliminados

            deletedOrders.forEach(function(order) {
                var row = document.createElement("tr");
                row.innerHTML = `
                    <td>${order.invoiceNumber}</td>
                    <td>${order.customerNumber}</td>
                    <td>${order.date}</td>
                    <td>${order.status}</td>
                    <td>
                        <button onclick="editDeletedOrder('${order.invoiceNumber}')">Edit</button>
                        <button onclick="restoreOrder('${order.invoiceNumber}')">Restore</button>
                    </td>
                `;
                tbody.appendChild(row);
            });
        }

        // Función para editar un pedido eliminado
        function editDeletedOrder(invoiceNumber) {
            // Lógica para editar un pedido eliminado
            alert("Editing deleted order with invoice number: " + invoiceNumber);
        }

        // Función para restaurar un pedido eliminado
        function restoreOrder(invoiceNumber) {
            // Muestra una alerta de confirmación
            alert("The Order has been restored to the Orders List");

            // Encuentra el índice del pedido a restaurar
            var index = deletedOrders.findIndex(function(order) {
                return order.invoiceNumber === invoiceNumber;
            });

            // Elimina el pedido de la lista de pedidos eliminados
            var restoredOrder = deletedOrders.splice(index, 1)[0];

            // Agrega el pedido restaurado a la lista de pedidos
            orders.push(restoredOrder);

            // Vuelve a mostrar los pedidos eliminados actualizados
            displayDeletedOrders();

        }

        // Mostrar los pedidos eliminados al cargar la página
        displayDeletedOrders();
    </script>
</body>
</html>
