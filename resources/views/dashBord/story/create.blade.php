@extends('layouts.dashBord')

@section('content')






@if ($errors->count()>0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-primary alert-primary fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong> {{$error}} </strong> 
      </div>

        
    @endforeach
    
    

@endif



</div> 

<div class="container  mt-5" >
<form action="{{ route('admin.story.store') }}" method="post" enctype="multipart/form-data" >
{{ csrf_field() }}
    <div class="form-group mb-3">
        <label for="#title" >  Title   </label>
        <input type="text" #id="#title"  class="form-control" name="title" placeholder="Enter Title ">
    </div>
    <div class="form-group mb-3">
        <label for="#number" >  Cost   </label>
        <input type="number" #id="#cost"  class="form-control"  name="cost" placeholder="Enter Cost ">
    </div>
    <div class="form-group mb-3">
        <label for="#Price" >  Price   </label>
        <input type="number" #id="#Price"  class="form-control" name="price"  placeholder="Enter Price ">
    </div>
    <div class="form-group mb-3">
        <label for="#OldPrice" >  Old Price   </label>
        <input type="number" #id="#OldPrice"  class="form-control"   name="old_price" placeholder="Enter Old Price ">
    </div>
    <div class="form-group mb-3">
        <label for="#newStroyProduct" >  new Stroy Product   </label>
        <input type="date" #id="#newStroyProduct"  class="form-control"   name="create_story" placeholder="new Stroy Product ">
    </div>
    <div class="form-group mb-3">
        <label for="#Pictuer" >  Pictuer   </label>
        <input type="file" #id="#Pictuer"  class="form-control"  name="pictuer" placeholder="Enter Old Price ">
    </div>

    <div class="form-group mb-3">
        <label for="#description">Description </label>
        <textarea name="description" id="#description"  class="form-control "  rows="4"></textarea>
    </div>
    <div class="form-group mb-3">
         <button  type="submit"  class="btn btn-outline-primary  w-100" > Create </button>
    </div>

</form>
</div>


@endsection