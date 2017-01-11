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
<h2>{{ Session::get('status')}}</h2>
@if()
@else
@end
<div class="content_product">
  @if($products instanceof Illuminate\Database\Eloquent\Collection)
    @foreach($products as $product)
      <div class="product">
        <div class="bgimgproduct">
          <img style="width: 200px; height: 200px;" src='/img/{{ $product->img }}'>
        </div>
        <p class="name_product">{{ $product->name }}</p>
        <p>{{ $product->description }}</p>
        <p class="prix_product">{{ $product->price / 100}} €</p>
        <button class="btn_magasin">Ajouter au panier</button>
      </div>
    @endforeach
    @else
      <div data-id='{{ $product->id }}' class="single-product">
        <img style="width: 50px;" src='/img/{{ $product->img }}'>
        <p>{{$product->name}}</p>
        <div>
          <p>{{ $product->description }}</p>
          <p>{{$product->price}}</p>
        </div>
        <button>Add to Panier</button>
      </div>
    @endif
</div>

@endsection
