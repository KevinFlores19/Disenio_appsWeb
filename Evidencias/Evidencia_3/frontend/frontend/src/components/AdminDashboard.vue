<template>
  <div class="container">
    <h1>Admin Dashboard</h1>
    <form @submit.prevent="registerUser">
      <label for="name">Name:</label>
      <input type="text" v-model="name" id="name" name="name">
      <label for="username">Username:</label>
      <input type="text" v-model="username" id="username" name="username">
      <label for="password">Password:</label>
      <input type="password" v-model="password" id="password" name="password">
      <label for="role">Role:</label>
      <select v-model="role" id="role" name="role">
        <option value="1">Admin</option>
        <option value="2">Sales</option>
        <option value="3">Purchasing</option>
        <option value="4">Warehouse</option>
        <option value="5">Route</option>
      </select>
      <button type="submit">Register User</button>
    </form>
    <h2>User List</h2>
    <ul class="user-list">
      <li v-for="(user, index) in userList" :key="index">
        Name: {{ user.name }}, Username: {{ user.user_name }}, Role: {{ user.role_id }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: '',
      username: '',
      password: '',
      role:'', 
      userList: []
    };
  },
  methods: {
    registerUser() {
      const newUser = {
        name: this.name,
        user_name: this.username,
        password: this.password,
        role_id: this.role
      };

      fetch('http://localhost:8000/api/v1/workers/', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
        },
        body: JSON.stringify(newUser)
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Error al registrar el usuario.');
        }
        return response.json();
      })
      .then(data => {
        this.userList.push(data);
        this.name = '';
        this.username = '';
        this.password = '';
        this.role = 1; // Restablecer el rol al valor predeterminado (Admin)
      })
      .catch(error => {
        console.error('Error:', error);
      });
    }
  }
};
</script>



<style>
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
}
button:hover {
  background-color: #45a049;
}
.user-list {
  list-style-type: none;
  padding: 0;
}
.user-list li {
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 10px;
  margin-bottom: 10px;
}
</style>
