<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss");

  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    <div style="position: relative; top: 60px; left: 150px;">
     <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div>
        <label>Title</label>
        <input style="color: blue;" type="text" name="title" placeholder="Write title" required>
      </div>
     <div>
        <label>Price  </label>
        <input style="color: blue;" type="num" name="price" placeholder="Type Price" required>
      </div>
      <div>
        <label>Image</label>
        <input style="color: blue;" type="file" name="image" placeholder="PLace the image" required>
      </div>
      <div>
        <label>Desciption</label>
        <input style="color: blue;" type="text" name="description" placeholder="Type your description here" required>
      </div>
       <div>
         <input style="color: black;" type="submit" value="Save">
       </div>
      </form>

      <div class="row mb-5">
        <div class="container mb-5">
          <table bgcolor="black" style="padding:15px" >
      
            <tr>
          <th style="padding:30px">Name</th>
          <th style="padding:30px">Price</th>
          <th style="padding:30px">Image</th>
          <th style="padding:30px">Description</th>
          <th style="padding:30px">Action</th>
          <th style="padding:30px">Action</th>

        </tr>
        @foreach($data as $data)
        <tr style="text-align:center">
          <td>{{$data->title}}</td>
          <td>{{$data->price}}</td>
          <td><img height="150px" width="150px" src="/foodimage/{{$data->image}}"></td>
          <td>{{$data->description}}</td>
          <td><a href="{{url('/deletefood',$data->id)}}">Delete</a></td>
          <td><a href="{{url('/updatefood',$data->id)}}">Update</a></td>

        </tr>
        @endforeach
      </table>
          
        </div>
      
    </div>
    </div>
    
  
      
     
    </div>

    @include("admin.adminscript");

  </body>
</html>