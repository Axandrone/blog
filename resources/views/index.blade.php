<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>larareact</title>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    </head>
    <body>
        <h1>weblist</h1>
        <button onclick "testAjax()"> test ajax</button>
    </body>
    <script>
        function testAjax()
        {
            axios.get('/test')
  .then(function (response) {
    console.log(response.data);
    })
    .catch(function (error) {
        alert('ERROR');
  })
        }
    </script>
</html>
