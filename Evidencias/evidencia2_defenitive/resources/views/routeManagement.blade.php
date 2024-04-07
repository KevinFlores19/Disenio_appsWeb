<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Management</title>
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
</head>
<body>
    <div class="container">
        <h1>Route Management</h1>
        <h2>Upload Photo of Loaded Unit</h2>
        <form id="loadedUnitForm">
            <label for="loadedUnitPhoto">Upload Photo:</label>
            <input type="file" id="loadedUnitPhoto" name="loadedUnitPhoto" accept="image/*">
            <button type="submit">Upload Photo</button>
        </form>

        <h2>Upload Photo of Unloaded Material</h2>
        <form id="unloadedMaterialForm">
            <label for="unloadedMaterialPhoto">Upload Photo:</label>
            <input type="file" id="unloadedMaterialPhoto" name="unloadedMaterialPhoto" accept="image/*">
            <button type="submit">Upload Photo</button>
        </form>
    </div>

    <script>
       
        document.getElementById("loadedUnitForm").addEventListener("submit", function(event) {
            event.preventDefault();

            alert("Photo of Loaded Unit Uploaded Successfully!");
        });

        document.getElementById("unloadedMaterialForm").addEventListener("submit", function(event) {
            event.preventDefault(); 

            alert("Photo of Unloaded Material Uploaded Successfully!");
        });
    </script>
</body>
</html> 
