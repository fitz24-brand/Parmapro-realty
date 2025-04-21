<!DOCTYPE html>
<html lang="en">
<head>

  <style type="text/css">
    label
    {
      display: inline-block;
      width: 200px;
    }
  </style>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">


        <div class="container" align="center" style="padding-top: 100px;">

           @if(session()->has('message'))

        <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert">
            x
          </button>

          {{session()->get('message')}}
          
        </div>


        @endif

          <form action="{{url('upload_property')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div style="padding:15px;">
              <label>Property Location</label>
              <input type="text" style="color: black;" name="location" placeholder="Write the location" required="">
            </div>

            <div style="padding:15px;">
              <label>Price</label>
              <input type="number" style="color: black;" name="number" placeholder="Write the number" required="">
            </div>

            <div style="padding:15px;">
              <label>Status</label>
              <select name="status" style="color:black; width: 200px;" required="">

                <option>--select--</option>
                <option value="rent">rent</option>
                <option value="sale">sale</option>
                <option value="rented">rented</option>
                <option value="sold">sold</option>

              </select>
            </div>

            <div style="padding:15px;">
              <label>Description</label>
             <textarea name="description" style="color: white;" id="description" cols="15" rows="10" class="form-control" placeholder="Write the description" required=""></textarea>
            </div>

            <div style="padding:15px;">
              <label>Size</label>
              <input type="text" style="color: black;" name="size" placeholder="Write the size" required="">
            </div>

            <div style="padding:15px;">
              <label>Property Image</label>
              <input type="file" name="file" required="">
            </div>

            <div style="padding:15px;">
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-dark">Cancel</button>
            </div>
            

          </form>
          

        </div>

      </div>
        <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>