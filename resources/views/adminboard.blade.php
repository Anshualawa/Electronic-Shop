@extends('customComponent.header')

@push('title')
    <title> All Product </title>
@endpush

@include('customComponent.nav-bar')



<div class="container">
    <div class="row ">
        <div class="col-6  P-1">
            <h2>Product Detail</h2>
        </div>
        <div class="col-6 d-inline-block ">
            <a href=""><button class="btn btn-primary  m-2 float-end">Add</button></a>
            <a href=""><button class="btn btn-danger  m-2 float-end">Trash</button></a>
        </div>
    </div>
    <div class="shadow border table-responsive rounded">
        <table class="table  table-hover table-secondary table-responsive">
            <thead>
                <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">State</th>
                    <th scope="col">Country</th>
                    <th scope="col">Status</th>
                    <th class="text-center" scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody><?php $i = 0; ?>
                @foreach ($product as $item)
                    <tr>
                        <td>{{ $i + 1 }}</td><?php $i += 1; ?>
                        <td scope="row">202315{{ $item->customer_id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->dob }}</td>
                        <td>
                            @if ($item->gender == 'M')
                                Male
                            @elseif($item->gender == 'F')
                                Female
                            @elseif($item->gender == 'O')
                                Other
                            @endif

                        </td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->state }}</td>
                        <td>{{ $item->country }}</td>
                        <td>
                            @if ($item->status == '1')
                                <span class="badge text-success"> Active </span>
                            @else
                                <span class="badge text-danger">Inactive</span>
                            @endif

                        </td>
                        <td><a href="{{ route('customer.edit', ['id' => $item->customer_id]) }}"><button
                                    class="btn btn-success">Edit</button></a></td>
                        <td><a href="{{ route('customer.delete', ['id' => $item->customer_id]) }}"><button
                                    class="btn btn-warning">Trash</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>



@include('customComponent.footer')
