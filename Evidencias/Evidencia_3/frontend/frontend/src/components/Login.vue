<script>
import axios from 'axios';

export default {
  data() {
    return {
      username: '',
      password: '',
      errorMessage: ''
    };
  },
  methods: {
    login() {
      axios.post('http://localhost:8000/api/login', {
        username: this.username,
        password: this.password
      })
      .then(response => {
        // Obtener el rol del usuario desde la respuesta
        const role = response.data.role;

        // Redirigir según el rol
        switch (role) {
          case 'Admin':
            this.$router.push('/AdminDashboard');
            break;
          case 'user':
            this.$router.push('/user-dashboard');
            break;
          default:
            // Si el rol no está definido o es desconocido, redirige a una ruta predeterminada
            this.$router.push('/default-dashboard');
        }
      })
      .catch(error => {
        this.errorMessage = 'Invalid username or password.';
        console.error(error);
      });
    }
  }
};
</script>


<template>
    <div class="container">
      <h1>Login</h1>
      <form @submit.prevent="login" class="login-form">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" v-model="username" id="username" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" v-model="password" id="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
    </div>
  </template>
  
  <style>
  .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }
  
  h1 {
    text-align: center;
    margin-bottom: 20px;
  }
  
  .login-form .form-group {
    margin-bottom: 20px;
  }
  
  .form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
  }
  
  .btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
  }
  
  .btn:hover {
    background-color: #0056b3;
  }
  
  .error {
    color: #ff0000;
    margin-top: 10px;
  }
  </style>
  