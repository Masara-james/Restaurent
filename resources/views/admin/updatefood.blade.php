<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss");

  </head>
  <body>
    <div class="container-scroller">
      
    @include("admin.navbar")

    <div style="position: relative; top: 60px; left: 150px;">
     <form action="{{url('/upload', $data->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div>
        <label>Title</label>
        <input style="color: blue;" type="text" name="title" placeholder="Write title" value="{{$data->title}}" required>
      </div>
     <div>
        <label>Price  </label>
        <input style="color: blue;" type="num" name="price" placeholder="Type Price" value="{{$data->price}}" required>
      </div>
      
      <div>
        <label>Desciption</label>
        <input style="color: blue;" type="text" name="description"  value="{{$data->description}}" required>
      </div>
      <div>
        <label> Old Image</label>
        <img heigth="200" width="200" src="/foodimage/{{$data->image}}">
      </div>
      <div>
        <label> New Image</label>
        <input style="color: blue;" type="file" name="image" required>
      </div>
       <div>
         <input style="color: black;" type="submit" value="Save">
       </div>
      </form>
    </div>


    </div>
    @include("admin.adminscript")

  </body>
</html>