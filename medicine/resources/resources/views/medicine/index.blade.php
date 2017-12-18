

@extends('main')

@section('title', '| Homepage')

@section('content')
<section>
                
                <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                                {!! Form::open(array('files'=>true))  !!}
                                        {{ Form::label('medicine_name', "Diseases Name:") }}
                                        {{ Form::text('medicine_name', null, ['class' => 'form-control']) }}
                                    
                                        {{ Form::label('syndrome_id',"Syndrome")}}
                                        <select class="form-control" name="syndrome_id">
					@foreach($add_syndrome as $syndrome)
						<option value='{{ $syndrome->id }}'>{{ $syndrome->syndrome_name }}</option>
					@endforeach

                                        </select>

                                        {{ Form::submit('ADD', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

                                {!! Form::close() !!}
                        </div>
                        
                          
                </div>
</section>
@stop
