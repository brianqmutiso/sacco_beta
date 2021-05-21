@extends('layouts.master')
@section('title')
    {{trans_choice('general.saving',2)}} {{trans_choice('general.transaction',2)}}
@endsection
@section('content')
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title">{{trans_choice('general.saving',2)}} {{trans_choice('general.transaction',2)}}</h6>

            <div class="heading-elements">

            </div>
        </div>
        <div class="panel-body ">
            <div class="table-responsive">
                <table id="data-table" class="table table-striped table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>
                            {{trans_choice('general.id',1)}}
                        </th>
                        <th>
                            {{trans_choice('general.date',1)}}
                        </th>
                        <th>
                            Receipt
                        </th>
                        <th>
                            Member Details
                        </th>
                        <th>
                            Payment Method
                        </th>

                        <th>
                            Amount
                        </th>
                        <th class="text-center">
                            {{trans_choice('general.action',1)}}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key)
                        <tr>
                            <td>{{$key->id}}</td>
                            <td>{{$key->created_at}}</td>
                            <td>{{$key->receipt}}</td>
                            <td>
                                @if(!empty($key->borrower_id))
                                    {{$key->borrower->unique_number." ".$key->borrower->last_name." ".$key->borrower->first_name}}
                                @endif
                            </td>
                            <td>{{$key->pay_method}}</td>

                            <td>{{number_format($key->credit,2)}}</td>


                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"
                                           data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            @if($key->reversed==0)
                                                <li>
                                                    <a href="{{url('saving/savings_transaction/'.$key->id.'/show')}}"><i
                                                                class="fa fa-search"></i> {{ trans_choice('general.view',1) }}
                                                    </a></li>
                                                <li>
                                                    <a href="{{url('saving/savings_transaction/'.$key->id.'/print')}}"
                                                       target="_blank"><i
                                                                class="icon-printer"></i> {{ trans_choice('general.print',1) }} {{trans_choice('general.receipt',1)}}
                                                    </a></li>
                                                <li>
                                                    <a href="{{url('saving/savings_transaction/'.$key->id.'/pdf')}}"
                                                       target="_blank"><i
                                                                class="icon-file-pdf"></i> {{ trans_choice('general.pdf',1) }} {{trans_choice('general.receipt',1)}}
                                                    </a></li>
                                            @endif
                                            @if($key->reversed==0 && $key->reversible==1)
                                              <!--
                                                <li>
                                                    <a href="{{url('saving/savings_transaction/'.$key->id.'/edit')}}"><i
                                                                class="fa fa-edit"></i> {{ trans('general.edit') }}
                                                    </a></li>
                                                <li>
                                                    <a href="{{url('saving/savings_transaction/'.$key->id.'/reverse')}}"
                                                       class="delete"><i
                                                                class="fa fa-minus-circle"></i> {{ trans('general.reverse') }}
                                                    </a></li>
                                                    -->
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.box -->
@endsection
@section('footer-scripts')
    <script>
        $('#data-table').DataTable({
            "order": [[0, "asc"]],
            "columnDefs": [
                {"orderable": false, "targets": [0]}
            ],
            "language": {
                "lengthMenu": "{{ trans('general.lengthMenu') }}",
                "zeroRecords": "{{ trans('general.zeroRecords') }}",
                "info": "{{ trans('general.info') }}",
                "infoEmpty": "{{ trans('general.infoEmpty') }}",
                "search": "{{ trans('general.search') }}",
                "infoFiltered": "{{ trans('general.infoFiltered') }}",
                "paginate": {
                    "first": "{{ trans('general.first') }}",
                    "last": "{{ trans('general.last') }}",
                    "next": "{{ trans('general.next') }}",
                    "previous": "{{ trans('general.previous') }}"
                }
            },
            responsive: false
        });
    </script>
@endsection
