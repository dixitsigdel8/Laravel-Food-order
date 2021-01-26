@extends('layouts.admin')


@section('styles')
<link rel="stylesheet" href="{{asset('/backend/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content')
<div class="right_col" role="main">
   <div class="">
       <div class="page-title">
        <div class="title_left">
        @include('backend.section._notification')
            <h3>Contact
            
            </h3>
            
         </div>

         <div class="title_right">
             <div class="col-md-5 col-sm-5 col-xs-12">
                 <div class="input-group">
                 
                 </div>
            </div>
           </div>
          </div>

          <div class="clearfix"> </div>
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                      <div class="x_title">
                          <h2>Contact Message</h2>
                          <div class="clearfix"></div>
                        </div>
                     <div class="x_content">
                         <table class="table table-bordered jambo_table">
                         <thead>
                         <th>S.N</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Subject</th>
                         <th>Message</th>
                         <th>Sent At</th>
                         <th>Action</th>
                         </thead>
                         <tbody>
                             @foreach ($contact as $key=>$value)
                         <tr>
                         <td>{{$key+1}}</td>
                         <td>{{$value->name}}</td>
                         <td>{{$value->email}}</td>
                         <td>{{$value->subject}}</td>
                         <td>{{$value->message}}</td>
                         <td>{{$value->created_at}}</td>
                         
                        <td>
                            <a href="" class="btn btn-info" style="border-radius:50%">
                                <i class="fa fa-eye"></i>
                            </a>|
                            <a href="{{ route('contact-delete',$value->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')" style="border-radius:50%">
                                <i class="fa fa-trash"></i>
                            </a>

                        </td>
                         </tr>
                         </tbody>
                         @endforeach
                         </table>
                      </div>
                    </div>
                 </div>
                <div>
             </div>
        </div>
@endsection

@section('scripts')
<script src="{{ asset('/backend/jquery.dataTables.min.js') }}"></script>
<script>
$('.table').DataTable();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection