@extends('layouts.main')

@section('content')
<div class="site-wrap" style= "width:100%; padding-bottom:20px;"; >

  <main class="myMain" >
    <div class="container-fluid">
      <div class="row justify-content-center">
        
        <div class="col-md-8"  data-aos="fade-right">
     

          <div class="row justify-content-center">
            <div class="col-md-10" style="padding:1%">
              <h3 class="text-white mb-4" style="padding-bottom:5%" style="text-align:center">Contact us</h3>
              

              <div class="row justify-content-center">
              <div class="col-md-12">
           
</div>
                <div class="col-md-12">
                 <form method="post" action="/contact">
                    
                  {{csrf_field() }}  
 
                    <div class="row form-group justify-content-between">
                      <div class="col-5">
                        <label class="text-white" for="fname">First Name</label>
                        <input type="text" name ="fname" id="fname" class="form-control" style="background-color: white; color:black">
                      </div>
                      <div class="col-5">
                        <label class="text-white" for="lname">Last Name</label>
                        <input type="text" name ="lname" id="lname" class="form-control" style="background-color: white; color:black">
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="email">Email</label> 
                        <input type="email" name ="email" id="email" class="form-control" style="background-color: white; color:black">
                      </div>
                    </div>

                    <div class="row form-group mb-5">
                      <div class="col-md-12">
                        <label class="text-white" for="message">Message</label> 
                        <textarea name="message" style="background-color: white; color:black" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                      </div>
                    </div>
                    <div class="row form-group mb-5">

                    <div class="g-recaptcha" data-sitekey="6LcYld4UAAAAAAcXi-dluX8kFRrn2G6P3vLps9Ec"></div>

    </div>

                    <div class="row form-group">
                      <div class="col-md-12" style="text-align:center">
                        <input type="submit" id="sendMessage" value="Send Message" class="btn btn-primary btn-md text-white">
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