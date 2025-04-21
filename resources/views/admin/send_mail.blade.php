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

  <base href="/public">
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

          @if(isset($data))

          @foreach($data as $messages)

            <form action="{{url('sendemail',$data->id)}}" method="POST">

          @endforeach

          @endif


              @csrf

              <div style="padding: 15px;">
                <label>Greeting</label>
                <input type="text" style="color: black; width: 300px;" name="greeting" placeholder="Write the greeting" required="">
              </div>

               <div style="padding:15px;">
                <label>Body</label>
                <textarea name="body" style="color: white;" id="caption" cols="15" rows="10" class="form-control"  required=""></textarea>
              </div>

               <div style="padding: 15px;">
                <label>Action Text</label>
                <input type="text" style="color: black; width: 250px;" name="actiontext" placeholder="Write the action text" required="">
              </div>

               <div style="padding: 15px;">
                <label>Action Url</label>
                <input type="text" style="color: black; width: 250px;" name="actionurl" placeholder="Write the action url" required="">
              </div>

               <div style="padding: 15px;">
                <label>End Part</label>
                <input type="text" style="color: black; width: 250px;" name="end part" placeholder="Write the end part" required="">
              </div>

             

              <div style="padding: 15px;">
              <button type="submit" class="btn btn-primary mr-2">Send</button>
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