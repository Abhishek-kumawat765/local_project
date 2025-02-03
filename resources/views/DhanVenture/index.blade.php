@extends('common.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between  mb-3">

        <h1>Images DhanVenture</h1>
        <a href="{{ url('viewDhanVenture') }}" class="btn btn-info btn-sm"> <i class="fa fa-eye"> </i> View</a>

    </div>
    <div id="" class="table-responsive">
        <table>
            <thead>
                <tr class="text-center">
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dhanView->chunk(10) as $chunk) <!-- Chunking the images into sets of 10 -->
                    <tr class="text-center">
                        @foreach($chunk as $venture) <!-- Loop through each chunk -->
                            <td>
                                <img src="{{ url('webimage/dhanVenture/' . $venture->photo) }}" alt="Venture Image"
                                    style="width: 100px; height: 40px;">
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection