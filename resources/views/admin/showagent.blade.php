<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

          <div align="center" style="padding: 70px;">


            <table class="table_deg">
              <tr style="background-color: blue;">
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Name</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Phone</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Email</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Image</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Delete</th>
              </tr>

              @foreach($agent as $agents)

              <tr>
                <tr align="center" style="padding: 70px; background-color: black;">
                <td style="padding:10px; color: white;">{{$agents->name}}</td>
                <td style="padding:10px; color: white;">{{$agents->phone}}</td>
                <td style="padding:10px; color: white;">{{$agents->email}}</td>
                <td><img height="150" width="200" src="agentimage/{{$agents->image}}"></td>
                 <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deleteagent',$agents->id)}}">Delete</td>
              </tr>

              @endforeach

              </table>

          </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>