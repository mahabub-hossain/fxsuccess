@extends('Admin.master')
@section('content')
<div class="card">
  <div class="card-body">
        <div class="card-title"><i class="zmdi zmdi-account-add"></i> Add Signal Management</div>
            {!!Form::open(['route'=>'fxsignal.store','class'=>'form-horizontal','method' => 'post','enctype'=>'multipart/form-data'])!!}
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="category">Category</label>
                    <select class="select2 select2-hidden-accessible" name="category" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                    @foreach ($Signalcats as $cat)
                            
                       
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                       
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label>Currency Pair</label>
                    <select class="select2 select2-hidden-accessible" name="currency" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                            @foreach ($Currencise as $curre)
                                  <option value="{{$curre->id}}">{{$curre->title}}</option>
                                @endforeach
                                        
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-4">
                    <label for="signal">Signal Type</label><br>
                    <label class="custom-control custom-radio">
                        <input type="radio" name="signal_type" class="custom-control-input buy" value="1" required="" data-label="Buy at">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Buy</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input type="radio" name="signal_type" class="custom-control-input sell" value="2" data-label="Sell at">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Sell</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input type="radio" name="signal_type" class="custom-control-input buy-limit" value="3" data-label="Buy limit at">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Buy Limit</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input type="radio" name="signal_type" class="custom-control-input sell-limit" value="4" data-label="Sell limit at">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Sell Limit</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input type="radio" name="signal_type" class="custom-control-input buy-stop" value="5" data-label="Buy stop at">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Buy Stop</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input type="radio" name="signal_type" class="custom-control-input sell-stop" value="6" data-label="Sell stop at">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Sell Stop</span>
                    </label>
                </div>
                  <div class="col-sm-4">
                        <label for="from">Signal Time</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                            <div class="form-group">
                                <input type="text" class="form-control datetime-picker" name="start_time" placeholder="Pick a date & time">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                            <label for="from">Valid Till</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                <div class="form-group">
                                    <input type="text" name="till" class="form-control datetime-picker" placeholder="Pick a date & time">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>
                        </div>
                                        
            </div>
            <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label>Take Profit</label>
                        <input type="text" class="form-control" step="any" name="take_profit">
                        
                    </div>
                 <div class="form-group col-sm-4 hidecls" id="buysell" style="display:none" >
                    <label for="sell" id="buy_sell_at_lebel">Sell stop at</label>
                    <input type="text" step="any" class="form-control" placeholder="eg: 0.001" name="buy_sell_at" required="">
                </div>
                                        
                <div class="form-group col-sm-4">
                    <label for="stoploss">Stop loss</label>
                    <input type="text" step="any" class="form-control" placeholder="eg: 0.001" name="stop_loss">
                </div>
                
            </div>
            <div class="form-row">
                 <div class="form-group col-sm-4">
                    <label>Image Upload</label>
                    <input type="file" name="image" required>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-outline-success btn-block">Add Signal</button>
            </div>
         {!!Form::close()!!}
    </div>
</div>

<script>
    $('.custom-control-input').on('click',function(){
       $('.hidecls').css('display','block');
        $('#buy_sell_at_lebel').html($(this).data('label'));
    })
</script>
@endsection
