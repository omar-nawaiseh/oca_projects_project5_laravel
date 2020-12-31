@extends('layouts.inner')

@section('main')
  


    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Creating a new account</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="" method="post" data-toggle="validator">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="name" placeholder="Your Name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="email" name="email" placeholder="Your Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="phone" placeholder="Phone" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="password" name="Password" placeholder="password" data-error="password is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                         <select class="custom-select form-group" id="inputGroupSelect01">
                                           <option selected>City</option>
                                           <option value="1">Irbid</option>
                                           <option value="2">Ajloun</option>
                                           <option value="3">Jerash</option>
                                           <option value="4">Mafraq</option>
                                           <option value="5">Balqa</option>
                                           <option value="6">Amman</option>
                                           <option value="7">Zarqa</option>
                                           <option value="8">Madaba</option>
                                           <option value="9">Karak</option>
                                           <option value="10">Tafilah</option>
                                           <option value="11">Ma'an</option>
                                           <option value="12">Aqaba</option>
                                         </select>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        
                                        <div class="input-group ">
                                         
                                         <select class="custom-select form-group" id="inputGroupSelect01">
                                           <option selected>services</option>
                                           <option value="1">Childcare</option>
                                           <option value="2">Health Care For The Elderly</option>
                                           <option value="3">House Cleaning</option>
                                         </select>
                                        </div>
                                        
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        
                                        <div class="input-group ">
                                         
                                         <select class="custom-select form-group" id="inputGroupSelect01">
                                           <option selected>Your subscription</option>
                                           <option value="1">3 months</option>
                                           <option value="2">6 months</option>
                                           <option value="3">12 months</option>
                                         </select>
                                        </div>
                                        
                                    </div> <!-- single form -->
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        
                                    <div class="input-group mb-3">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02">Your image</label>
                                    </div>
                                    
                                    </div>
                                        
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea placeholder="Description" name="message" data-error="Please, leave us your dscription." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" class="main-btn">Creat</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>

    <!--====== CONTACT PART ENDS ====== -->


@endsection