@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.css" integrity="sha512-LKG0Zi6duJ5mwncLtQVchN0iF8fWmcxApuX9pqGq7ITgwQDWR9EqZFsrV9TXfE9pPRa1J6GVnsBl7gKxAyllaA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-12 col-12" align="left">
		    	<h2 class="page-title">Withdraws ( {{$withdraws->count()}} )</h2>
	    	</div>
	    </div>
	</div>
	@if($withdraws->count())
		<div class="row mt-4">
			@include('layouts.backend.partial.alert')
			<table id="example" class="display" style="width:100%">
			    <thead>
			        <tr>
			            <th>Tutor Name</th>
			            <th>Withdraw Amount</th>
			            <th>Transaction Id</th>
			            <th>Status</th>
			        </tr>
			    </thead>
			    <tfoot>
			        <tr>
                        <th>Tutor Name</th>
                        <th>Withdraw Amount</th>
                        <th>Transaction Id</th>
                        <th>Status</th>
			        </tr>
			    </tfoot>
			</table>
		</div>
	@else
        <div>
            No withdrawal request found.
        </div>
	@endif
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
var Json = {!!$withdrawJSON!!};

function changeStatus(id,status) {
    $('form#change-status-form').attr('action', `{{url('admin/withdraw/change/status')}}/${id}`);
    $('#change_status').val(status);
    $('#change_status_modal').modal('show');
}

function statusSubmitForm() {
    $('#change-status-form').submit();
}

$(document).ready(function () {
    $('#example').dataTable({
        data: Json,
        columns: [
            { data: 'user.full_name'},
            { 
                data: 'withdraw_amount',
                "render": function (row) {
                    return `$${row}`;
                }
          	},
            { data: 'transaction_id'},
            {
                data: null,
                render: function(data, type, row, meta) {
                	if(data['status'] == 0){
                    	return '<span class="btn btn-secondary py-1">Pending</span>';
                    }else if(data['status'] == 1){
                    	return '<span class="btn btn-warning py-1">Processing</span>';
                    }else if(data['status'] == 2){
                    	return '<span class="btn btn-success py-1">Successful</span>';
                    }else if(data['status'] == 3){
                    	return '<span class="btn btn-danger py-1">Failed</span>';
                    }else{
                    	return '';
                    }
                }
            },
        ]
    });
});
</script>
@endsection