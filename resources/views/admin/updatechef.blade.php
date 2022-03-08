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
    <form action="{{url("/updatefoodchef",$data->id)}}"method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Name</label>
            <input style="color: blue" type="text" name="name" value="{{$data->name}}" id="">
        </div>
        <div>
            <label for="">Speciality</label>
            <input style="color: blue" type="text" name="speciality" value="{{$data->speciallity}}" id="">
        </div>
        <div>
            <label for="">Old Image</label>
            <img height="200" width="200" src="/chefimage/{{$data->image}}" alt="">
        </div>
        <div>
            <label for="">New Name</label>
            <input  type="file" name="image"  id="">
        </div>
        <div>
            <input style="color: blue;" type="submit" value="Update Chef" required>
        </div>
    </form>
  </div>
    @include('admin.adminscript')
  </body>
</html>