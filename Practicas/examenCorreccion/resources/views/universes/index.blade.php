<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
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

.tabla {
  width: 100%;
  border-collapse: collapse;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  background-color: #fff;
}

.tabla th, .tabla td {
  padding: 12px 15px;
  text-align: left;
}

.tabla thead {
  background-color: #007bff;
  color: #fff;
}

.tabla tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

.tabla tbody tr:hover {
  background-color: #ddd;
}

.tabla th:first-child, .tabla td:first-child {
  border-top-left-radius: 8px;
}

.tabla th:last-child, .tabla td:last-child {
  border-top-right-radius: 8px;
}

</style>
</head>
<body>
<div class="container">
  <h1>Universes</h1>
  <table class="tabla">
    <thead>
      <tr>
        <th>ID</th>
        <th>Universe Name</th>
      </tr>
    </thead>

    <tbody>
    @foreach ($universes as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->universe_name }}</td>
    </tr>
    @endforeach
    </tbody>

  </table>
</div>
</body>
</html>