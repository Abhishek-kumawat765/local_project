@extends('common.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between  mb-3">
        <h1></h1>
        <a href="{{ url('addDhanVenture') }}" class="btn btn-info btn-sm"> <i class="fa fa-plus"> </i> Add</a>
        <h1>View DhanVenture</h1>
        <a href="{{ url('indexDhanVenture') }}" class="btn btn-info btn-sm"> <i class="fa fa-eye"> </i> View Images</a>

    </div>
    <div id="" class="table-responsive">
        <table class="table table-hover table-responsive table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Date </th>
                    <th>Photo </th>

                    <th>Total Amount</th>

                </tr>
            </thead>
            <tbody>
                @if (!empty($dhanView))
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($dhanView as $venture)
                                    <tr data-id="{{ $venture->id ?? '' }}">

                                        <td>{{ $i++ }}</td>
                                        <td>{{ $venture->date }}</td>
                                        <td>{{ $venture->noteNo }}</td>
                                        <td>{{ $venture->totalAmount }}</td>

                                    </tr>

                                @endforeach
                @endif
            </tbody>

        </table>
    </div>
</div>
@endsection