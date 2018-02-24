@extends('mainsite.layouts.starting')
@section('content')
<section id='paybill'>
  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 class='text-center color-dblue paybill-title'>You can pay bill with</h3>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class='paybill-partner'>
                    <div class='paybill-content'>
                        <a href="https://www.maybank2u.com.kh/" target='_blank'><img src="{{ URL::asset('img/icon_acc/maybank.png') }}" height="120" width="120" alt='search-png'></a>
                        <div class='paybill-info-left'>
                            <p>Bank Name:</p>
                            <p>Account Name:</p>
                            <p>Account Number:</p>
                        </div>
                        <div class='paybill-info-right'>
                            <p>May Bank</p>
                            <p>Cogetel Limited</p>
                            <p>001-02-000990-01</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class='paybill-partner'>
                    <div class='paybill-content'>
                        <a href="https://www.acledabank.com.kh/" target='_blank'><img src="{{ URL::asset('img/icon_acc/aceleda.png') }}" height="120" width="120" alt='search-png'></a>
                        <div class='paybill-info-left'>
                            <p>Bank Name:</p>
                            <p>Account Name:</p>
                            <p>Account Number:</p>
                        </div>
                        <div class='paybill-info-right'>
                            <p>Acleda Bank</p>
                            <p>Cogetel Limited</p>
                            <p>1800-10-367878-1-8</p>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class='paybill-partner'>
                    <div class='paybill-content'>
                        <a href="https://online.ftbbank.com/ibanking/" target='_blank'><img src="{{ URL::asset('img/icon_acc/ftb.png') }}" height="120" width="120" alt='search-png'></a>
                        <div class='paybill-info-left'>
                            <p>Bank Name:</p>
                            <p>Account Name:</p>
                            <p>Account Number:</p>
                        </div>
                        <div class='paybill-info-right'>
                            <p>FTB Bank</p>
                            <p>Cogetel Limited</p>
                            <p>010-30-062-001771-0</p>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class='paybill-partner'>
                    <div class='paybill-content'>
                        <a href="https://www.ababank.com/km/" target='_blank'><img src="{{ URL::asset('img/icon_acc/aba.png') }}" height="120" width="120" alt='search-png'></a>
                        <div class='paybill-info-left'>
                            <p>Bank Name:</p>
                            <p>Account Name:</p>
                            <p>Account Number:</p>
                        </div>
                        <div class='paybill-info-right'>
                            <p>ABA Bank</p>
                            <p>Cogetel Limited</p>
                            <p>100-000-074-919</p>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class='paybill-partner'>
                    <div class='paybill-content'>
                        <a href="https://paygo.com.kh/" target='_blank'><img src="{{ URL::asset('img/icon_acc/payandgo.png') }}" height="120" width="120" alt='search-png'></a>
                        <div class='paybill-info-left text-center mt-10'>
                            <a href="https://www.paygo24.com/payment/limit/44">www.paygo24.com/payment/limit/44</a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
@stop

@section('script')
@stop