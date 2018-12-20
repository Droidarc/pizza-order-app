<nav class="navbar navbar-expand-lg bg-white navbar-down">
  <div class="container">
    <a class="navbar-brand" href="{{ route('mainpage') }}">Pizza store</a>
    <ul>
    <li><a href="{{ route('pizzas') }}"><button type="button" class="btn btn-sm btn-warning">Tüm pizzalar</button></a></li>
    <li><a href="{{ route('discounts') }}"><button type="button" class="btn btn-sm btn-warning">Tüm kampanyalar</button></a></li>
    <li><a href="{{ route('extras') }}"><button type="button" class="btn btn-sm btn-warning">Ekstralar</button></a></li>
  </ul>
  </div>
</nav>
