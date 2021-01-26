@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
   <div class="">
       <div class="page-title">
        <div class="title_left">
            <h3>{{ ucfirst($title) }} Items
            
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
                     <form action="{{ route('item-store')}}" method="POST" enctype="multipart/form-data">
                
                            @csrf

                        <div class="form-group row">
                            <label for="" class="col-sm-3">Category</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="category_id">
                                    @foreach ($category as $item)
                                  <option value="{{$item->id}}">{{$item->title}}</option>
                                        
                                    @endforeach
                                  </select>

                            </div>

                        </div>


                         <div class="form-group row {{$errors->has('title') ? 'has-error':''}}">
                          <label for="" class="col-sm-3">Item Title:</label>
                          <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" required="true" placeholder="Enter Item Title">
                          @if($errors->has('title'))
                          <span class="help-block"> {{ $errors->first('title') }}</span>
                    
                          @endif
                          </div>
                         </div>

                         <div class="form-group row {{$errors->has('subtitle') ? 'has-error':''}}">
                            <label for="" class="col-sm-3">Item Sub-Title:</label>
                            <div class="col-sm-8">
                                <input type="text" name="subtitle" class="form-control" required="true" placeholder="Enter Item Sub-title">
                            @if($errors->has('subtitle'))
                            <span class="help-block"> {{ $errors->first('subtitle') }}</span>
                      
                            @endif
                            </div>
                           </div>

                           <div class="form-group row {{$errors->has('price') ? 'has-error':''}}">
                            <label for="" class="col-sm-3">Item Price:</label>
                            <div class="col-sm-8">
                                <input type="number" name="price" class="form-control" required="true" placeholder="Item price">
                            @if($errors->has('price'))
                            <span class="help-block"> {{ $errors->first('price') }}</span>
                      
                            @endif
                            </div>
                           </div>

                           <div class="form-group row {{$errors->has('image') ? 'has-error':''}}">
                            <label for="" class="col-sm-3">Item Image:</label>
                            <div class="col-sm-8">
                                <input type="file" name="image" accept="image/*">
                            @if($errors->has('image'))
                            <span class="help-block"> {{ $errors->first('image') }}</span>
                      
                            @endif
                            </div>
                           </div>

                         <div class="form-group row">
                          <label for="" class="col-sm-3"></label>
                          <div class="col-sm-8">
                            <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Submit</button>
                          </div>
                         </div>

                     </form>
                       
                        

                      </div>
                    </div>
                 </div>
                <div>
             </div>
        </div>
@endsection