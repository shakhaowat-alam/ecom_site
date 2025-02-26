
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
 <style type="text/css">

 .title
 {
 color:white; 
 padding-top:25px; 
 font-size: 25px;
 }

 level
 {
  display:inline-block;
  width: 200px;
 }

</style>
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
     
     @include('admin.navbar')

     <div class="container-fluid page-body-wrapper">
       <div class="container" align="center">
       <h1 class="title">Add product</h1>

       @if(session()->has('message'))
       <div class="alert alert-success">

       <button type="button" class="close" data-dismiss="alert"></button>
       {{session()->get('message')}}
       
       </div>
       @endif

       <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

       @csrf

    <div style="padding:15px">
    <level>product title</level>
    <input style="color:black;" type="text" name="title" placeholder="Give a product title"
    required="">
    </div>

    <div style="padding:15px">
    <level>price</level>
    <input style="color:black;" style="color:black;" type="number" name="price" placeholder="Give a price"
    required="">
    </div>


    <div style="padding:15px">
    <level>Description</level>
    <input style="color:black;" type="text" name="Description" placeholder="Give a Description"
    required="">
    </div>

    <div style="padding:15px">
    <level>Quantity</level>
    <input style="color:black;" type="number" name="Quantity" placeholder="Give a Quantity"
    required="">
    </div>

    <div style="padding:15px">
    <input type="file" name="file">
    </div>


    <div style="padding:15px">
    <input class="btn btn-success" type="submit">
    </div>
     </form>

   </div>
   </div>
    @include('admin.script')
  </body>
</html>
