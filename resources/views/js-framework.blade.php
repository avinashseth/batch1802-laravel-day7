<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World with Vue.js</title>
  <!-- Vue.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>
<body>
  <div id="app">
    <p>@{{ message }}</p>
  </div>

  <script>
    // Vue instance
    new Vue({
      el: '#app',
      data: {
        message: 'Hello, World!'
      }
    });
  </script>
</body>
</html>