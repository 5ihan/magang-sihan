@extends('layouts.user.index')

@section('content')
    <section class="section-background">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-xs-12">
                    <div class="form">
                        <form action="#">
                            <div class="form-group">
                                <label>Used/New:</label>

                                <select class="form-control">
                                    <option value="">All</option>
                                    <option value="new">New vehicle</option>
                                    <option value="used">Used vehicle</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Vehicle Type:</label>

                                <select class="form-control">
                                    <option value="">--All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Make:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Model:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Price:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Mileage:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Engine size:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Power:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Fuel:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Gearbox:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Doors:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Number of seats:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <button type="submit" class="section-btn btn btn-primary btn-block">Search</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-9 col-xs-12">
                    <div class="row">
                        @foreach ($produk as $item)
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="courses-thumb courses-thumb-secondary">
                                    <div class="courses-top">
                                        <div class="courses-image">
                                            <img src="{{ asset('user') }}/images/{{ $item->foto }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                            <span title="Author"><i class="fa fa-dashboard"></i>10.000 KM</span>
                                            <span title="Author"><i class="fa fa-cube"></i> 250cc</span>
                                            <span title="Views"><i class="fa fa-cog"></i> Skinny</span>
                                        </div>
                                    </div>
                                    <div class="courses-detail">
                                        <h3><a href="{{ route('user.details', $item->id) }}">{{ $item->nama }}</a></h3>

                                        <p class="lead"><small><del> </del></small> <strong></strong></p>
                                      
                                    </div>
                                    <div class="courses-info">
                                        <a href="{{ route('user.details', $item->id) }}" class="section-btn btn btn-primary btn-block">View More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                </div>

                <div class="modal-body">
                    <form action="#" id="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Pick-up location" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Return location" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Pick-up date/time" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Return date/time" required>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter full name" required>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter email address" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter phone" required>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="section-btn btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>
@endsection
