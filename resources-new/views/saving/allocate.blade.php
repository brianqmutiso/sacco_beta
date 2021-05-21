@extends('layouts.master')
@section('title')
    {{trans_choice('general.add',1)}} {{trans_choice('general.saving',2)}} {{trans_choice('general.transaction',1)}}
@endsection
@section('content')
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title">{{trans_choice('general.add',1)}} {{trans_choice('general.saving',2)}} {{trans_choice('general.transaction',1)}}</h6>

            <div class="heading-elements">

            </div>
        </div>
        {!! Form::open(array('url' => url('saving/allocate_store'), 'method' => 'post', 'id' => 'transaction_form', 'class' => 'form-horizontal')) !!}
        <input type="hidden" name="mpesa_id" value="{{$mpesa_id}}">
        <div class="panel-body">
            <div class="form-group">
                {!! Form::label('id',trans_choice('general.borrower',1).' '.trans_choice('general.id',1),array('class'=>'col-sm-3  control-label')) !!}
                <div class="col-sm-5">
                {!! Form::select('borrower_id',$borrowers,null, array('class' => 'select2 form-control','required'=>'required')) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('type',trans_choice('general.type',1),array('class'=>'col-sm-3 control-label')) !!}
                <div class="col-sm-5">
                    {!! Form::select('type',array('savings'=>"Savings",'registration'=>"Registration",'repayment'=>"Repayment"),null, array('class' => 'form-control','required'=>'required','id'=>'type')) !!}
                </div>
            </div>
              <div class="form-group">
                    {!! Form::label('type',"Loan ID",array('class'=>'col-sm-3 control-label')) !!}
                  <div class="col-sm-5">
                     
                        {!! Form::text('loan_id',null, array('class' => 'form-control', null)) !!}
                        </div>
                    </div>


        </div>
        <!-- /.panel-body -->
        <div class="panel-footer">
            <div class="heading-elements">
                <button type="submit" class="btn btn-primary pull-right" id="submit_transaction">{{trans_choice('general.save',1)}}</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- /.box -->
@endsection
@section('footer-scripts')
    <script>
        $("#transaction_form").validate({
            rules: {
                field: {
                    required: true,
                    number: true
                }
            }
        });
    </script>
@endsection

