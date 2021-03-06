<style>
    thead {
        display: table-header-group;
    }

    .table {
        border-collapse: collapse !important;
    }

    .table td,
    .table th {
        background-color: #fff !important;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #ddd !important;
    }

    th {
        text-align: left;
    }

    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px;
    }

    .table > thead > tr > th,
    .table > tbody > tr > th,
    .table > tfoot > tr > th,
    .table > thead > tr > td,
    .table > tbody > tr > td,
    .table > tfoot > tr > td {
        padding: 8px;
        line-height: 1.42857143;
        vertical-align: top;
        border-top: 1px solid #ddd;
    }

    .table > thead > tr > th {
        vertical-align: bottom;
        border-bottom: 2px solid #ddd;
    }

    .table > caption + thead > tr:first-child > th,
    .table > colgroup + thead > tr:first-child > th,
    .table > thead:first-child > tr:first-child > th,
    .table > caption + thead > tr:first-child > td,
    .table > colgroup + thead > tr:first-child > td,
    .table > thead:first-child > tr:first-child > td {
        border-top: 0;
    }

    .table > tbody + tbody {
        border-top: 2px solid #ddd;
    }

    .table .table {
        background-color: #fff;
    }

    .table-condensed > thead > tr > th,
    .table-condensed > tbody > tr > th,
    .table-condensed > tfoot > tr > th,
    .table-condensed > thead > tr > td,
    .table-condensed > tbody > tr > td,
    .table-condensed > tfoot > tr > td {
        padding: 5px;
    }

    .table-bordered {
        border: 1px solid #ddd;
    }

    .table-bordered > thead > tr > th,
    .table-bordered > tbody > tr > th,
    .table-bordered > tfoot > tr > th,
    .table-bordered > thead > tr > td,
    .table-bordered > tbody > tr > td,
    .table-bordered > tfoot > tr > td {
        border: 1px solid #ddd;
    }

    .table-bordered > thead > tr > th,
    .table-bordered > thead > tr > td {
        border-bottom-width: 2px;
    }

    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }

    .table-hover > tbody > tr:hover {
        background-color: #f5f5f5;
    }

    table col[class*="col-"] {
        position: static;
        display: table-column;
        float: none;
    }

    table td[class*="col-"],
    table th[class*="col-"] {
        position: static;
        display: table-cell;
        float: none;
    }

    .table > thead > tr > td.active,
    .table > tbody > tr > td.active,
    .table > tfoot > tr > td.active,
    .table > thead > tr > th.active,
    .table > tbody > tr > th.active,
    .table > tfoot > tr > th.active,
    .table > thead > tr.active > td,
    .table > tbody > tr.active > td,
    .table > tfoot > tr.active > td,
    .table > thead > tr.active > th,
    .table > tbody > tr.active > th,
    .table > tfoot > tr.active > th {
        background-color: #f5f5f5;
    }

    .table-hover > tbody > tr > td.active:hover,
    .table-hover > tbody > tr > th.active:hover,
    .table-hover > tbody > tr.active:hover > td,
    .table-hover > tbody > tr:hover > .active,
    .table-hover > tbody > tr.active:hover > th {
        background-color: #e8e8e8;
    }

    .table > thead > tr > td.success,
    .table > tbody > tr > td.success,
    .table > tfoot > tr > td.success,
    .table > thead > tr > th.success,
    .table > tbody > tr > th.success,
    .table > tfoot > tr > th.success,
    .table > thead > tr.success > td,
    .table > tbody > tr.success > td,
    .table > tfoot > tr.success > td,
    .table > thead > tr.success > th,
    .table > tbody > tr.success > th,
    .table > tfoot > tr.success > th {
        background-color: #dff0d8;
    }

    .table-hover > tbody > tr > td.success:hover,
    .table-hover > tbody > tr > th.success:hover,
    .table-hover > tbody > tr.success:hover > td,
    .table-hover > tbody > tr:hover > .success,
    .table-hover > tbody > tr.success:hover > th {
        background-color: #d0e9c6;
    }

    .table > thead > tr > td.info,
    .table > tbody > tr > td.info,
    .table > tfoot > tr > td.info,
    .table > thead > tr > th.info,
    .table > tbody > tr > th.info,
    .table > tfoot > tr > th.info,
    .table > thead > tr.info > td,
    .table > tbody > tr.info > td,
    .table > tfoot > tr.info > td,
    .table > thead > tr.info > th,
    .table > tbody > tr.info > th,
    .table > tfoot > tr.info > th {
        background-color: #d9edf7;
    }

    .table-hover > tbody > tr > td.info:hover,
    .table-hover > tbody > tr > th.info:hover,
    .table-hover > tbody > tr.info:hover > td,
    .table-hover > tbody > tr:hover > .info,
    .table-hover > tbody > tr.info:hover > th {
        background-color: #c4e3f3;
    }

    .table > thead > tr > td.warning,
    .table > tbody > tr > td.warning,
    .table > tfoot > tr > td.warning,
    .table > thead > tr > th.warning,
    .table > tbody > tr > th.warning,
    .table > tfoot > tr > th.warning,
    .table > thead > tr.warning > td,
    .table > tbody > tr.warning > td,
    .table > tfoot > tr.warning > td,
    .table > thead > tr.warning > th,
    .table > tbody > tr.warning > th,
    .table > tfoot > tr.warning > th {
        background-color: #fcf8e3;
    }

    .table-hover > tbody > tr > td.warning:hover,
    .table-hover > tbody > tr > th.warning:hover,
    .table-hover > tbody > tr.warning:hover > td,
    .table-hover > tbody > tr:hover > .warning,
    .table-hover > tbody > tr.warning:hover > th {
        background-color: #faf2cc;
    }

    .table > thead > tr > td.danger,
    .table > tbody > tr > td.danger,
    .table > tfoot > tr > td.danger,
    .table > thead > tr > th.danger,
    .table > tbody > tr > th.danger,
    .table > tfoot > tr > th.danger,
    .table > thead > tr.danger > td,
    .table > tbody > tr.danger > td,
    .table > tfoot > tr.danger > td,
    .table > thead > tr.danger > th,
    .table > tbody > tr.danger > th,
    .table > tfoot > tr.danger > th {
        background-color: #f2dede;
    }

    .table-hover > tbody > tr > td.danger:hover,
    .table-hover > tbody > tr > th.danger:hover,
    .table-hover > tbody > tr.danger:hover > td,
    .table-hover > tbody > tr:hover > .danger,
    .table-hover > tbody > tr.danger:hover > th {
        background-color: #ebcccc;
    }

    .table-responsive {
        min-height: .01%;
        overflow-x: auto;
    }

    .row {
        margin-right: -15px;
        margin-left: -15px;
        clear: both;
    }

    .col-md-6 {
        width: 50%;
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    }

    tbody:before, tbody:after {
        display: none;
    }

    .text-left {
        text-align: left;
    }

    .text-right {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    .text-justify {
        text-align: justify;
    }

    .pull-right {
        float: right !important;
    }
</style>


<div>
    <div>
<table width="100%">
    <tr>
        <td width="70%">
        @if(!empty(\App\Models\Setting::where('setting_key','company_logo')->first()->setting_value))
            <img src="{{ url(asset('uploads/'.\App\Models\Setting::where('setting_key','company_logo')->first()->setting_value)) }}"
                 class="img-responsive" width="150"/>

        @endif
        </td>
    <td>
        <span>
        <div class="text-right">
             <h3 ><b>{{\App\Models\Setting::where('setting_key','company_name')->first()->setting_value}}</b>

    </h3>
            <br>{{\App\Models\Setting::where('setting_key','company_address')->first()->setting_value}}</br>
        </div>
        </span>

    </td>
    </tr>
</table>

    </div>


    <h3 class="text-center"><b> Payment Receipt</b></h3>

    <div style="margin-top:30px;margin-left: auto;margin-right: auto;text-transform: capitalize;font-size: 8px; clear: both; border-top:solid thin #ccc">
        <table class="table">
            <tr>
                <td><h2><span>{{trans_choice('general.borrower',1)}}</span></h2></td>
                <td class="text-right"><h2>{{$savings_transaction->borrower->title}}
                        {{$savings_transaction->borrower->first_name}} {{$savings_transaction->borrower->last_name}}</h2>
                </td>
            </tr>
            <tr>
                <td><h2><span>Receipt #</span></h2></td>
                <td class="text-right"><h2>{{$savings_transaction->savings->id}}</h2></td>
            </tr>
            <tr>
                <td><h2><span>Payment Method</span></h2>
                </td>
                <td class="text-right">
                 <!--   <h2>
                        @if($savings_transaction->type=='deposit')
                            {{trans_choice('general.deposit',1)}}
                        @endif
                        @if($savings_transaction->type=='withdrawal')
                            {{trans_choice('general.withdrawal',1)}}
                        @endif
                        @if($savings_transaction->type=='bank_fees')
                            {{trans_choice('general.charge',1)}}
                        @endif
                        @if($savings_transaction->type=='interest')
                            {{trans_choice('general.interest',1)}}
                        @endif
                        @if($savings_transaction->type=='dividend')
                            {{trans_choice('general.dividend',1)}}
                        @endif
                        @if($savings_transaction->type=='transfer')
                            {{trans_choice('general.transfer',1)}}
                        @endif
                        @if($savings_transaction->type=='transfer_fund')
                            {{trans_choice('general.transfer',1)}}
                        @endif
                        @if($savings_transaction->type=='transfer_loan')
                            {{trans_choice('general.transfer',1)}}
                        @endif
                        @if($savings_transaction->type=='guarantee')
                            {{trans_choice('general.on',1)}} {{trans_choice('general.hold',1)}}
                        @endif
                        @if($savings_transaction->reversed==1)
                            @if($savings_transaction->reversal_type=="user")
                                <span class="text-danger"><b>({{trans_choice('general.user',1)}} {{trans_choice('general.reversed',1)}}
                                        )</b></span>
                            @endif
                            @if($savings_transaction->reversal_type=="system")
                                <span class="text-danger"><b>({{trans_choice('general.system',1)}} {{trans_choice('general.reversed',1)}}
                                        )</b></span>
                            @endif
                        @endif

                    </h2>
                    -->
                     <h2>
                         @if(!empty($savings_transaction->pay_method))

                         {{$savings_transaction->pay_method}}
                      @else
                         Cooperative Bank
                         @endif
                     </h2>
                </td>
            </tr>
            <tr>
                <td><h2><span> {{trans_choice('general.date',1)}}:</span></h2></td>
                <td class="text-right"><h2>{{$savings_transaction->date}} {{$savings_transaction->time}}</h2></td>
            </tr>
            <tr>
                <td><h2><span>{{trans_choice('general.amount',1)}}</span></h2></td>
                <td class="text-right">
                    <h2>
                        @if($savings_transaction->credit>$savings_transaction->debit)
                            {{number_format($savings_transaction->credit,2)}}
                        @else
                            {{number_format($savings_transaction->debit,2)}}
                        @endif
                    </h2>
                </td>
            </tr>
            <tr>
                <td><h2><span>Reference Code</span></h2></td>
                <td class="text-right"><h2>{{$savings_transaction->receipt}}</h2></td>
            </tr>
            <tr>
                <td><h2><span>Total Deposit</span></h2></td>
                <td class="text-right">
                    <h2>{{number_format(\App\Helpers\GeneralHelper::savings_account_balance($savings_transaction->borrower_id),2)}}</h2>
                </td>
            </tr>
        </table>
        <p></p>
        <hr>
    </div>
</div>

<script>
    window.onload = function () {
        window.print();
    }
</script>