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
        <!-- partial -->
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

            <form action="{{url('load_agent')}}" method="POST" enctype="multipart/form-data">

              @csrf

              <div style="padding: 15px;">
                <label>Agent Name</label>
                <input type="text" style="color: black; width: 300px;" name="name" placeholder="Write the name" required="">
              </div>

               <div style="padding: 15px;">
                <label>Phone</label>
                <input type="number" style="color: black; width: 250px;" name="number" placeholder="Write the number" required="">
              </div>

               <div style="padding: 15px;">
                <label>Email</label>
                <input type="text" style="color: black; width: 250px;" name="email" placeholder="Write the email" required="">
              </div>

               <div style="padding: 15px;">
                <label>Agent Image</label>
                <input type="file" name="file" required="">
              </div>

              <div style="padding: 15px;">
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-dark">Cancel</button>
              </div>
              

            </form>
            

          </div>


        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>