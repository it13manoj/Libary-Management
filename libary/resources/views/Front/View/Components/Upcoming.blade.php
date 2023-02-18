<section class="blog-style1-area">
    <div class="thm-shape1 float-bob"><img src="assets/images/shape/thm-shape-2.png" alt=""></div>
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <div class="inner">
                    <h3>We Change Your Life &amp; World</h3>
                </div>
                <div class="outer"><img src="assets/images/icon/loveicon.png" alt=""></div>
            </div>
            <h2>Upcomming Events</h2>
        </div>
        <div class="row text-right-rtl">
            <!--Start Single blog Style1-->
            @if(!empty($Event))
            @foreach($Event as $row)
           <!--Start Single Event Style2-->
           <div class="col-xl-4 col-lg-6 col-md-6">
               <div class="single-event-style1 single-event-style2">
                   <div class="single-event-style2_bg"
                       style="background-image: url({{'storage/'.$row->pic}});">
                   </div>
                   <div class="static-content">
                       <div class="date-box">
                           <div class="left">
                               <h2>{{date('d',strtotime($row->Event_Date))}}</h2>
                           </div>
                           <div class="right">
                               <h3>{{date('M',strtotime($row->Event_Date))}}</h3>
                           </div>
                       </div>
                       <div class="meta-info">
                           <p>Organized By: <a href="#">{{$row->Origination->name}}</a></p>
                       </div>
                       <div class="title">
                           <h2><a href="#">{{$row->title}}</a></h2>
                       </div>
                       <div class="inner-text">
                           {!! substr($row->description,0,150)."......."  !!}
                       </div>
                       <div class="border-box"></div>
                       <div class="event-time">
                           <div class="icon">
                               <span class="flaticon-clock"></span>
                           </div>
                           <div class="text">
                               <p>{{date('h:i:A',strtotime($row->Event_Date))}}</p>
                           </div>
                       </div>
                   </div>
                   <div class="overlay-content">
                       <div class="date-box">
                           <div class="left">
                               <h2>{{date('d',strtotime($row->Event_Date))}}</h2>
                           </div>
                           <div class="right">
                               <h3>{{date('M',strtotime($row->Event_Date))}}</h3>
                           </div>
                       </div>
                       <div class="meta-info">
                           <p>Organized By: <a href="#">{{$row->Origination->name}}</a></p>
                       </div>
                       <div class="title">
                           <h2><a href="{{asset('event-details/'.$row->id)}}">{{$row->title}}</a>
                           </h2>
                       </div>
                       <div class="inner-text">
                           {!! substr($row->description,0,150)."......."  !!}
                       </div>
                       <div class="btns-box">
                           <a class="btn-one" href="{{asset('event-details/'.$row->id)}}">
                               <span class="txt"><i class="arrow1 fa fa-check-circle"></i>read more</span>
                           </a>
                       </div>
                   </div>

               </div>
           </div>

               @endforeach
           @endif
            <!--End Single blog Style1-->

        </div>

    </div>
</section>
