<template>
  <div class="container">
  
    <h1>Delivery Page</h1>
    <form @submit.prevent="searchDelivery">
      <label for="invoiceNumber">Invoice number:</label>
      <input type="text" v-model="invoiceNumber" id="invoiceNumber" name="invoiceNumber">
      <br><br>
      <label for="customerNumber">Customer Number:</label>
      <input type="text" v-model="customerNumber" id="customerNumber" name="customerNumber">
      <br><br>
      <button type="submit">Search</button>
    </form>
    <div class="delivery-status">
      <h2>Delivery Status</h2>
      <p v-if="deliveryInfo">{{ deliveryInfo }}</p>
      <img v-if="showDeliveryPhoto" class="delivery-photo" :src="deliveryPhotoURL" alt="Delivery Photo">
      <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
    </div>
  </div>
  
  <router-link class="login-link" to="/login">Login</router-link>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      invoiceNumber: '',
      customerNumber: '',
      deliveryInfo: '',
      showDeliveryPhoto: false,
      deliveryPhotoURL: '',
      errorMessage: ''
    };
  },
  methods: {
    searchDelivery() {
      axios.get('http://localhost:8000/api/v1/orders/show', {
          params: {
            invoiceNumber: this.invoiceNumber,
            customerNumber: this.customerNumber
          }
        })
        .then(response => {
          this.errorMessage = '';
          const data = response.data;
          if (data.error) {
            this.deliveryInfo = '';
            this.showDeliveryPhoto = false;
            this.deliveryPhotoURL = '';
            this.errorMessage = data.error;
          } else {
            this.deliveryInfo = data.status;
            this.showDeliveryPhoto = data.status === 'Delivered';
            // Asegúrate de que la API devuelva la URL de la foto de entrega si está entregado
            this.deliveryPhotoURL = data.photo_url ? data.photo_url : '';
          }
        })
        .catch(error => {
          this.deliveryInfo = '';
          this.showDeliveryPhoto = false;
          this.deliveryPhotoURL = '';
          this.errorMessage = 'Error fetching delivery status';
          console.error(error);
        });
    }
  }
};
</script>

<style>
/* Estilos CSS */
.container {
  position: relative;
}

.login-link {
  position: absolute;
  top: 10px;
  right: 10px;
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border-radius: 4px;
  text-decoration: none;
}

.login-link:hover {
  background-color: #0056b3;
}

  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  .container {
    margin: 0 auto;
    padding: 20px;
    text-align: center; /* Para centrar el contenido */
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
  }
  </style>
  