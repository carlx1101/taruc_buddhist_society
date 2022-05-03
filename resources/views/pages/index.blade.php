@extends('layouts.app')

@section('content')

<div class="container" >

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ asset('images/picture1.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        

      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">关于拉曼大学学院佛学会</h1>
        <p class="lead">我們是拉曼大學學院佛學會的佛教青年！
          拉曼佛學會成立於1976/77年，是校內活躍的團體之一，至今已來到了43屆理事會。
          佛學會以弘揚佛法為己任，在多姿多彩又繁重的大專院校裡，以多元化的方式：佛學班、佛曲、團康等等接引無數的大專生學佛，找到生命裡的方向與信仰。
          佛學會的傳承，少不了理事與大眾的努力與參與；歡迎你加入我們，為弘揚佛法而努力！</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">了解更多</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" >

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

     <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">加入成为我们的一分子吧 !！</h1>
        <p class="lead">拉曼大学学院佛学会即将要44岁了！你们对我们的学会是不是还很陌生呢？不知道我们的佛学会到底是在做什么的？我们佛学会除了会举办每周佛学班以外，其实我们也还会有一些其他类型的活动，例如：一日游，生活营，义卖会，音乐会，迎新会等等。想要为自己的大学生涯增添一些美好回忆的你还在等什么？还不赶快加入我们！让我们在这学佛的路上可以一起自利利他吧，用生命影响生命，接引更多的大学生加入我们一起学佛。</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 ">加入我们</button>
        </div>
      </div>  
      
      
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ asset('images/image2.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">

      </div>
    </div>
  </div>




<div class="row container">

  
 <section class="team text-center py-5">
   <div class="container">
     <div class="header my-1">
       <h1>我们的团队 </h1>
       <p class="text-muted">同心才能走得更远，同德才能走得更近</p><br><br>
     </div>
     <div class="row">

     <div class="col-md-6 col-lg-1">
         <!-- <div class="img-block mb-5">
           <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
           <div class="content mt-2">
             <h4>Zain Knob</h4>
             <p class="text-muted">Mechanical Engineer</p>
           </div>
         </div> -->
       </div>

       <div class="col-md-6 col-lg-2">
         <div class="img-block mb-5">
         <img src="{{ asset('images/commitee/hongsem.jpg') }}" class="img-fluid  img-thumbnail rounded-circle" style = "height:130px !important; width:160px !important;" alt="image1">
           <div class="content mt-2">
             <h4>Cham Hong Sheng</h4>
             <p class="text-muted">Secretary </p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-2 ">
         <div class="img-block mb-5">
           <img src="{{ asset('images/commitee/erjia.jpg') }}" class="img-fluid  img-thumbnail rounded-circle" style = "height:130px !important; width:160px !important;" alt="image1">
           <div class="content mt-2">
             <h4>Low Er Jia</h4>
             <p class="text-muted"> Vice President</p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-2">
         <div class="img-block mb-5">
         <img src="{{ asset('images/commitee/yy.jpeg') }}" class="img-fluid  img-thumbnail rounded-circle" style = "height:130px !important; width:160px !important;" alt="image1">
           <div class="content mt-2">
             <h4>Phwah You Yang</h4>
             <p class="text-muted">President</p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-2">
         <div class="img-block mb-5">
         <img src="{{ asset('images/commitee/alan.jpg') }}" class="img-fluid  img-thumbnail rounded-circle" style = "height:130px !important; width:160px !important;" alt="image1">
           <div class="content mt-2">
             <h4>Low Siew Loon</h4>
             <p class="text-muted">Vice President</p>
           </div>
         </div>
       </div>

       <div class="col-md-6 col-lg-2">
         <div class="img-block mb-5">
         <img src="{{ asset('images/commitee/weikent.jpeg') }}" class="img-fluid  img-thumbnail rounded-circle" style = "height:130px !important; width:160px !important;" alt="image1">
           <div class="content mt-2">
             <h4>Loh Wee Kent</h4>
             <p class="text-muted"></p>
           </div>
         </div>
       </div>

       <div class="col-md-6 col-lg-1">

       </div>
     </div>
     
   </div>
 </section>

<div class="row">
    
</div>

 <!-- credits: https://bootstrapcrew.com/snippets/team-members/ -->
    </div>
</div>


<div class="container" >

  <div class="container col-xxl-8 px-4 py-2">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
   <iframe
                                    src="https://maps.google.it/maps?q=taruckl&output=embed" width="600" height="500" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
        

      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-4 ">联系我们 </h1>
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">电子邮件</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">我们不会与其他人分享您的电子邮件。</div>
          </div>
      
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">问题</label>
            <input type="email" class="form-control" id="exampleInputEmail1" style = "height:130px;" aria-describedby="emailHelp">
          </div>
      
        </form>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2"> 发送
          </button>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection
