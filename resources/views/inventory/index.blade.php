@extends('navbar')  <!-- Extending the navbar layout -->

@section('title', 'Inventory Page')  <!-- Set the page title -->

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <button class="btn btn-add">Add Inventory</button>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            <tr>
                                <td>Computer</td>
                                <td>Lenovo</td>
                                <td>80</td>
                                <td>50,000</td>
                                <td>
                                    <button class="btn btn-edit">Edit</button>
                                    <button class="btn btn-delete">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
       </div>
    </div>
@endsection
