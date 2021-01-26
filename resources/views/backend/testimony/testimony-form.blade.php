@extends('layouts.admin')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>{{ ucfirst($title) }} Testimony
                
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
                    <h2>{{ucfirst($title)}} Form</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
               {{ Form::open(['url'=>route('testimony-submit'),'class'=>'form','enctype'=>'multipart/form-data'] ) }}

               <div class="form-group row {{ $errors->has('title')? 'has-error':'' }}">
               <label for="" class="col-sm-3">Title</label>
               <div class="col-sm-8">
                   {{Form::text('title',@$testimony_data->title,['class'=>'form-control','required'=>true,'id'=>'title'] )}}
                   @if($errors->has('title'))
                    <span class="help-block">{{ $errors->first('title')}}</span>
                    @endif
              </div>
              </div>

              <div class="form-group row {{ $errors->has('description')? 'has-error':'' }}">
               <label for="" class="col-sm-3">Description</label>
               <div class="col-sm-8">
                   {{Form::textarea('description',@$testimony_data->description,['class'=>'form-control','required'=>true,'id'=>'description','style'=>'resize:none;','rows'=>3] )}}
                   @if($errors->has('description'))
                    <span class="help-block">{{ $errors->first('description')}}</span>
                    @endif
              </div>
              </div>

              

              <div class="form-group row {{ $errors->has('image')? 'has-error':'' }}">
               <label for="" class="col-sm-3">Image</label>
               <div class="col-sm-4">
                   {{Form::file('image',['required'=>($title=='add'? true:false),'id'=>'status','accept'=>'image/*'] )}}
                   @if($errors->has('image'))
                    <span class="help-block">{{ $errors->first('image')}}</span>
                    @endif
              </div>
              <div class="col-sm-4">
              @if($title=='update' && isset($testimony_data,$testimony_data->image) && file_exists(public_path().'/uploads/testimony/'.@$testimony_data->image))
                          <img src="{{ asset('/uploads/testimony/'.$testimony_data->image) }}"  class="img-responsive img-thumbnail">;
                          @endif
              </div>
              </div>

              <div class="form-group row">
               <label for="" class="col-sm-3"></label>
               <div class="col-sm-8">
                   {{ Form::hidden('testimony_id',@$testimony_data->id) }}
                   {{ Form::button('<i class="fa fa-send"></i> Post Testimony',['class'=>'btn btn-success','type'=>'submit'])}}
              </div>
              </div>

              
               {{ Form::close() }}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection