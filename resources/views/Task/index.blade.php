@extends('layouts.app')
@section('title', trans('message.category_title'))
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
         <div class="col-lg-12">
             <h1 class="page-header"> {{ trans('message.category_header') }} </h1>
         </div>
    </div>

    <div class="row">
         <div class="col-xs-12 col-md-5 col-lg-5">
             <div class="panel panel-primary">
                 <div class="panel-heading">
                     {{ trans('message.careate_category') }}
                 </div>
                     <div class="panel-body">
                         @if (count($errors) > config('config.key'))
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                         @endif
                        <form action="{{ route('create_task') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label> {{trans('message.name_category') }} <span class="text text-danger"> * </span></label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary " value=" {{ trans('message.btn_them') }} ">
                            </div>
                        </form>
                    </div>
             </div>
        </div>

        <div class="col-xs-12 col-md-7 col-lg-7">
            <div class="panel panel-primary">
                <div class="panel-heading"> {{trans('message.careate_category')}} </div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                              @if (session('success'))
                                  <div class="alert alert-success">
                                      {{ session('success') }}
                                  </div>
                              @endif
                              @if (session('error'))
                                  <div class="alert alert-danger">
                                      {{ session('error') }}
                                  </div>
                              @endif
                              <table class="table table-bordered">
                                  <thead>
                                      <tr class="bg-primary">
                                          <th class="name_category"> {{ trans('message.name_category') }} </th>
                                          <th class=""> {{ trans('message.action') }} </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($tasks as $task)
                                          <tr>
                                              <td> {{ $task->name }} </td>
                                              <td>
                                                   <a href="{{ route('view_edittask', $task->id) }}" class="btn btn-warning">
                                                   <span class="glyphicon glyphicon-edit"></span>
                                                       {{ trans('message.btn_edit') }}
                                                   </a>
                                                   <a data-id="{{ $task->id }}" data-url="{{ route('detete_task', $task->id) }}"
                                                    class=" delete btn btn-danger">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                        {{ trans('message.btn_delete') }}
                                                   </a>
                                              </td>
                                        </tr>
                                    @endforeach
                                 </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection

