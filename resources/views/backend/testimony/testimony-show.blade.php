

@extends('layouts.admin')

@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>View Testimony Page
          
          </h3>
          

        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Yours Post here!!</h2>
             
            <a href="{{route('testimony-list')}}" class="btn btn-danger" style="margin-left:50%">Back</a>
              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Name:</strong>
                        {{$testimony->title}}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        {{$testimony->description}}

                    </div>

                </div>

                

          
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Image:</strong>
                        <img src="{{ asset('/uploads/testimony/'.$testimony->image) }}"height="850px;" width="1350px;">

                    </div>

                </div>

            </div>

        
        

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection
