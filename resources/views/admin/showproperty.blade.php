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
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Location</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Price</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Status</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Description</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Size</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Image</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Delete</th>
              </tr>

              
              @foreach($property as $properties)

              <tr>
                <tr align="center" style="padding: 70px; background-color: black;">
                <td style="padding:10px; color: white;">{{$properties->location}}</td>
                <td style="padding:10px; color: white;">{{$properties->price}}</td>
                <td style="padding:10px; color: white;">{{$properties->status}}</td>
                <td style="padding:10px; color: white;">{{$properties->description}}</td>
                <td style="padding:10px; color: white;">{{$properties->size}}</td>
                <td><img height="150" width="200" src="propertyimage/{{$properties->image}}"></td>
                <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deleteproperty',$properties->id)}}">Delete</td>
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