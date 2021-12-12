<!DOCTYPE html>
<html>
<head>
    <title></title>
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container mt-4">
    <div class="row">
      <div class="col-md-8 offset-2">
        <div class="card">
          <div class="card-header bg-success text-white ">
            <strong>Search with Laravel Livewire - Nicesnippets.com</strong>
          </div>
          <div class="card-body">
            @livewire('search')
          </div>
        </div>
      </div>
    </div>
</div>
</body>

@livewireScripts
</html>