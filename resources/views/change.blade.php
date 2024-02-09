@extends('usual')
@section('nav')


<div class="container">
    <form class="row g-3" method="post" action="{{route('changeFlowers-Flowers',$flowers->id)}}">
        @method('put')
        @csrf
        <div class="col-md-8">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" value ="{{$flowers->nameFlowers}}" name =nameFlowers id="inputName">
        </div>

        <div class="col-md-4">
            <label for="inputSpecies" class="form-label">Specie</label>
            <input type="text" class="form-control"  value ="{{$flowers->speciesFlowers}}" name =speciesFlowers id="inputSpecies">
        </div>

        <div class="col-md-8">
            <label for="inputPrice" class="form-label">Price</label>
            <input type="text" class="form-control" value ="{{$flowers->priceFlowers}}" name =priceFlowers id="inputPrice">
        </div>

        <div class="col-md-8">
            <label for="inputQuantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" value ="{{$flowers->quantityFlowers}}" name =quantityFlowers id="inputQuantity">
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
</div>

@endsection