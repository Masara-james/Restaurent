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
    <form action="{{url('/uploadchef')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div>
        <label>Name</label>
        <input style="color: blue;" type="text" name="name" placeholder="Enter Your Name">
      </div>
       <div>
        <label>Speciality</label>
        <input style="color: blue;" type="text" name="speciality" placeholder="Enter Chefs Speciality">
      </div>
      <div>
        <input type="file" name="image" placeholder="Choose File">
      </div> 
      <div>
        <input style="color: blue;" type="submit" name="save" value="Save">
      </div>  
       <table bgcolor="black">
      
    <tr>
      <th style="padding:3px;">Chef Name</th>
      <th style="padding:30px;"> Speciality</th>
      <th style="padding:30px;">Chef Image</th>
      <th style="padding:30px;">Action</th>
    </tr>
    @foreach( $data as $data)
    <tr>
      <td>{{$data->name}}</td>
      <td> {{$data->speciality}}</td>
      <td><img height="100px" width="100px" src="chefimage/{{$data->image}}"></td>
      <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
    </tr>
    @endforeach
    </table> 
    </form>

   

      
      
    </div>

    @include("admin.adminscript");

  </body>
</html>