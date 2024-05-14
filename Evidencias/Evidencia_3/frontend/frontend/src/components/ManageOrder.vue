<template>
  <div class="container">
    <h1>Order Management</h1>
    <h2>Orders in Process and Pending</h2>
    <ul class="order-list">
      <li v-for="(order, index) in filteredOrders" :key="index">
        <div class="order-info">
          <span>Invoice Number: {{ order.invoice_number }},</span>
          <span v-if="order.customer">Customer Name: {{ order.customer.name }},</span>
          <span>Status: {{ order.status }}</span>
        </div>
        <button @click="updateOrderStatus(order)">Change Status</button>
      </li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      orders: []
    };
  },
  mounted() {
    // Al montar el componente, obtener las órdenes de la API
    this.fetchOrders();
  },
  methods: {
    fetchOrders() {
      // Hacer una solicitud HTTP para obtener las órdenes de la API
      axios.get('http://localhost:8000/api/v1/orders')
        .then(response => {
          this.orders = response.data;
          console.log(this.orders); // Agregar este console.log para verificar las órdenes
        })
        .catch(error => {
          alert('Error: ' + error.message);
        });
    },
    updateOrderStatus(order) {
      console.log(order); // Agregar este console.log para verificar el objeto de orden
      let newStatus = order.status === 'In process' ? 'In route' : 'In process';

      // Hacer una solicitud HTTP para cambiar el estado de la orden
      axios.put(`http://localhost:8000/api/v1/orders/${order.id}`, { status: newStatus })
        .then(response => {
          console.log(response.data); // Agregar este console.log para mostrar la respuesta de la API
          // Actualizar el estado de la orden en la vista si la solicitud es exitosa
          if (response.data.message) {
            order.status = newStatus;
            alert(response.data.message);
          } else {
            alert('Error: ' + response.data.error);
          }
        })
        .catch(error => {
          alert('Error: ' + error.message);
        });
    }
  },
  computed: {
    filteredOrders() {
      return this.orders.filter(order => order.status === 'In process' || order.status === 'Pending');
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
.order-list {
  list-style-type: none;
  padding: 0;
}
.order-list li {
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 10px;
  margin-bottom: 10px;
}
.order-info {
  margin-bottom: 10px;
}
.order-info span {
  margin-right: 10px;
}
.order-list li button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 10px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
button:hover {
  background-color: #45a049;
}
</style>
