<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">APP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link  {{ (request()->routeIs('counter')) ? 'active' : '' }}" aria-current="page" href="counter">Counter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->routeIs('calculator')) ? 'active' : '' }}" href="calculator">Caculator</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->routeIs('todolist')) ? 'active' : '' }}" href="todolist">TodoList</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Cascading Dropdown</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Product Search</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Image Upload</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Registration</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <main>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-10 ">
                    {{ $slot }}

                </div>
            </div>
        </div>
      </main>
      
    @livewireScripts
</body>
</html>