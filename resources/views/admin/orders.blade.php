<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
<div class="container">
    <h1>Customer order</h1>
    <form action="{{url('/search')}}" method="get">
      @csrf
      <input type="text" name="search" style="color:blue;">
      <input type="submit" value="Search" class="btn btn-success">
    </form>
    <table>
        <tr align="center">
            <td style="padding: 10px">Name</td>
            <td style="padding: 10px">Phone</td>
            <td style="padding: 10px">Address</td>
            <td style="padding: 10px">Price</td>
            <td style="padding: 10px">Foodname</td>
            <td style="padding: 10px">Quantity</td>
            <td style="padding: 10px">Totalprice</td>
        </tr>
        @foreach ($data as $data)
        <tr align="center" style="background: black">
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->foodname}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price * $data->quantity}}</td>
        </tr>
        @endforeach
       
    </table>
  </div>
  </div>
    @include('admin.adminscript')
  </body>
</html>