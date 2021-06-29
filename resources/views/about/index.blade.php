@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card">
                    {{--          <img class="card-img-top" src="holder.js/100px80" alt="Card image cap">--}}
                    <div class="card-body">
                        <h4 class="card-title">About Pottorff</h4>
                        <div class="card-text">
                            <div>Founded in 1928 as a sales organization focused on HVAC contractors in Southern
                                California, Pottorff's shift to manufacturing in 1971 remains anchored by a desire to
                                deliver quality products, on time, at competitive prices.
                            </div>

                            <div>Shipping from two factories, our dependable service is backed by an industry leading
                                5-year product warranty, exceptional Quick Ship capabilities and an experienced staff
                                and versatile product line. We adhere and exceed the most stringent codes set forth by
                                industry organizations and enjoy a strong partnership with the Sheet Metal Workers
                                International Union.
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-heading"><h4>Services Offered</h4></li>
                        <li class="list-group-item">Air Control and Backdraft Dampers</li>
                        <li class="list-group-item">UL Rated Fire, Smoke and Ceiling Radiation Dampers</li>
                        <li class="list-group-item">Steel and Extruded Louvers and Penthouses</li>
                        <li class="list-group-item">Actuators and Accessories</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <img src="{{url('images/map-blue.png')}}" alt="Map" class="float-right" />
                <div>We sell our products across the United States from two manufacturing facilities located in
                    Montebello, California, Fort Worth, Texas and Brooklin, New York through local representatives.
                </div>

                <div class="mt-3">We are committed to helping our clients succeed by offering product training at our
                    corporate office in Fort Worth, Texas.
                </div>

                <div class="mt-3">In order to streamline our product development efforts, Pottorff features in-house
                    testing with our state-of-the-art Louver and Elevated Temperature laboratories. These labs guarantee
                    precision and allow Pottorff to quickly respond to new industry requirements.
                </div>

                <div class="mt-3">To further enhance the services available to our clients, Pottorff offers Revit 3-D
                    files for our product line.
                </div>
            </div>
        </div>
    </div>
@endsection
