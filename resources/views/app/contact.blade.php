@extends('layouts.main')

@section('content')
<div class="site-wrap" style= "width:100%; padding-bottom:20px;"; >

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <main class="myMain" >
    <div class="container-fluid">
      <div class="row justify-content-center">
        
        <div class="col-md-8 pt-4"  data-aos="fade-right">
     

          <div class="row justify-content-center">
            <div class="col-md-10" style="padding:5%">
              <h3 class="text-white mb-4" style="padding-bottom:5%" style="text-align:center">Contact us</h3>
              

              <div class="row justify-content-center">
                <div class="col-md-12">

                  

                  <form action="#">
                    
                    

                    <div class="row form-group justify-content-between">
                      <div class="col-5">
                        <label class="text-white" for="fname">First Name</label>
                        <input type="text" id="fname" class="form-control" style="background-color: white; color:black">
                      </div>
                      <div class="col-5">
                        <label class="text-white" for="lname">Last Name</label>
                        <input type="text" id="lname" class="form-control" style="background-color: white; color:black">
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="email">Email</label> 
                        <input type="email" id="email" class="form-control" style="background-color: white; color:black">
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="subject">Subject</label> 
                        <input type="subject" id="subject" class="form-control" style="background-color: white; color:black">
                      </div>
                    </div>

                    <div class="row form-group mb-5">
                      <div class="col-md-12">
                        <label class="text-white" for="message">Message</label> 
                        <textarea name="message" style="background-color: white; color:black" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12" style="text-align:center">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                      </div>
                    </div>

        
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

</div>
@endsection