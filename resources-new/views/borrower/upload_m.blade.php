@extends('layouts.master')
@section('title')
    {{trans_choice('general.add',1)}} {{trans_choice('general.borrower',1)}}
@endsection
@section('content')
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title">{{trans_choice('general.add',1)}} {{trans_choice('general.borrower',1)}}</h6>
            <div class="heading-elements">

            </div>
        </div>
        {!! Form::open(array('url' => url('borrower/upload_members'), 'method' => 'post', 'name' => 'form',"enctype"=>"multipart/form-data")) !!}
        <div class="panel-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <h1>UPLOAD MEMBERS</h1>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ url(asset('uploads/sample_upload.csv')) }}">Download Sample Excel in .csv</a>
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('file',trans_choice('general.file',1),array('class'=>'')) !!}
                        {!! Form::file('upload_members', array('class' => 'form-control', 'placeholder'=>"")) !!}
                    </div>
                </div>
            </div>

        </div>
        <!-- /.panel-body -->
        <div class="panel-footer">
            <div class="heading-elements">
                <button type="submit" class="btn btn-primary pull-right">UPLOAD</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- /.box -->
@endsection

