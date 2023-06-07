@extends('layouts.user.index')

@section('content')
     <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-6 col-xs-12">
                         <div>
                              <img src="{{ asset('user') }}/images/Chopper1.jpeg" alt="" class="img-responsive wc-image">
                         </div>

                         <br>

                         <div class="row">
                              <div class="col-sm-4 col-xs-6">
                                   <div>
                                        <img src="{{ asset('user') }}/images/Chopper1.jpeg" class="img-responsive wc-image">
                                   </div>

                                   <br>
                              </div>

                              <div class="col-sm-4 col-xs-6">
                                   <div>
                                        <img src="{{ asset('user') }}images/product-2-720x480.jpg" alt="" class="img-responsive">
                                   </div>

                                   <br>
                              </div>

                              <div class="col-sm-4 col-xs-6">
                                   <div>
                                        <img src="images/product-3-720x480.jpg" alt="" class="img-responsive">
                                   </div>

                                   <br>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                         <form action="#" method="post" class="form">
                              <h2>{{ $produk->kategori->kategori }}</h2>
                              <p class="lead"> <strong class="text-primary">Rp.{{ $produk->harga }}</strong></p>
                              <div class="row">
                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span> Type</span>
                                             <br>
                                             <strong>{{ $produk->type }}</strong>
                                        </p>
                                   </div>
                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span> Merk</span>
                                             <br>
                                             <strong> {{ $produk->merk }}</strong>
                                        </p>
                                   </div>
                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Kilometer</span>

                                             <br>

                                             <strong>{{ $produk->km }}</strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Engine size</span>

                                             <br>

                                             <strong>{{ $produk->cc }}cc</strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Warna</span>

                                             <br>

                                             <strong>{{ $produk->warna }}</strong>
                                        </p>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>

               <div class="row">
                    <div class="col-lg-8 col-xs-12">
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h4>Vehicle Description</h4>
                              </div>

                              <div class="panel-body">
                                   <p>{!! $produk->deskripsi !!}</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-4 col-xs-12">
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h4>Contact Details</h4>
                              </div>

                              <div class="panel-body">
                                   <p>
                                        <span>Name</span>

                                        <br>

                                        <strong>{{ $produk->contact->nama }}</strong>
                                   </p>

                                   <p>
                                        <span>Phone</span>

                                        <br>

                                        <strong><a href="tel:123-456-789">123-456-789</a></strong>
                                   </p>


                                   <p>
                                        <span>Mobile phone</span>

                                        <br>

                                        <strong><a href="tel:456789123">456789123</a></strong>
                                   </p>

                                   <p>
                                        <span>Email</span>

                                        <br>

                                        <strong><a href="mailto:john@carsales.com">john@carsales.com</a></strong>
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
@endsection
