@extends ('template.base')
@section('title', 'Magasin')
@section('content')
  <h1>Bienvenue sur mon magasin</h1>
{{--   <table id="product_table">
    <tr>
      <th>Nom</th>
      <th>Description</th>
      <th>Prix</th>
      <th>Taille</th>
      <th>Image</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }} </td>
            <td>{{ $product->description }} </td>
            <td>{{ $product->price / 100}} </td>
            <td>{{ $product->height }} X {{ $product->width }}</td>
            <td><img style="width: 100px; height:100px;" src='/img/{{ $product->img }}'</td>
        </tr>

    @endforeach
  </table>
@endsection
--}}
<div class="content_product">
  @foreach($products as $product)
    <div class="product">
      <img style="width: 200px; height: 200px;" src='/img/{{ $product->img }}'>
      <p>{{ $product->name }}</p>
      <p>{{ $product->description }}</p>
      <p>{{ $product->price / 100}} €</p>
      <button>Ajouter au panier</button>
    </div>
@endforeach
</div>
@endsection
