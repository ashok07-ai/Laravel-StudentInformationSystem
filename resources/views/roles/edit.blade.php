@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Role
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($role, ['route' => ['roles.update', $role->role_id], 'method' => 'patch']) !!}

                        {{-- @include('roles.fields') --}}
                        <!-- Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
               </div>

                        {{-- modal Footer --}}
                        <div>
                    
                            {!! Form::submit('Update Role', ['class' => 'btn btn-success']) !!}
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>

@endsection