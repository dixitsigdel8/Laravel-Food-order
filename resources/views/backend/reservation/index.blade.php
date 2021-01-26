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
            <h3>Reservation 
            
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
                          <h2>Reservation List</h2>
                          <div class="clearfix"></div>
                        </div>
                     <div class="x_content">
                         <table class="table table-bordered jambo_table">
                         <thead>
                         <th>S.N</th>
                         <th>First Name</th>
                         <th>Last Name</th>
                         <th>Email</th>
                         <th>Date</th>
                         <th>Time</th>
                         <th>Phone</th>
                         <th>Message</th>
                         <th>Status</th>
                         <th>Action</th>
                         </thead>
                         <tbody>
                             @foreach ($reserve as $key=>$value)
                         <tr>
                         <td>{{$key+1}}</td>
                         <td>{{$value->first_name}}</td>
                         <td>{{$value->second_name}}</td>
                         <td>{{$value->email}}</td>
                         <td>{{$value->date}}</td>
                         <td>{{$value->time}}</td>
                         <td>{{$value->phone}}</td>
                         <td>{{$value->message}}</td>
                         <th>
                             @if ($value->status==true)
                             <span class="label label-info">Confirmed</span>
                                 
                             @else
                             <span class="label label-danger">Not Confirmed Yet </span>
                             @endif
                         </th>
                         
                        <td>
                            @if($value->status == false)
                                <form id="status-form-{{ $value->id }}" action="{{ route('reserve-status',$value->id) }}" style="display: none;" method="POST">
                                    @csrf
                                </form>
                                <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you verify this request by phone?')){
                                        event.preventDefault();
                                        document.getElementById('status-form-{{ $value->id }}').submit();
                                        }else {
                                        event.preventDefault();
                                        }"><i class="material-icons">done</i></button>
                            @endif
                            <form id="delete-form-{{ $value->id }}" action="{{ route('reserve-destroy',$value->id) }}" style="display: none;" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $value->id }}').submit();
                            }else {
                                event.preventDefault();
                                    }"><i class="material-icons">delete</i></button>
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