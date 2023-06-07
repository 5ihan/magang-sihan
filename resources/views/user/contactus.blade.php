@extends('layouts.user.index')

@section('content')
     <!-- CONTACT -->
     <section id="contact" style="background-color:#f8f8f8;">
        <div class="container">
             <div class="text-center">
                  <h1>Contact Us</h1>
             </div>
        </div>
          <div class="container">
               <div class="row">
                    <div class="col-12 col-md-3"></div>
                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required>
                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required>
                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>

                         </form>
                    </div>
               </div>
          </div>
     </section>
     @endsection
