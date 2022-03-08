<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
      
    <div class="container-scroller">
    @include("admin.navbar")
    <div style="position: relative; top:60px; right:-150px;">
        <form action="{{url("/update",$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Tittle</label>
                <input style="color: black" type="text" name="title" value="{{$data->title}}" required>
            </div><br>
            <div>
               <label for="">Price</label>
               <input style="color: black" type="num" name="price" value="{{$data->price}}" required>
           </div><br>
          
           <div>
               <label for="">Description</label>
               <input style="color: black" type="text" name="description" value="{{$data->description}}" required>
           </div><br>
           <div>
            <label for="">Old Image</label>
            <img height="200" width="200" src="/foodimage/{{$data->image}}" alt="">
        </div><br>
           <div>
            <label for="">New Image</label>
            <input  type="file" name="image"  required>
        </div><br>
           <div >
               <input style="color: red" type="submit" value="Save">
           </div>
        </form>

        <div>
  </div>
    @include('admin.adminscript')
  </body>
</html>