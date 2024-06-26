@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-header">{{ __('Table Selling') }}</div>
  
                <div class="card-body">
                    <a href="" class="btn btn-sm btn-dark">
                        Add User
                    </a>
                    <table class="table" id="selling">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Costumer</th>
                                <th scope="col">Cashier</th>
                                <th scope="col">Sell Date</th>
                                <th scope="col">Grand Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <?php $no = 0; ?>
                            @foreach($users as $row)
                            <?php $no++ ?>
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->role->role_name}}</td>
                                <td>{{$row->status}}</td>
                                <td>  -->
                                    <a href="" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <form action="" method="POST"
                                    style="display: inline" onsubmit="return confirm('Do you really want to delete {{ $row->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><span class="text-muted">
                                        Delete
                                    </span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    new DataTable('#users');
</script>
@endsection