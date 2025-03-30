@extends('template.main')

@section('title', 'Categories List')

@section('content')

    <title>Inventory</title>

    <style>
        .outer-container {
            padding: 100px;
            background-color: lightgray;
        }

        .inner-container {
            display: flex;
            gap: 20px;
        }

        .box {
            width: 45%;
            padding: 20px;
            background-color: lightblue;
            border: 1px solid #ccc;
        }
    </style>
    
    <div class="container-xxl rounded-3 mt-2" style="background-color: white; height: 35vh;  ">

        <div class="col-4 text-left ms-5" style="height: 200px; width: 28;>
        <div class = "card-header fs-3
            custom-margin-top">
            <br><br><br><br>

            <p> home / inventory
            <p>
            <h1> INVENTORY LIST <h1>
                    <div class = "btn btn-dark"> Add Inventory </div>


        </div>
    </div>

    <div class="container-xxl  ps-5 rounded-3 mt-2" style="width: 50; background-color: white; height: 85vh;  ">
        <table class="table">
            <br><br>
            <thead>
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Qty</th>
                    <th scope="col"> Price </th>
                    <th scope="col"> Action </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Perfume</td>
                    <td>Cloud by AG</td>
                    <td>20</td>
                    <td>80000</td>
                    <td>
                        <div class = "btn btn-light"> Edit </div>
                        <div class = "btn btn-dark"> Delete </div>
                    </td>

                </tr>
                <tr>
                    <td>Serum</td>
                    <td>Dreamglow Highlight</td>
                    <td>15</td>
                    <td>16500</td>
                    <td>
                        <div class = "btn btn-light"> Edit </div>
                        <div class = "btn btn-dark"> Delete </div>
                    </td>

                </tr>

            </tbody>
        </table>

    </div>
    </div>
    </div>

    </div>
@endsection
