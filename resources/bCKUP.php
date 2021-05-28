   <div class="container-fluid">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="content-group">
                                        
                                    <h5 class="text-semibold no-margin">Interest and Insurance</h5>
                                    <span> ksh. {{number_format(App\Models\LoanSchedule::sum('interest'))}}</span>
                                    

                                    
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="content-group">
                                        <h5 class="text-semibold no-margin">Other Fees</h5>
                                    <span>ksh. {{number_format(App\Models\OtherIncome::sum('amount'))}}</span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="content-group">
                                        <h5 class="text-semibold no-margin">Gross profit</h5>
                                    <span>ksh. {{number_format(intval(App\Models\OtherIncome::sum('amount'))+intval(App\Models\LoanSchedule::sum('interest')))}}</span>
                                    </div>
                                </div>

                            </div>
                        </div>