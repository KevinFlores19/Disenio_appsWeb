<template>
  <div class="container">
    <h1>Order Management</h1>
    <h2>All Orders</h2>
    <table>
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
        <tr v-for="(order, index) in orders" :key="index">
          <td>{{ order.invoice_number }}</td>
          <td>{{ order.customer_id }}</td>
          <td>{{ order.photo_id }}</td>
          <td>{{ order.data_time }}</td> <!-- Use data_time instead of date_time -->
          <td>{{ order.status }}</td>
          <td>
            <button @click="deleteOrder(order.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
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
    this.fetchOrders();
  },
  methods: {
    fetchOrders() {
      axios.get('http://localhost:8000/api/v1/orders/')
        .then(response => {
          this.orders = response.data;
        })
        .catch(error => {
          console.error('Error fetching orders:', error);
        });
    },
    deleteOrder(orderId) {
      // Implement delete functionality here if needed
    }
  }
};
</script>

<style>
/* Styles remain unchanged */
</style>
