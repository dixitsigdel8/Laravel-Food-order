@extends('layouts.admin')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Update Items
                
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
                    <h2>Items Update Form</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
                  <form action="{{route('item-update',$item->id)}}" method="POST" enctype="multipart/form-data">
                
                    @csrf

               <div class="row">

                
               <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Category:</strong>
                    <select class="form-control" name="category_id">
                      @foreach($category as $category)
                      <option {{ $category->id == $item->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                  @endforeach
                      </select>
                </div>
              </div>

                


               <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Item Title:</strong>
                <input type="text" name="title" class="form-control" value="{{$item->title}}">
                </div>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Item Subtitle:</strong>
                <input type="text" name="subtitle" class="form-control" value="{{$item->subtitle}}">
                </div>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Item Price:</strong>
                    <input type="number" value="{{$item->price}}" name="price" class="form-control">
                </div>
              </div>


              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Item Image:</strong>
                  <input type="file" name="image"accept="image/*">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Item Old Image:</strong>
                    <img src="{{ asset('/uploads/item/'.$item->image) }}" style="max-width:150px" class="img-responsive img-thumbnail">
                <input type="hidden" name="oldimage" value="{{$item->image}}">
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Submit</button>
              </div>
               </div>
               


            </form>

              
              

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
       
@endsection