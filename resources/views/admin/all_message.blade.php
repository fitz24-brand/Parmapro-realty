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
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Email</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Subject</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Message</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Status</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Send Email</th>
                <th class="th_deg" style="padding:10px; font-size: 20px;color: white;">Delete</th>
                
              </tr>
              @if(isset($message))
              @foreach($message as $messages)

              <tr align="center" style="padding: 70px; background-color: black;">
                <td style="padding:10px; color: white;">{{$messages->name}}</td>
                <td style="padding:10px; color: white;">{{$messages->email}}</td>
                <td style="padding:10px; color: white;">{{$messages->subject}}</td>
                <td style="padding:10px; color: white;">{{$messages->message}}</td>
                <td style="padding:10px; color: white;">{{$messages->status}}</td>
                <td><a class="btn btn-success" href="{{url('emailview',$messages->id)}}">Send mail</td>
                 <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deletemessage',$messages->id)}}">Delete</td>
              </tr>
              @endforeach
              @endif


            </table>
            

          </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>