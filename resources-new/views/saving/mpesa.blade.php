@extends('layouts.master')
@section('title')
    {{trans_choice('general.saving',2)}} Mpesa Transactions
@endsection
@section('content')
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title">Mpesa Transaction</h6>

        </div>
        <div class="panel-body ">
            <div class="table-responsive">
                <table id="data-table" class="table table-striped table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>Receipt ID</th>
                        <th>Phone Number</th>
                        <th>Full name</th>
                        <th>Account</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Used/Unused</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key)
                        <tr>
                            <td>{{ $key->transaction_id }}</td>
                            <td>{{ $key->phone }}</td>
                            <td>
                                {{ $key->firstname." ".$key->middlename." ".$key->lastname }}
                            </td>
                            <td>{{ $key->account }}</td>
                            <td>ksh. {{number_format($key->amount,2)}}</td>
                            <td>{{ $key->created_at }}</td>
     <td>
    @if($key->used_w==1)
        Already Allocated
        @else
        Not allocated
        @endif
    </td>
                            <td>
                                @if($key->used_w==0)
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            @if(Sentinel::hasAccess('savings.view'))
                                                <li><a href="{{ url('saving/'.$key->id.'/allocate') }}"><i
                                                                class="fa fa-search"></i> Allocate
                                                    </a>
                                                </li>
                                            @endif

                                    </li>
                                </ul>
                                @endif
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
