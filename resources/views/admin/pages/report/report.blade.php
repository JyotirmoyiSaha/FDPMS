@extends('master')
@section('content')

<div class="heading">
    <h2>Report</h2>
</div>

<br>
<br>
<form action="{{route('admin.report')}}" method="GET">
    <div class="row d-flex justify-content-around">
        <div class="col-md-4">
            <label for="">From Date</label>
            <input value="" type="date" placeholder="Search" name="from_date" class="form-control">
        </div>

        <div class="col-md-4">
            <label for="">To Date</label>
            <input value="" type="date" placeholder="Search" name="to_date" class="form-control">
        </div>

        <div class="col-md-2">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
</form>
<br>
<div id="reportPrint">
    <table id="customers">
        <thead>
            <tr>
                <th>ID</th>
                <th>Requisition ID</th>
                <th>Product Name</th>
                <th>Product Quantity</th>
                <th>Product Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($report as $key=>$reports)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$reports->requisition_id}}</td>
                <td>{{$reports->product->product_name}}</td>
                <td>{{$reports->product_quantity}}</td>
                <td>{{$reports->product_price}}</td>
                <td>{{$reports->subtotal}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




<button type="button" class="btn btn-light" href="" onClick="PrintDiv('reportPrint');" value="Print"><svg
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
        <path fill="none" d="M0 0h24v24H0z" />
        <path
            d="M6 19H3a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-3v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm0-2v-1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1h2V9H4v8h2zM8 4v3h8V4H8zm0 13v3h8v-3H8zm-3-7h3v2H5v-2z" />
    </svg></button>

{{-- print --}}
<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>


@endsection
