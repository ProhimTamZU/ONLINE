@extends('mainsite.layouts.starting')
@section('content')
<section id='accmanagement'>
  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 class='text-center acc-title'>Online Personal Account</h3>
        </div>
        <div class="container">
        <div class="row">
            <div class="acc-each col-md-4 pb-3 pr-3 pl-3 pt-3 text-center wow animated zoomIn" >
                <div class="service-item">
                    <img data-toggle="modal" data-target="#prohimMail" src="{{ URL::asset('img/icon_acc/1.png') }}" width="300" alt='search-png'>
                </div>
            </div>
            <div class="acc-each col-md-4 pb-3 pr-3 pl-3 pt-3 text-center wow animated zoomIn" data-wow-delay="0.6s">
                <div class="service-item">
                    <img data-toggle="modal" data-target="#prohimUser" src="{{ URL::asset('img/icon_acc/3.png') }}" width="300" alt='search-png'>
                </div>
            </div>
            <div class="acc-each col-md-4 pb-3 pr-3 pl-3 pt-3 text-center wow animated zoomIn" data-wow-delay="0.9s">
                <div class="service-item">
                    <img data-toggle="modal" data-target="#prohimPrepaid" src="{{ URL::asset('img/icon_acc/4.png') }}" width="300" alt='search-png'>
                </div>
            </div>
        </div>
    </div>
<!-- pop up -->

<div class="modal fade​​ mt-4" id="prohimMail" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title">Online Webmail<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
          <div class='acc-input-inline'>
            <label for="fname" class='label-acc-pop'>Username</label>
            <input type="text" class='form-control input-half-acc' id="fname" name="fname" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class='acc-input-inline'>
            <label for="fname" class='label-acc-pop'>Password</label>
            <input type="text" class='form-control input-half-acc' id="fname" name="fname" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class='input-full'>
          <input type="submit" class='submit-acc' value="LOGIN">
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- end mail -->

<div class="modal fade​​ mt-4" id="prohimUser" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title">User Account Management<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
          <div class='acc-input-inline'>
            <label for="fname" class='label-acc-pop'>Username</label>
            <input type="text" class='form-control input-half-acc' id="fname" name="fname" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class='acc-input-inline'>
            <label for="fname" class='label-acc-pop'>Password</label>
            <input type="text" class='form-control input-half-acc' id="fname" name="fname" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class='input-full'>
          <input type="submit" class='submit-acc' value="LOGIN">
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<!-- end user -->
<div class="modal fade​​ mt-4" id="prohimPrepaid" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title">Prepaid Account Management<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
          <div class='acc-input-inline'>
            <label for="fname" class='label-acc-pop'>Username</label>
            <input type="text" class='form-control input-half-acc' id="fname" name="fname" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class='acc-input-inline'>
            <label for="fname" class='label-acc-pop'>Password</label>
            <input type="text" class='form-control input-half-acc' id="fname" name="fname" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class='input-full'>
          <input type="submit" class='submit-acc' value="LOGIN">
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