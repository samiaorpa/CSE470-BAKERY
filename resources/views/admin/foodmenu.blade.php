<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    
   @include("admin.admincss")  
  </head>
  <body>
   <div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative; top: 60px;  right: -150px">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input style="colou:blue;" type="text" name="title" placeholder="Write a title" required>


            </div>
            <div>
                <label>Price</label>
                <input style="colou:blue;" type="number" name="price" placeholder="price" required>


            </div>
            <div>
                <label>Image</label>
                <input  type="file" name="image" required>


            </div>
            <div>
                <label>Description</label>
                <input style="colou:blue;" type="text" name="description" placeholder="Description" required>


            </div>
            <div>
                
                <input style="color: black" type="submit" value="Save"  required>


            </div>


        </form>
        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding; 30px">Food Name</th>
                    <th style="padding; 30px">Price</th>
                    <th style="padding; 30px">Description</th>
                    <th style="padding; 30px">Image</th>
                    <th style="padding; 30px">Action</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                </tr>


            </table>





    </div>

   </div>

    @include("admin.adminscript")
    
    
  </body>
</html>