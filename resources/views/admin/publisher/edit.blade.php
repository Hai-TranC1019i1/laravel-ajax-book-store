@extends('layout.admin')
@section('title', 'Edit user');
@section('content')
@section('path')
    <li><i class="fa fa-user"></i><a href="{{ route('admin.publisher.list') }}">Publisher</a></li>
    <li><i class="fa fa-user"></i>Edit Publisher</li>
@endsection
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Form validations
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" method="post" action="{{route('admin.publisher.update',$publisher->id)}}">
                        @csrf
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Name<span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cname" name="name"
                                       value="{{$publisher->name}}" minlength="5" type="text" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection
