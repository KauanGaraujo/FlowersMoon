@extends('usual')
@section('nav')
 
<div class="container">
<form class="row g-3" method="post" action="{{route('register-flowers')}}">
    @csrf
        <div class="col-md-8">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" name =nameFlowers id="inputName">
        </div>
 
        <div class="col-md-4">
            <label for="inputSpecies" class="form-label">Specie</label>
            <input type="text" class="form-control" name =speciesFlowers id="inputSpecies">
        </div>
 
        <div class="col-md-4">
            <label for="inputPrice" class="form-label">Price</label>
            <input type="text" class="form-control" name =priceFlowers id="inputPrice">
        </div>
 
        <div class="col-md-8">
            <label for="inputQuantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" name =quantityFlowers id="inputQuantity">
        </div>
   
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
 
@endsection