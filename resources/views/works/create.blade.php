<x-app-layout>

    <div class="card">

        <div class="card-body">

            {!! Form::open(['route'=>'works.store']) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control','place-holder'=>'Title of the project']) !!}
                    @error('title')
                        <span class="text-red-500 tex-sm">
                            {{ $message }}
                        </span>
                    @enderror

            </div>

            {!! Form::close() !!}

        </div>

    </div>




</x-app-layout>   