<style>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

#footer {
  background-color: #ff7412;
  padding-top: 150px;
}

.block-inner img {
  max-width: 170px;
  display: block;
  margin-bottom: 40px;
}
.block-inner p {
  color: #ff7412;
  line-height: 22px;
  margin-bottom: 25px;
}
.block-inner a {
  text-transform: uppercase;
  font-family: "Oswald";
  color: #ff7412;
  position: relative;
  -moz-transition-property: all;
  -o-transition-property: all;
  -webkit-transition-property: all;
  transition-property: all;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  position: relative;
}
.block-inner a:before {
  content: "";
  position: absolute;
  right: -15px;
  top: 50%;
  margin-top: -3px;
  width: 6px;
  height: 6px;
  background-color: #ff7412;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
}
.block-inner a:after {
  content: "";
  position: absolute;
  left: 100%;
  top: 50%;
  width: 0;
  margin-left: 18px;
  margin-top: -1px;
  height: 2px;
  background-color: #cf9b67;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -moz-transition-property: all;
  -o-transition-property: all;
  -webkit-transition-property: all;
  transition-property: all;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.block-inner a:hover:after {
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
  width: 29px;
}
.block-inner a:hover:before {
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
}

.opening-time p {
  color: #999999;
  margin-bottom: 17px;
}
.opening-time p span {
  color: #cf9b67;
  text-transform: uppercase;
}

.item-tweet {
  overflow: hidden;
  margin-bottom: 20px;
}
.item-tweet:last-child {
  margin-bottom: 0;
}
.item-tweet > i {
  float: left;
  width: 10%;
  color: #cf9b67;
  font-size: 18px;
  margin-top: 2px;
}
.item-tweet > div {
  float: right;
  width: 88%;
}
.item-tweet > div p {
  color: #999999;
  line-height: 22px;
  margin-bottom: 5px;
}
.item-tweet > div p a {
  color: #999999;
  -moz-transition-property: all;
  -o-transition-property: all;
  -webkit-transition-property: all;
  transition-property: all;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.item-tweet > div p a:hover {
  color: #cf9b67;
}
.item-tweet > div span {
  color: #cf9b67;
}

.instagram a {
  float: left;
  margin: 0 1% 1% 0;
  width: 32.66%;
  position: relative;
}
.instagram a:hover:after {
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
}
.instagram a:hover i {
  display: block;
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
}
.instagram a:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: rgba(207, 155, 103, 0.85);
  z-index: 2;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -moz-transition-property: all;
  -o-transition-property: all;
  -webkit-transition-property: all;
  transition-property: all;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.instagram a i {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  z-index: 3;
  text-align: center;
  color: #fff;
  font-size: 24px;
  line-height: 91px;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -moz-transition-property: all;
  -o-transition-property: all;
  -webkit-transition-property: all;
  transition-property: all;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.instagram a img {
  width: 100%;
}
.instagram a:nth-child(3n+1) {
  margin: 0 0 1%;
}

.foot-title {
  display: block;
  font-size: 22px;
  line-height: 22px;
  color: #fff;
  font-family: "Oswald";
  position: relative;
  padding-bottom: 30px;
  margin-bottom: 30px;
  letter-spacing: 1px;
}
.foot-title:before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -1px;
  width: 6px;
  height: 6px;
  background-color: #cf9b67;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
}
.foot-title:after {
  content: "";
  position: absolute;
  left: 13px;
  bottom: 1px;
  width: 29px;
  height: 2px;
  background-color: #cf9b67;
}

.footer-copyright {
  padding: 25px 0;
  margin-top: 100px;
  position: relative;
  background: #171717;
}
.footer-copyright p {
  text-align: center;
  color: #999999;
}
.footer-copyright a {
  position: absolute;
  top: -30px;
  right: 30px;
  display: block;
  width: 60px;
  height: 60px;
  background: #cf9b67;
  text-indent: -200px;
  overflow: hidden;
  -moz-border-radius: 60px;
  -webkit-border-radius: 60px;
  border-radius: 60px;
  -moz-transition-property: all;
  -o-transition-property: all;
  -webkit-transition-property: all;
  transition-property: all;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.footer-copyright a:after, .footer-copyright a:before {
  content: "";
  display: block;
  background: #fff;
  width: 10px;
  height: 3px;
  position: absolute;
  left: 50%;
  top: 50%;
  margin: -1.5px 0 0 -3px;
  -moz-transition-property: all;
  -o-transition-property: all;
  -webkit-transition-property: all;
  transition-property: all;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.footer-copyright a:after {
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  left: 24px;
}
.footer-copyright a:before {
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.footer-copyright a:hover {
  background: #fff;
}
.footer-copyright a:hover:after, .footer-copyright a:hover:before {
  background: #cf9b67;
}
</style>
<footer id="footer" class="bg-dark">
     <div class="container">
       <div class="row">
         <div class="col-sm-6 col-md-3 mt-5">
           <div class="block-inner">
           <b><p style="color:white">Restaur<span style="color:#ff7412">ant</span>.</p></b>
             <p>
               Lorem sit amet, ectetr iscinit. Vestibulum vel sum er, suscipieros quis by lorem.<br><br>
               Sed ventis nisl a auris laoreet, at ncidnt lectus volutpat. Etiam...
             </p>
           </div>
         </div>
         <div class="col-sm-6 col-md-3 mt-5">
           <div class="opening-time">
             <span class="foot-title">Opening Hours</span>
             <p><span>MONDAY :</span> Closed</p>
             <p><span>TUE - FRI : </span>................. 10 am - 9 pm</p>
             <p><span>SATURDAY : </span>.............. 10 am - 11 pm</p>
             <p><span>Sunday  : </span>.................. 10 am - 12 pm</p>
           </div>
         </div>
         <div class="col-md-3 mt-5 hidden-sm hidden-xs">
           <div class="last-tweet">
             <span class="foot-title">Latest Tweets</span>
             <div class="item-tweet">
               <i class="fa fa-twitter"></i>
               <div>
                 <p>Sed ventis nisl a au at ncidnt ctus volutpat.
                 </p>
                 <span>
                   2 Hours ago
                 </span>
               </div>
             </div>
             <div class="item-tweet">
               <i class="fa fa-twitter"></i>
               <div>
                 <p>Sed ventis nisl a au at ncidnt ctus volutpat.
                 </p>
                 <span>
                   2 Hours ago
                 </span>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-3 hidden-sm mt-5 hidden-xs">
           <div class="instagram">
             <span class="foot-title">Menu</span>
             <?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
             <a href="<?php echo e(route('blog.show',$post->id)); ?>">
               <img src="<?php echo e(asset('storage/blog/'.$post->image)); ?>" alt="">
             </a>
             <!-- <a href="">
             <img src="http://127.0.0.1/laravel-app/img/mn2.jpeg"  alt="">
               <i class="fa fa-search"></i>
             </a>
             <a href="">
             <img src="http://127.0.0.1/laravel-app/img/mn3.jpeg"  alt="">
               <i class="fa fa-search"></i>
             </a>
             <a href="">
             <img src="http://127.0.0.1/laravel-app/img/mn4.jpeg"  alt="">
               <i class="fa fa-search"></i>
             </a> -->
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
           </div>
         </div>
       </div>
     </div>
     <div class="footer-copyright">
       <p>
         Copyright 2023 @Achmad Rozaqi
       </p>
       <a href="">Top</a>
     </div>
   </footer><?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/shared/footer.blade.php ENDPATH**/ ?>