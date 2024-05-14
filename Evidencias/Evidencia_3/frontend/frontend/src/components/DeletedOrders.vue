<template>
  <div class="container">
    <h1>Deleted Orders</h1>
    <table>
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
        <tr v-for="(order, index) in deletedOrders" :key="index">
          <td>{{ order.invoiceNumber }}</td>
          <td>{{ order.customerNumber }}</td>
          <td>{{ order.date }}</td>
          <td>{{ order.status }}</td>
          <td>
            <button style="margin-right: 5px;" @click="editDeletedOrder(order.invoiceNumber)">Edit</button>
            <button @click="restoreOrder(order.invoiceNumber)">Restore</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      deletedOrders: [
        { invoiceNumber: "003", customerNumber: "789", date: "2024-04-03", status: "Deleted" }
        // Agrega más pedidos eliminados aquí si es necesario
      ]
    };
  },
  methods: {
    editDeletedOrder(invoiceNumber) {
      // Lógica para editar un pedido eliminado
      alert("Editing deleted order with invoice number: " + invoiceNumber);
    },
    restoreOrder(invoiceNumber) {
      // Muestra una alerta de confirmación
      alert("The Order has been restored to the Orders List");

      // Encuentra el índice del pedido a restaurar
      const index = this.deletedOrders.findIndex(order => order.invoiceNumber === invoiceNumber);

      // Elimina el pedido de la lista de pedidos eliminados
      const restoredOrder = this.deletedOrders.splice(index, 1)[0];

      // Agrega el pedido restaurado a la lista de pedidos
      // Aquí deberías implementar la lógica para agregar el pedido restaurado a la lista de pedidos activos
      // Por ejemplo, podrías emitir un evento o llamar a un método del componente padre
    }
  }
};
</script>

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
