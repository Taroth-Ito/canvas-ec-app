@extends('layouts.seller_app')
@section('content')
<main>
        
    <div class="page-header mt-5 text-center">
        <h4>商品情報修正</h4>
    </div>
    
        
    <div class="row mt-5 mb-5">
        <div class="col-sm-5 mx-auto">
    
            {!! Form::open(['route' => 'back_product_update', 'method'=>'put']) !!}
                
                <div class="form-group-sm">
                    {!! Form::label('product_name', '商品名', ['class' => 'mt-2 mb-0']) !!}
                    <div class="pl-3">
                        {!! Form::text('product_name', $product->product_name, ['class' => 'form-control d-inline w-100']) !!}
                    </div>
                </div>
            
                <div class="form-group-sm">
                    {!! Form::label('category_name', '商品カテゴリ', ['class' => 'mt-2 mb-0']) !!}
                    <div class="pl-3">
                        <select class="form-control d-inline w-100" name="category_id">
                        <option value="">{{ $category_name }}</option>
                            @foreach($categories as $id => $categoryName)
                                <option value="{{ $id }}">
                                    {{ $categoryName }}
                                </option>  
                            @endforeach, 
                        </select>
                    </div>
                </div>
                
                <div class="form-group-sm">
                    {!! Form::label('price', '販売単価', ['class' => 'd-block mt-2 mb-0']) !!}
                    {!! Form::text('price', $product->price, ['class' => 'ml-3 form-control col-sm-8']) !!}
                </div>
            
                <div class="form-group-sm">
                    {!! Form::label('sale_status_name', '販売状態', ['class' => 'd-block mt-2 mb-0']) !!}
                    <select class="ml-3 form-control col-sm-8" name="sale_status_id">
                        <option value="">{{$sale_status_name}}</option>
                            @foreach($sale_statuses as $id => $sale_statusName)
                                <option value="{{ $id }}">
                                    {{ $sale_statusName }}
                                </option>  
                            @endforeach, 
                    </select>
                </div>

                <div class="form-group-sm">
                    {!! Form::label('product_status_name', '商品状態', ['class' => 'd-block mt-2 mb-0']) !!}
                    <select class="ml-3 form-control col-sm-8" name="product_status_id">
                        <option value="">{{$product_status_name}}</option>
                            @foreach($product_statuses as $id => $product_statusName)
                                <option value="{{ $id }}">
                                    {{ $product_statusName }}
                                </option>  
                            @endforeach, 
                    </select>
                </div>

                <div class="form-group-sm">
                    {!! Form::label('description', '商品説明', ['class' => 'mt-2 mb-0']) !!}
                    <div class="pl-3">
                        {!! Form::textarea('description', $product->description, ['class' => 'form-control d-inline w-100']) !!}
                    </div>
                </div>

                <div>
                    <div class="w-50 float-left">
                        <div class="text-center mt-5"> 
                            {!! Form::submit('修正', ['class' => 'button btn btn-primary mt-2']) !!}
                        </div>
                    </div>
            {!! Form::close() !!}

            {!! Form::open(['route' => 'back_product_delete', 'method'=>'delete']) !!}
                    <div class="w-50 float-right">
                        <div class="text-center mt-5">
                            {!! Form::submit('削除', ['class' => 'button btn btn-danger mt-2']) !!}
                        </div>
                    </div>
                </div> 
            {!! Form::close() !!}

        </div>
    </div>



</main>

@endsection