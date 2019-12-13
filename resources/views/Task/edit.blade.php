@extends('layouts.app')
@section('title', trans('message.category_title_edit'))
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-xs-12 col-md-7 col-lg-12">
            <h1 class="page-header"> {{ trans('message.careate_category_edit') }} </h1>
        </div>
    </div>

    <div class="row">
         <div class="col-xs-12 col-md-5 col-lg-12">
             <div class="panel panel-primary">
                 <div class="panel-heading">
                     {{ trans('message.careate_category_edit') }}
                 </div>
                    <div class="panel-body">
                         @if (count($errors) > config('config.key'))
                             <div class="alert alert-danger">
                                 @foreach ($errors->all() as $error)
                                     {{ $error }}
                                 @endforeach
                             </div>
                        @endif

                        <form action="{{ route('update_task', $task->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label> {{ trans('message.name_category') }}<span class="text text-danger"> * </span></label>
                                <input type="text" name="name" class="form-control"  value=" {{ $task->name }} ">
                            </div>
                            <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary " value=" {{ trans('message.btn_update') }} ">
                            </div>
                        </form>
                    </div>
             </div>
        </div>
    </div>
</div>
@endsection

