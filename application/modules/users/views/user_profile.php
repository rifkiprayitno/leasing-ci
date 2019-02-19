<!-- <style type="text/css">
    :root {
    --white: #ffffff;
    --black: #000000;
    --blue:#0288d1;
    --gray:#ebebeb;
    --box-shadow1:0px 0px 18px 2px rgba(10, 55, 90, 0.15);
}
body{
    font-family: 'Roboto', sans-serif;
    font-weight: lighter;
    color: #637280;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
}
:focus{
    outline: 0px solid transparent !important;
}
.timeline {
    padding: 50px 0;
    position: relative;
}
.timeline-nodes {
        padding-bottom: 25px;
        position: relative;
    }
.timeline-nodes:nth-child(even) {
    flex-direction: row-reverse;
}
.timeline h3, .timeline p {
    padding: 5px 15px;
} 
.timeline h3{
    font-weight: lighter;
    background: var(--blue);
}
.timeline p, .timeline time {
    color: var(--blue)
}
.timeline::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 50%;
    width: 0;
    border-left: 2px dashed var(--blue);
    height: 100%;
    z-index: 1;
    transform: translateX(-50%);
}
.timeline-content {
    border: 1px solid var(--blue);
    position: relative;
    border-radius: 0 0 10px 10px;
    box-shadow: 0px 3px 25px 0px rgba(10, 55, 90, 0.2)
}
.timeline-nodes:nth-child(odd) h3,
.timeline-nodes:nth-child(odd) p {
    text-align: right;
}
.timeline-nodes:nth-child(odd) .timeline-date {
    text-align: left;
}
 
.timeline-nodes:nth-child(even) .timeline-date {
    text-align: right;
}
.timeline-nodes:nth-child(odd) .timeline-content::after {
    content: "";
    position: absolute;
    top: 5%;
    left: 100%;
    width: 0;
    border-left: 10px solid var(--blue);
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
}
.timeline-nodes:nth-child(even) .timeline-content::after {
    content: "";
    position: absolute;
    top: 5%;
    right: 100%;
    width: 0;
    border-right: 10px solid var(--blue);
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
}
.timeline-image {
    position: relative;
    z-index: 100;
}
.timeline-image::before {
    content: "";
    width: 80px;
    height: 80px;
    border: 2px dashed var(--blue);
    border-radius: 50%;
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: #fff;
    z-index: 1;
    

}
.timeline-image img {
    position: relative;
    z-index: 100;
}
/*small device style*/

@media (max-width: 767px) {
    .timeline-nodes:nth-child(odd) h3,
    .timeline-nodes:nth-child(odd) p {
    text-align: left
}
.timeline-nodes:nth-child(even) {
    flex-direction: row;
}
    .timeline::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 4%;
    width: 0;
    border-left: 2px dashed var(--blue);
    height: 100%;
    z-index: 1;
    transform: translateX(-50%);
}
.timeline h3 {
    font-size: 1.7rem;
}
.timeline p {
    font-size: 14px;
}
.timeline-image {
    position: absolute;
    left: 0%;
    top: 60px;
    /*transform: translateX(-50%;);*/
}
.timeline-nodes:nth-child(odd) .timeline-content::after {
    content: "";
    position: absolute;
    top: 5%;
    left: auto;
    right: 100%;
    width: 0;
    border-left: 0;
    border-right: 10px solid var(--blue);
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
}
.timeline-nodes:nth-child(even) .timeline-content::after {
    content: "";
    position: absolute;
    top: 5%;
    right: 100%;
    width: 0;
    border-right: 10px solid var(--blue);
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
}
.timeline-nodes:nth-child(even) .timeline-date {
    text-align: left;
}
.timeline-image::before {
    width: 65px;
    height: 65px;
}
}

/*extra small device style */
@media (max-width: 575px) {
    .timeline::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 3%;
}
.timeline-image {
    position: absolute;
    left: -5%;
    }
.timeline-image::before {
    width: 60px;
    height: 60px;
}
}
</style> -->

<style type="text/css">
    ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 9px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 30px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 1px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
.timeline-content {
    border: 1px solid var(--blue);
    position: relative;
    border-radius: 0 0 10px 10px;
    box-shadow: 0px 3px 25px 0px rgba(10, 55, 90, 0.2)
}
</style>
<div class="content">
<div class="animated fadeIn">
<div class="row">
	
	<!-- Column -->
                    <div class="col-md-4">
                        <aside class="profile-nav alt">
                            <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:100px; height:100px;" alt="" src="<?php echo base_url('new_images/admin.jpg'); ?>">
                                        </a>
                                        <div class="media-body">
                                            <h2 class="text-light display-6">Jim Doe</h2>
                                            <p>Project Manager</p>
                                            <p><i class="fa fa-map-marker"></i> California, United States</p>
                                        </div>

                                    </div>
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-handshake-o"></i> Aplikasi <span class="badge badge-primary pull-right">10</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-money"></i> Angsuran <span class="badge badge-danger pull-right">15</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-bell-o"></i> Tunggakan <span class="badge badge-success pull-right">11</span></a>
                                    </li>                                    
                                </ul>

                            </section>
                        </aside>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Timeline</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="col-md-6 offset-md-3">
                                        <h4>Latest News</h4>
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-content" margin="3px">
                                                <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                                                <a href="#" class="float-right">21 March, 2014</a>
                                                <hr>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                                                </div>
                                            </li>
                                            <li ><div class="timeline-content" >
                                                <a href="#" >21 000 Job Seekers</a>
                                                <a href="#" class="float-right">4 March, 2014</a>
                                                <hr>
                                                <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                                                </div>
                                            </li>
                                            <li >
                                                <div class="timeline-content">
                                                <a href="#">Awesome Employers</a>
                                                <a href="#" class="float-right">1 April, 2014</a>
                                                <hr>
                                                <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">John Deo</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">Zebra Theme@gmail.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>
                                        <h4 class="font-medium m-t-30">Skill Set</h4>
                                        <hr>
                                        <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="John Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="Zebra Theme@gmail.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                                                    <option>London</option>
                                                                                    <option>India</option>
                                                                                    <option>Usa</option>
                                                                                    <option>Canada</option>
                                                                                    <option>Thailand</option>
                                                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    <!-- <div class="col-lg-12">
        <div class="timeline">
        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Timeline Heading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eaque amet deleniti hic quas qui cumque delectus aliquid, eius quia quod, quae, aliquam aspernatur facilis. Minima quod corporis dignissimos porro.</p>
          </div>
          <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="img/img13.png" class="img-fluid" alt="img">
          </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time>2018-02-23</time>
          </div>
        </div>
        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Timeline Heading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eaque amet deleniti hic quas qui cumque delectus aliquid, eius quia quod, quae, aliquam aspernatur facilis. Minima quod corporis dignissimos porro.</p>
          </div>
          <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="img/img13.png" class="img-fluid" alt="img">
          </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time>2018-02-23</time>
          </div>
        </div>
        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Timeline Heading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eaque amet deleniti hic quas qui cumque delectus aliquid, eius quia quod, quae, aliquam aspernatur facilis. Minima quod corporis dignissimos porro.</p>
          </div>
          <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="img/img13.png" class="img-fluid" alt="img">
          </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time>2018-02-23</time>
          </div>
        </div>
        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Timeline Heading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eaque amet deleniti hic quas qui cumque delectus aliquid, eius quia quod, quae, aliquam aspernatur facilis. Minima quod corporis dignissimos porro.</p>
          </div>
          <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="img/img13.png" class="img-fluid" alt="img">
          </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time>2018-02-23</time>
          </div>
        </div>
      </div>
    </div> -->

    <?php
    /*$tampil =array(
        array('Imagen'=>'asdas', 'Categoria'=>'asdfga'), 
        array('Imagen'=>'asdas', 'Categoria'=>'asdfga'), 
        array('Imagen'=>'asdas', 'Categoria'=>'asdfga'),
        array('Imagen'=>'asdas', 'Categoria'=>'asdfga'),
        array('Imagen'=>'asdas', 'Categoria'=>'asdfga')
    ); 
         foreach ($tampil as $row)  {
          $imagen = $row["Imagen"];
          $categoria = $row["Categoria"];
          echo '
            <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Profile Card</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="'.base_url('new_images/admin.jpg').'" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> California, United States</div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                                    <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                                    <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                                    <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

          ';
        }*/
     ?>


</div><!-- .row -->
</div><!-- .content -->
</div><!-- .animated -->



 <script src="js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="js/lib/form-validation/jquery.validate.unobtrusive.min.js"></script>
    <script src="js/lib/jquery.nicescroll/jquery.nicescroll.min.js"></script>

     <script>
          $(function(){
            $("html").niceScroll({
                cursorcolor:"#16385d",
                cursorwidth:"5px",
                background:"#fff",
                cursorborder:"1px solid #5c4ac7",
                cursorborderradius:0
                });  // a world f
          });
      </script>