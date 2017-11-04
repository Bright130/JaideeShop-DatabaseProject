@extends('_headerfooter') 
@section('page_title','Slip Confirmation') 
@section('content')
<!-- body header -->
<div>
    <h1 class="display-4" style="padding-bottom: 2%;
text-align: center;
padding-top: 3%;">Slip Confirmation</h1>
</div>
<!-- //body header -->
<!-- form -->
<form form class="container" id="needs-validation" novalidate style="width:75%; margin:0 auto;" action="/slipform" method="POST">
    {{ csrf_field() }}

    <div class="form-group row">
        <label id="form" for="OrderID" class="col-sm-2 col-form-label">OrderID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="OrderID" placeholder="OrderID" name="OrderID" required>

        </div>
    </div>
    
 
    <div class="form-group row">
        <label id="form" for="AccountNo" class="col-sm-2 col-form-label"> Shop AccountNo.</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="AccountNo" placeholder="AccountNo" name="AccountNo" required>

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="accFrom" class="col-sm-2 col-form-label">From</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="accFrom" placeholder="Transferer name" name="accFrom" required>

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="Amount" class="col-sm-2 col-form-label">Amount money</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Amount" placeholder="Amount" name="Amount" required>

        </div>
    </div>

    <fieldset class="form-group">
        <div class="row">
            <label id="form" class="col-form-legend col-sm-2">Type</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <label id="form" class="form-check-label" style="padding-right: 1rem;">
                        <input class="form-check-input" type="radio" name="Type" id="gridRadios1" value="B"> Bank
                    </label>

                    <label id="form" class="form-check-label" style="padding-right: 1rem;">
                        <input class="form-check-input" type="radio" name="Type" id="gridRadios2" value="A"> ATM
                    </label>

                    <label id="form" class="form-check-label">
                        <input class="form-check-input" type="radio" name="Type" id="gridRadios3" value="O"> Online banking

                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <label id="form" for="slip" class="col-sm-2 col-form-label">Slip time</label>
        <div class="col-sm-10">
            <input type="datetime-local" name="Slip" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <button type="submit" class="btn" style="font-size: 1.2rem;
    width: 100%;
    border-radius: 0px;
    background-color: #fda30e;
    color:white;">Confirm</button>
        </div>
    </div>
</form>
</div>
<!-- //form -->
@stop