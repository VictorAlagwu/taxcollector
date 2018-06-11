@extends('layouts.theme')
@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Credit Card</strong>
            </div>
            <div class="card-body">
              <!-- Credit Card -->
              <div id="pay-invoice">
                  <div class="card-body">
                      <div class="card-title">
                          <h3 class="text-center">Pay Invoice</h3>
                      </div>
                      <hr>
                      <form action="" method="post" novalidate="novalidate">
                          <div class="form-group text-center">
                              <ul class="list-inline">
                                  <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                              </ul>
                          </div>
                          <div class="form-group">
                              <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                              <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                          </div>
                          <div class="form-group has-success">
                              <label for="cc-name" class="control-label mb-1">Name on card</label>
                              <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                              <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                          </div>
                          <div class="form-group">
                              <label for="cc-number" class="control-label mb-1">Card number</label>
                              <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                              <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                          </div>
                          <div class="row">
                              <div class="col-6">
                                  <div class="form-group">
                                      <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                      <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp">
                                      <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                  </div>
                              </div>
                              <div class="col-6">
                                  <label for="x_card_code" class="control-label mb-1">Security code</label>
                                  <div class="input-group">
                                      <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                      <div class="input-group-addon">
                                          <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                          data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                          data-trigger="hover"></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div>
                              <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                  <i class="fa fa-lock fa-lg"></i>&nbsp;
                                  <span id="payment-button-amount">Pay ₦{{number_format($transaction->taxable/$transaction->user->occupation->taxrate)}}.00</span>
                                  <span id="payment-button-sending" style="display:none;">Sending…</span>
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
        
            </div>
        </div> <!-- .card -->
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">

    </div>
</div>

@endsection