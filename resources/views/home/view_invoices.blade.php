@extends('layouts.master')

@section('content')


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Invoice</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                
                <div class="invoice p-3 mb-3">

                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <i class="fas fa-globe"></i> Alliance, Inc.
                                <small class="float-right">Date: 1/1/2022</small>
                            </h4>
                        </div>

                    </div>

                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            From
                            <address>
                                <strong>Alliance, Inc.</strong><br>
                                Upanga, Exim Tower<br>
                                Dar es salaam, 94107<br>
                                Phone: +255 784 124 124<br>
                                Email: gm@alliance.co.tz.com
                            </address>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            To
                            <address>
                                <strong>Kevin P.</strong><br>
                                Masaki, Moroco Rd<br>
                                Dar es salaam,  974507<br>
                                Phone: +255 624 876 000<br>
                                Email: kevin@gmail.com
                            </address>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            <b>Invoice #007612</b><br>
                            <br>
                            <b>Order ID:</b> 4F3S8J<br>
                            <b>Payment Due:</b> 07/07/2022<br>
                            <b>Account:</b> 968-34567
                            <b>Bank:</b> Barclays
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Serial #</th>
                                    <th>Vehicle</th>
                                    <th>Year</th>
                                    <th>Description</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                <tr>
                                    <td>247-925-726</td>
                                    <td>Prado TX</td>
                                    <td>2018</td>
                                    <td>Engine, tyres, seat good condition</td>
                                    <td> 30,000,000.00 TZS</td>
                                </tr>
                                <tr>
                                    <td>735-845-642</td>
                                    <td>Suzuki</td>
                                    <td>2012</td>
                                    <td>Engine is ok</td>
                                    <td>800,000.00 TZS</td>
                                </tr>
                                
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-6">
                            <p class="lead">Payment Methods:</p>
                            <img src=" /img/visa.png" alt="Visa">
                            <img src=" /img/mastercard.png" alt="Mastercard">
                            <img src=" /img/american-express.png" alt="American Express">
                            <img src=" /img/paypal2.png" alt="Paypal">
                            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                               
                            </p>
                        </div>

                        <div class="col-6">
                            <p class="lead">Amount Due 7/22/2022</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody><tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>38,000,000.00 TZS</td>
                                    </tr>
                                    <tr>
                                        <th>Tax (9.3%)</th>
                                        <td>3,534,000.00 TZS</td>
                                    </tr>
                                    <tr>
                                        <th>Transportation:</th>
                                        <td>500,000.00 TZS</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>42,034,000.00 TZS</td>
                                    </tr>
                                    </tbody></table>
                            </div>
                        </div>

                    </div>


                    <div class="row no-print">
                        <div class="col-12">
                            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                Payment
                            </button>
                            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fas fa-download"></i> Generate PDF
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




@endsection
