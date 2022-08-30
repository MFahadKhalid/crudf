@extends('layout.scaffold')
@section('content')
    <style>
        .img1{
            background-image: url(assets/img/h1_hero.jpg.webp);
            background-size: 100%;
            position: 50% 50%;
        }
        .img2{
          background-image: linear-gradient(0deg, rgba(31, 43, 123, 0.800), rgba(31, 43, 123, 0.800)), url(assets/img/cv_bg.jpg.webp); 
          background-size: 100%;
          position: 50% 50%;
        }

     /*   .img4{
          background-size: 100%;
          position: 50% 50%;
          height: 100%;
          width: 100%;
        } */
        .img3{
          background-image: url(assets/img/how-applybg.png.webp);
          background-size: 100%;
          position: 50% 50%;
        }
        .img5{
          background-image: url(assets/img/xhome-blog1.jpg.pagespeed.ic.578KBVKBut.webp);
          background-size: 100%;
          background-repeat: no-repeat;
          position: 50% 50%;
          height: 307px;
          width: 100%;
        }
        .img6{
          background-image: url(assets/img/xhome-blog2.jpg.pagespeed.ic.p0P4D5xOm4.webp);
          background-size: 100%;
          background-repeat: no-repeat;
          position: 50% 50%;
          height: 307px;
          width: 100%;
        }

    </style>
</head>
<body>
 
      <div class="img1 mt-5 p-4 container-fluid">
          <div class="container">
             <div class="col-md-6">
                 <h1 class="mt-5 pt-5" style="font-size: 70px; color: #252B60;">Find the most exciting startup jobs</h1>
             </div>
             <div class="col-md-7 mt-5 mb-5">
                <div class="input-group md-3">
                    <input type="text" class="p-4 form-control" placeholder="Job Tittle or Keyword">
              <!--      <select class="form-control p-4 text-danger" name="select" placeholder="Location">
                        <option style="color: #616875;" value="1">Location BD</option>
                        <option style="color: #616875;" value="2">Location PK</option>
                        <option style="color: #616875;" value="3">Location US</option>
                    </select>   -->
                    <select name="select" class="form-control p-4" id="select">
                      <option style="color: #616875;" value="1">Location BD</option>
                      <option style="color: #616875;" value="2">Location PK</option>
                      <option style="color: #616875;" value="3">Location US</option>
                    </select>
                    <div class="input-group-append">
                        <button style="background-color: #FB246A; color: white;" class="btn">Find a Job</button>
                    </div>
                </div>
             </div>
          </div>
      </div>
      <div class="p-5 mt-5 container-fluid">
          <div class="container text-center">
            <p style="color: #FB246A;">FEATURED TOURS PACKAGES</p>
            <h1 style="color: #252B60;">Browse Top Categories</h1>
            <div class="row">
              <div style="border: 1px solid rgb(186, 238, 238);" class="p-3 col-lg-3 mt-5">
                <div class="mt-4">
                  <img src="{{asset('assets/img/f1.PNG')}}" alt="f1" width="26%">
                </div>
                <p>Design & Creative</p>
                <div style="color: #FB246A; margin-bottom: 10px; margin-top: -20px;">
                    <small>(653)</small>
                </div>
              </div>
              <div style="border: 1px solid rgb(186, 238, 238);" class="p-3 col-lg-3 mt-5">
                <div class="mt-4">
                  <img src="{{asset('assets/img/f2.PNG')}}" alt="f2" width="26%">
                </div>
                <p>Design & Development</p>
                <div style="color: #FB246A; margin-bottom: 10px; margin-top: -20px;">
                    <small>(658)</small>
                </div>
              </div>
              <div style="border: 1px solid rgb(186, 238, 238);" class="col-lg-3 p-3 mt-5">
                <div class="mt-4">
                  <img src="{{asset('assets/img/f3.PNG')}}" alt="f3" width="26%">
                </div>
                <p>Sales & Marketing</p>
                <div style="color: #FB246A; margin-bottom: 10px; margin-top: -20px;">
                    <small>(658)</small>
                </div>
              </div>
              <div style="border: 1px solid rgb(186, 238, 238);" class="col-lg-3 p-3 mt-5">
                <div class="mt-4">
                  <img src="{{asset('assets/img/f4.PNG')}}" alt="f4" width="26%">
                </div>
                <p>Mobile Application</p>
                <div style="color: #FB246A; margin-bottom: 10px; margin-top: -20px;">
                    <small>(658)</small>
                </div>
              </div>
              <div style="border: 1px solid rgb(186, 238, 238);" class="col-lg-3 p-3 mt-5">
                <div class="mt-4">
                  <img src="{{asset('assets/img/f5.PNG')}}" alt="f5" width="26%">
                </div>
                <p>Construction</p>
                <div style="color: #FB246A; margin-bottom: 10px; margin-top: -20px;">
                    <small>(658)</small>
                </div>
              </div>
              <div style="border: 1px solid rgb(186, 238, 238);" class="col-lg-3 p-3 mt-5">
                <div class="mt-4">
                  <img src="{{asset('assets/img/f6.PNG')}}" alt="f6" width="26%">
                </div>
                <p>Information Technology</p>
                <div style="color: #FB246A; margin-bottom: 10px; margin-top: -20px;">
                    <small>(658)</small>
                </div>
              </div>
              <div style="border: 1px solid rgb(186, 238, 238);" class="col-lg-3 p-3 mt-5">
                <div class="mt-4">
                  <img src="{{asset('assets/img/f7.PNG')}}" alt="f7" width="26%">
                </div>
                <p>Real Estate</p>
                <div style="color: #FB246A; margin-bottom: 10px; margin-top: -20px;">
                    <small>(658)</small>
                </div>
              </div>
              <div style="border: 1px solid rgb(186, 238, 238);" class="col-lg-3 p-3 mt-5">
                <div class="mt-4">
                  <img src="{{asset('assets/img/f8.PNG')}}" alt="f8" width="26%">
                </div>
                <p>Content Writer</p>
                <div style="color: #FB246A; margin-bottom: 10px; margin-top: -20px;">
                    <small>(658)</small>
                </div>
              </div>
            </div>
            <div>
              <button style="margin-bottom: 100px; background-color: #8B92DD; color: white;" class="p-3 mt-5 btn">BROWESE ALL SECTORS</button>
            </div>
          </div>
      </div>
      <div class="img2 contianer-fluid">
        <div class="text-light p-5 container text-center">
           <p class="mt-5">FEATURED TOURS PACKAGES</p>
           <h1>Make a Difference with Your Online Resume!</h1>
           <button style="background-color: #8B92DD; color: white;" class="btn p-2 pl-4 pr-4 mt-3">UPLOAD YOUR CV</button>
        </div>
      </div>
      <div class="container-fluid">
        <div class="p-5 container">
          <p style="color: #FB246A; margin-top: 100px;" class="text-center">RECENT JOB</p>
          <h1 style="color: #28395A;" class="text-center">Featured Jobs</h1>
          <div class="row">
            <div style="border: 1px solid rgb(186, 238, 238); height: 200px;" class="mt-5 shadow-lg p-3 col-md-5 ml-5">
              <img src="{{asset('assets/img/xjob-list1.png.pagespeed.ic.p3hyNUVcAd.webp')}}" alt="xjob-list1.png.pagespeed.ic.p3hyNUVcAd">
              <div style="margin-left: 110px; margin-top: -80px;">
                <h4 style="color: #28395A;">Digital Marketer</h4>
                <small class="text-secondary">Creative Agency</small>
                <img class="ml-3" src="{{asset('assets/img/location.PNG')}}" alt="location">
                <small class="text-secondary">Athens, Greece</small>
                <small class="ml-3 text-secondary">$3500 - $4000</small>
                <div class="mt-3">
                  <button class="btn btn-outline-primary btn-sm">Full Time</button>
                  <p class="text-secondary mt-2">7 hours</p>
                </div>
              </div>
            </div>
            <div style="border: 1px solid rgb(186, 238, 238); height: 200px;" class="mt-5 shadow-lg p-3 col-md-5 ml-5">
              <img src="{{asset('assets/img/xjob-list2.png.pagespeed.ic.o2vQRssuVw.webp')}}" alt="xjob-list2.png.pagespeed.ic.o2vQRssuVw">
              <div style="margin-left: 110px; margin-top: -80px;">
                <h4 style="color: #28395A;">Digital Marketer</h4>
                <small class="text-secondary">Creative Agency</small>
                <img class="ml-3" src="{{asset('assets/img/location.PNG')}}" alt="location">
                <small class="text-secondary">Athens, Greece</small>
                <small class="ml-3 text-secondary">$3500 - $4000</small>
                <div class="mt-3">
                  <button class="btn btn-outline-primary btn-sm">Full Time</button>
                  <p class="text-secondary mt-2">7 hours</p>
                </div>
              </div>
            </div>
            <div style="border: 1px solid rgb(186, 238, 238); height: 200px;" class="mt-5 shadow-lg p-3 col-md-5 ml-5">
              <img src="{{asset('assets/img/xjob-list3.png.pagespeed.ic.rdNmI_gHs4.webp')}}" alt="xjob-list3.png.pagespeed.ic.rdNmI_gHs4">
              <div style="margin-left: 110px; margin-top: -80px;">
                <h4 style="color: #28395A;">Digital Marketer</h4>
                <small class="text-secondary">Creative Agency</small>
                <img class="ml-3" src="{{asset('assets/img/location.PNG')}}" alt="location">
                <small class="text-secondary">Athens, Greece</small>
                <small class="ml-3 text-secondary">$3500 - $4000</small>
                <div class="mt-3">
                  <button class="btn btn-outline-primary btn-sm">Full Time</button>
                  <p class="text-secondary mt-2">7 hours</p>
                </div>
              </div>
            </div>
            <div style="border: 1px solid rgb(186, 238, 238); height: 200px;" class="mt-5 shadow-lg p-3 col-md-5 ml-5">
              <img src="{{asset('assets/img/xjob-list4.png.pagespeed.ic.CAXzN3Wmd3.webp')}}" alt="xjob-list4.png.pagespeed.ic.CAXzN3Wmd3">
              <div style="margin-left: 110px; margin-top: -80px;">
                <h4 style="color: #28395A;">Digital Marketer</h4>
                <small class="text-secondary">Creative Agency</small>
                <img class="ml-3" src="{{asset('assets/img/location.PNG')}}" alt="location">
                <small class="text-secondary">Athens, Greece</small>
                <small class="ml-3 text-secondary">$3500 - $4000</small>
                <div class="mt-3">
                  <button class="btn btn-outline-primary btn-sm">Full Time</button>
                  <p class="text-secondary mt-2">7 hours</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="img3 p-5 container-fluid">
        <div class="container">
          <p style="color: #FB246A; text-align: center; margin-top: 80px;">APPLY PROCESS</p>
          <h1 class="text-center text-light">How it works</h1>
          <div class="row">
            <div style="background-color: #26317f;" class="ml-5 mt-5 col-md-3 text-center text-light p-4">
              <img src="{{asset('assets/img/f9.PNG')}}" alt="f9">
              <h3>1. Search a job</h3>
              <p style="color: #A5AACA; font-size: 15px;" class="mt-3">Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
            </div>
            <div style="background-color: #26317f;" class="ml-5 mt-5 col-md-3 text-center text-light p-4">
              <img src="{{asset('assets/img/f10.PNG')}}" alt="f10">
              <h3>2. Apply a job</h3>
              <p style="color: #A5AACA; font-size: 15px;" class="mt-3">Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
            </div>
            <div style="background-color: #26317f;" class="ml-5 mt-5 col-md-3 text-center text-light p-4">
              <img src="{{asset('assets/img/f11.PNG')}}" alt="f11">
              <h3>3. Get your job</h3>
              <p style="color: #A5AACA; font-size: 15px;" class="mt-3">Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-light p-5 container-fluid">
        <div class="container">
            <div style="margin-top: 130px;" class="p-5 text-center">
                <img src="{{asset('assets/img/xtestimonial-founder.png.pagespeed.ic.Dybm75Jife.webp')}}" alt="xtestimonial-founder.png.pagespeed.ic.Dybm75Jife"><br>
                <i style="color: #28395A;">Margest Lawson</i><br>
                <small class="text-secondary">Creative Director</small><br><br>
                <i class="text-secondary">“I am at an age where I just want to be fit and healthy our bodies are <br> our responsibility! So start caring for your body and it will care for you. <br> Eat clean it will care for you and workout hard.”</i>
              </div>
        </div>
    </div>
    <div class="bg-light p-5 container-fluid">
        <div class="container">
            <div class="mt-5">
                <div class="row">
                  <div class="col-md-4 mt-5 ml-5">
                    <p style="color: #FB246A;">WHAT WE ARE DOING</p>
                    <h1 style="color: #26317f;">24k Talented people are getting Jobs</h1>
                    <b>Mollit anim laborum duis au dolor in voluptate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</b><br><br>
                    <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p><br><br>
                    <button style="background-color: #FB246A; color: white;" class="btn pl-5 pr-5">POST A JOB</button>
                  </div>
                  <div class="col-md-6 mt-5 ml-5">
                    <div class="img4">
                      <img src="{{asset('assets/img/xsupport-img.jpg.pagespeed.ic.Dd13qF001n.webp')}}" alt="xsupport-img.jpg.pagespeed.ic.Dd13qF001n" width="100%">
                    </div>
                   <!-- <img src="assets/" alt="xsupport-img.jpg.pagespeed.ic.Dd13qF001n" width="100%" height="80%">  -->
                <!--    <div style="background-color: #26317f; width: 40%; margin-top: -100px; margin-left: -50px;" class="p-3 text-center text-light">
                      <p>Since</p>
                      <h1 style="font-size: 50px;">1994</h1>
                    </div>  -->
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="bg-light p-5 mb-5 container-fluid">
        <div class="container">
          <div class="text-center">
              <p style="text-align: center; color: #FB246A; margin-top: 200px;">OUR LATEST BLOG</p>
              <h1 style="color: #252B60;">Our recent news</h1>
          </div>
              <div class="row">
                <div style="background-color: white;" class="mt-5 col-md-6">
                  <div class="img5"></div>
                  <div class="p-3" style="width: 20%; height: 19%; text-align: center; margin-top: -90px; background-color: #FF2424; color: white;">
                    <p>24</p>
                    <h5>NOW</h5>
                  </div>
                  <div class="ml-5">
                    <p class="mt-3 text-secondary">/ Properties</p>
                    <h4 style="color: #252B60;">Footprints in Time is perfect House in Kurashiki</h4>
                    <p class="text-secondary">READ MORE -></p>
                  </div>
                </div>
                <div style="background-color: white;" class="mt-5 col-md-6">
                  <div class="img6"></div>
                  <div class="p-3" style="width: 20%; height: 19%; text-align: center; margin-top: -90px; background-color: #FF2424; color: white;">
                    <p>24</p>
                    <h5>NOW</h5>
                  </div>
                  <div class="ml-5">
                    <p class="mt-3 text-secondary">/ Properties</p>
                    <h4 style="color: #252B60;">Footprints in Time is perfect House in Kurashiki</h4>
                    <p class="text-secondary">READ MORE -></p>
                  </div>
                </div>
              </div>
          </div>
        </div>
        
        <a href="#" style="background-color: #FB246A; color: white; width: 50px;" class="mb-3 btn ml-5 back-to-top fixed-bottom"><i class="fa fa-upload"></i></a>
@endsection