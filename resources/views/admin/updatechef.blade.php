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

<form>
  <div>
     <label>Chef Name</label>
  <input style="color:blue;" type="text" name="{{$data->name}}" value="name">
  </div>
  <div>
     <label>Speciality</label>
  <input style="color:blue;" type="text" name="name" value="Speciality">
  </div>
  <div>
     <label>Image</label>
     <img src="url(">
  </div>
 
</form>


      </div>
    </div>
    
    @include("admin.adminscript");

  </body>
</html>