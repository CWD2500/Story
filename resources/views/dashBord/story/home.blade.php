@extends('layouts.dashBord')

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
                <th>Cost </th>
                <th>Price </th>
                <th>Old Price </th>
                <th> Date Time Story </th>
                <th>Edit </th>
                <th>Delete </th>
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
                <td>{{$items->create_story}} </td>
                <td> <a href="{{ route ('admin.story.edit' , ['id'=>$items->id]) }}" class="btn btn-outline-primary" > Edit</a>  </td>
                <td> <a href="{{ route ('admin.story.destroy' , ['id'=>$items->id])  }}" class="btn btn-outline-primary"> Delete</a>  </td>
         
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
                <th>#</th>
            </tr>
        </tfoot>
      </table>
      </div>
@endsection