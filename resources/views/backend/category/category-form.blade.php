@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
   <div class="">
       <div class="page-title">
        <div class="title_left">
            <h3>{{ ucfirst($title) }} Category
            
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
                          <h2>{{ ucfirst($title) }} Form</h2>
                          <div class="clearfix"></div>
                        </div>
                     <div class="x_content">
                        {{ Form::open(['url'=>route('category-submit'),'class'=>'form','enctype'=>'multipart/form-data']) }}


                         <div class="form-group row {{$errors->has('title') ? 'has-error':''}}">
                          <label for="" class="col-sm-3">Category:</label>
                          <div class="col-sm-8">
                          {{ Form::text('title',@$category_data->title,['class'=>'form-control','required'=>'true','id'=>'title'])}}
                          @if($errors->has('category'))
                          <span class="help-block"> {{ $errors->first('category') }}</span>
                    
                          @endif
                          </div>
                         </div>

                         <div class="form-group row">
                          <label for="" class="col-sm-3"></label>
                          <div class="col-sm-8">
                        {{Form::button('<i class="fa fa-send"></i> Post Slider',['class'=>'btn btn-success','type'=>'submit'])}}
                          </div>
                         </div>
                         {{ Form::hidden('category_id',@$category_data->id) }}
                         {{ Form::close() }}
                       
                        

                      </div>
                    </div>
                 </div>
                <div>
             </div>
        </div>
@endsection