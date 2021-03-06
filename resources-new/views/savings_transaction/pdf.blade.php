<style>
    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px;
        display: table;
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

    span {
        font-weight: bold;
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

