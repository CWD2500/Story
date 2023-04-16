@extends('layouts.base')

@section('content')


<?php   $i =0;
$i++;    
?>



<div class="container  mt-5 ">


<table class="table">
<table class="table table-light mt-2">
        <thead class="thead-light">
            <tr>
                <th>Count </th>
                <th>Title   </th>
                <th> Cost </th>
                <th>Price </th>
                <th>Old Price </th>
                <th>Restore </th>
                <th>Delete End </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($story as $items)
                
            <tr>
                <td><?php  echo $i; ?></td>
                <td>{{$items->title}} </td>
                <td>{{$items->cost}} </td>
                <td>{{$items->price}} </td>
                <td>{{$items->old_price}} </td>
                <td> <a href="{{ route('admin.story.trashed.resTore' , ['id'=>$items->id])}}" class="btn btn-outline-primary" > Restore</a>  </td>
                <td> <a href="{{ route ('admin.story.trashed.delete', ['id'=>$items->id]) }}" class="btn btn-outline-primary"> Delete End </a>  </td>
         
            </tr>
            @endforeach
        
        </tbody>
        <tfoot>
            <tr style="color: blue">
                <th>#</th>
                <th>#</th>
                <th>#</th>
                <th>#</th>
                <th>#</th>
                <th>#</th>
                <th>#</th>
            </tr>
        </tfoot>
      </table>
      </div>
@endsection