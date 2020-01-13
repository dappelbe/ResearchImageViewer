@extends('layouts.admin')

@section('content')
<div class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="card bg-gradient-primary">
                <div class="callout callout-info" style="background-color: white" >
                    <h3>Study Dashboard</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            &#160;
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="card bg-gradient-primary">
                <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                    <div>
                        <div class="text-value-lg">9.823</div>
                        <div>Members online</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
@section('scripts')
@parent

@endsection