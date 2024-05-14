<template>
  <div class="container">
    <h1>Route Management</h1> <br>

    <h2>Upload Photo of Loaded Unit</h2>
    <form @submit.prevent="uploadLoadedUnitPhoto">
      <label for="loadedUnitPhoto">Upload Photo:</label>
      <input type="file" id="loadedUnitPhoto" name="loadedUnitPhoto" accept="image/*">
      <button type="submit">Upload Photo</button>
    </form>

    <h2>Upload Photo of Unloaded Material</h2>
    <form @submit.prevent="uploadUnloadedMaterialPhoto">
      <label for="unloadedMaterialPhoto">Upload Photo:</label>
      <input type="file" id="unloadedMaterialPhoto" name="unloadedMaterialPhoto" accept="image/*">
      <button type="submit">Upload Photo</button>
    </form>
  </div>
</template>

<script>
export default {
  methods: {
    uploadLoadedUnitPhoto() {
      alert("Photo of Loaded Unit Uploaded Successfully!");
    },
    uploadUnloadedMaterialPhoto() {
      alert("Photo of Unloaded Material Uploaded Successfully!");
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
form {
  margin-bottom: 20px;
}
label {
  display: block;
  margin-bottom: 5px;
}
input[type="file"] {
  margin-bottom: 10px;
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
