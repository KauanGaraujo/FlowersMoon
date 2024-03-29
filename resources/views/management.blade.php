@extends('usual')
@section('nav')

<!-- inicio formulario -->
<div class="container m-4">
  <form method="get" action="{{route('all-flowers')}}">
<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputcodigo" class="col-form-label">Enter the Name </label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputcodigo" name="nameFlowers" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-primary">Search</button>
    </div>
</div>
</form>
<!--fim formulario -->
 
<!--inicio tabela-->
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Species</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Change</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($flowers as $flowersArray)
    <tr>
      <th scope="row">{{$flowersArray->id}}</th>
      <td>{{$flowersArray->nameFlowers}}</td>
      <td>{{$flowersArray->speciesFlowers}}</td>
      <td>{{$flowersArray->priceFlowers}}</td>
      <td>{{$flowersArray->quantityFlowers}}</td>
      <td>
        
        <a href="{{route('change-flowers',$flowersArray->id)}}">
          <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9"/>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
</svg></button>

        </a>
      </td>
      <td>
        <form method="POST" action="{{route('delete-flowers',$flowersArray->id)}}">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></button>
        </form>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
<!--fim tabela-->
</div>
@endsection