@extends('layouts.master')

@section('warnahome', 'active')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <img src="{{ url('gambar/logo.jpeg', []) }}" alt="">
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h3>
                        VISI DAN MISI
                    </h3>
                </div>
                <div class="card-body">
                    <h4>VISI</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quaerat ex sed saepe ad sunt et molestiae dolorum quam nihil culpa blanditiis optio officia ullam sapiente, dolore praesentium natus quisquam.
                    </p>
                    <br>
                    <h4>MISI</h4>
                    <ul>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa non, perferendis quos impedit natus sapiente itaque ea odit harum eveniet cum dolor, debitis a corporis hic assumenda molestias veritatis quis.
                        </li>

                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa non, perferendis quos impedit natus sapiente itaque ea odit harum eveniet cum dolor, debitis a corporis hic assumenda molestias veritatis quis.
                        </li>

                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa non, perferendis quos impedit natus sapiente itaque ea odit harum eveniet cum dolor, debitis a corporis hic assumenda molestias veritatis quis.
                        </li>

                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa non, perferendis quos impedit natus sapiente itaque ea odit harum eveniet cum dolor, debitis a corporis hic assumenda molestias veritatis quis.
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
