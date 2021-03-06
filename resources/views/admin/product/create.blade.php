@extends('admin.template')

@section('content')
	
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTES <small>[Afegir Producte]</small>
			</h1>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">
                    
                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    
                    {!! Form::open(['route'=>'product.store']) !!}
                    
                        <div class="form-group">
                            <label class="control-label" for="category_id">Categoria</label>
                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                        </div>
        
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            
                            {!! 
                                Form::text(
                                    'name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Introdueix el nom...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="extract">Extracte:</label>
                            
                            {!! 
                                Form::text(
                                    'extract', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Introdueix el extracte...',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Descripcion:</label>
                            
                            {!! 
                                Form::textarea(
                                    'description', 
                                    null, 
                                    array(
                                        'class'=>'form-control'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="price">Preu:</label>
                            
                            {!! 
                                Form::text(
                                    'price', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Introdueix el preu...',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="image">Imatge:</label>
                            
                            {!! 
                                Form::text(
                                    'image', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Introdueix la url de la imatge...',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="visible">Visible:</label>
                            
                            {!! 
                                Form::checkbox(
                                    'visible', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::submit('Desar', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ route('product.index') }}" class="btn btn-warning">Cancel-lar</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        

	</div>

@stop