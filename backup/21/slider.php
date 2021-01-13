<!DOCTYPE html>
<html>
<head>
	<title>Huge Gang</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/grude.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- flat icons -->
	<link rel="stylesheet" type="text/css" href="images/font/flaticon.css">
	<!-- google font family -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700|Ubuntu:400,400i,500,700&display=swap" rel="stylesheet">
	<style type="text/css">
      html {
  height: 100%;
}
/*body {
  font-family: sans-serif;
  color: #fff;
  background-image: linear-gradient(to bottom right, #5cc8ff 0%, #d63c6b 100%);
  background-repeat: no-repeat;
}
h1 {
  text-shadow: 1px 1px rgba(0, 0, 0, 0.3);
}
a {
  color: #fff;
}*/
.intro {
  text-align: center;
}
.onmove_slider {
  color: #444;
  position: relative;
  width: 100%;
  height: 300px;
  margin: 0 auto;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
}
.slider__viewport {
  position: relative;
  overflow: hidden;
  width: 100%;
  height: 100%;
  border-radius: 5px;
}
.slider__slides {
  position: relative;
  width: 100%;
  height: 100%;
  margin: 0 auto;
  padding: 0;
  list-style: none;
  font-size: 0;
  white-space: nowrap;
  line-height: 1;
  z-index: 10;
}
.slider__button {
  font-size: 2rem;
  background: none;
  border: none;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 20;
}
.slider__button--prev {
  left: 10px;
}
.slider__button--next {
  right: 10px;
}
.slide-list__item {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  transition: left 0.4s;
  background-color: #fff;
}
.slide-list__content-area {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /*padding: 20px;*/
  box-sizing: border-box;
  font-size: 1rem;
  text-align: center;
}
.slider-pager {
  position: absolute;
  text-align: center;
  width: 100%;
  bottom: -50px;
}
.slider-pager__item {
  border: none;
  border-radius: 50%;
  width: 2rem;
  line-height: 2rem;
  padding: 0;
  margin: 0 5px;
  background-color: #fff;
}
.ontouch_div{
    width: 100%;
    height: 330px;
    min-height: 370px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px 2px rgba(90, 90, 90, 0.63);
    position: relative;
    margin-top: 10px;
}
.ontouch_div img{
    width: 100%;
    height: 330px;
    object-fit: cover;
    min-height: 370px;
    border-radius: 5px;
    position: relative;
}


.like_dislike_btns_overlay{
    width: 100%;
    height: 50%;
    top: 0px;
    position: absolute;
}
.like_dislike_btns button{
    display: inline-block;
}
.like_dislike_btns button.like_ontouch_btn{
     float: left; 
    width: 115px;
    height: 60px;
    border: 4px solid #0ee41e;
    font-size: 40px;
    font-weight: 700;
    color: #0ee41e;
    border-radius: 10px;
    transform: rotate(-25deg) translate(10px, 60px);
    -webkit-transform: rotate(-25deg) translate(10px, 60px);
    -moz-transform: rotate(-25deg) translate(10px, 60px);
    -o-transform: rotate(-25deg) translate(10px, 60px);
}
.like_dislike_btns button.nope_ontouch_btn{
    
     float: right; 
    width: 115px;
    height: 60px;
    border: 4px solid #e43d0e;
    font-size: 40px;
    font-weight: 700;
    color: #e43d0e;
    border-radius: 10px;
    transform: rotate(25deg) translate(-10px, 60px);
    -webkit-transform: rotate(25deg) translate(-10px, 60px);
    -moz-transform: rotate(25deg) translate(-10px, 60px);
    -o-transform: rotate(25deg) translate(-10px, 60px);
}
.like_dislike_btns button.super_ontouch_btn {
    display: block;
    margin: 0 auto;
    width: 150px;
    height: 90px;
    border: 4px solid #0e7ce4;
    font-size: 40px;
    line-height: 37px;
    font-weight: 700;
    color: #0e7ce4;
    border-radius: 10px;
    transform: rotate(-15deg) translate(-25px, 70px);
    -webkit-transform: rotate(-15deg) translate(-25px, 70px);
    -moz-transform: rotate(-15deg) translate(-25px, 70px);
    -o-transform: rotate(-15deg) translate(-25px, 70px);
}
.ontouch_overlay_cntn {
    position: absolute;
    content: '';
    width: 100%;
    height: 50%;
    background: linear-gradient(0, #000000, rgba(255, 255, 255, 0));
    bottom: 0;
    transition: all 0.5s ease-in;
    border-radius: 5px;    
}

.course_overlay_bottom {
    width: 100%;
    position: absolute;
    bottom: 8px;
    padding: 8px;
    left: 0px;
}

.ontouch_overlay_cntn .course_overlay_bottom h1 {
    padding-bottom: 5px;
    color: #fff;
    font-size: 27px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.ontouch_overlay_cntn .course_overlay_bottom h1 span{
    color: #fff;
    font-weight: normal;
    font-size: 22px;
    vertical-align: middle;
    padding-left: 8px;
}
.ontouch_overlay_cntn .course_overlay_bottom h1 span::before{
    font-size: 13px;
    display: inline-block;
    vertical-align: middle;
    margin-top: -2px;
}
.ontouch_overlay_cntn .course_overlay_bottom p {
    width: 100%;
    color: #fff;
    font-size: 15px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    padding-top: 6px;
    line-height: 16px; 
}
.ontouch_overlay_cntn .course_overlay_bottom p span::before{
    color: #fff;
    display: inline-block;
    font-size: 15px;
    vertical-align: middle;
    padding-right: 5px;
}
.slider__slides li:nth-child(1){
  background-color: green;
}
.slider__slides li:nth-child(2){
  background-color: red;
}
.slider__slides li:nth-child(3){
  background-color: pink;
}
.slider__slides li:nth-child(4){
  background-color: blue;
}
.slider__slides li:nth-child(5){
  background-color: yellow;
}
.slider__slides li:nth-child(6){
  background-color: black;
}
.slider__slides li:nth-child(7){
  background-color: lightblue;
}
.slider__slides li:nth-child(8){
  background-color: orange;
}
  </style>
</head>
<body>


<div id="categorySlider" class="onmove_slider">
        <div class="slider__viewport">
          <ul class="slider__slides slide-list js-slide-list" style ="left: -100%"> 
            <li class="slide-list__item js-slide-list-item" data-slide-index="0">
              <div class="slide-list__content-area">
                <div class="ontouch_div mySlides" style="display: block;">
                  <img src="images/girls.jpg" style="width:100%">
                  <div class="like_dislike_btns_overlay">
                    <div class="like_dislike_btns">
                      <button class="like_ontouch_btn">Like</button>
                      <button class="nope_ontouch_btn">Nope</button>
                      <button class="super_ontouch_btn">Super Like</button>
                    </div><!--like dislike btns-->

                  </div>
                  <div class="ontouch_overlay_cntn">
                    <div class="course_overlay_bottom">
                      <h1 id="show_inner_page">Dr Priya<span>35</span><span class="flaticon-info"></span></h1>
                      <p><span class="flaticon-rugby-player-about-to-throw-a-ball"></span> post Doctoral Researcher at Tel advancement odwsjkdsm kjdsak</p>
                      <p><span class="flaticon-mortarboard"></span> University of Delhi</p>
                      <p> <span class="flaticon-home-1"></span> Lives in Delhi</p>
                      <p><span class="flaticon-maps-and-flags"></span> 1 Km Away</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="slide-list__item js-slide-list-item" data-slide-index="1">
               <div class="slide-list__content-area">
                <div class="ontouch_div mySlides" style="display: block;">
          <img src="images/girls.jpg" style="width:100%">
          <div class="like_dislike_btns_overlay">
            <div class="like_dislike_btns">
              <button class="like_ontouch_btn">Like</button>
              <button class="nope_ontouch_btn">Nope</button>
              <button class="super_ontouch_btn">Super Like</button>
            </div><!--like dislike btns-->

          </div>
          <div class="ontouch_overlay_cntn">
            <div class="course_overlay_bottom">
              <h1 id="show_inner_page">Dr Priya<span>35</span><span class="flaticon-info"></span></h1>
              <p><span class="flaticon-rugby-player-about-to-throw-a-ball"></span> post Doctoral Researcher at Tel advancement odwsjkdsm kjdsak</p>
              <p><span class="flaticon-mortarboard"></span> University of Delhi</p>
              <p> <span class="flaticon-home-1"></span> Lives in Delhi</p>
              <p><span class="flaticon-maps-and-flags"></span> 1 Km Away</p>
            </div>
          </div>
        </div>
              </div>
              <!--<img class="slide-list__image" src="http://placehold.it/600X300/666666">-->
            </li>


             
          </ul>
        </div>
        <div class="slider__controls">
          <button type="button" data-direction="prev" class="js-arrow-button slider__button slider__button--prev "><</button>
          <button type="button" data-direction="next " class="js-arrow-button slider__button slider__button--next">></button>
           <!--  <div class="slider-pager">
              <button class="slider-pager__item js-pager-item" type="button" data-slide-index="0">1</button>
              <button class="slider-pager__item js-pager-item" type="button" data-slide-index="1">2</button>
              <button class="slider-pager__item js-pager-item" type="button" data-slide-index="2">3</button>
              <button class="slider-pager__item js-pager-item" type="button" data-slide-index="3">4</button>
              <button class="slider-pager__item js-pager-item" type="button" data-slide-index="4">5</button>
              <button class="slider-pager__item js-pager-item" type="button" data-slide-index="5">6</button>
            </div> -->
        </div>
  </div>

   <script type="text/javascript">
    var Slider = function ( id ){
  this.slider = document.getElementById( id );
  this.slideList = this.slider.getElementsByClassName('js-slide-list')[0];
  this.slideListItems = this.slider.getElementsByClassName('js-slide-list-item');
  this.slideWidth = this.slideListItems[0].offsetWidth;
  this.slidesLength = this.slideListItems.length; 
  // Means we're at slide 0 (Slide 1)
  this.current = 1;
  this.direction;
  this.animating = false;
  
};

Slider.prototype = {
  constructor : Slider,
  init : function(){
    this.listenEvents();
    this.cloneFirstAndLastItem();
  },
  
  listenEvents : function(){
    var that = this;
    var arrowButtons = this.slider.getElementsByClassName('js-arrow-button');
    for (var i = 0; i < arrowButtons.length; i++) {
      arrowButtons[i].addEventListener('click', function(){
        that.clickArrowButton( this );
      });
    };
    var pagerItems = this.slider.getElementsByClassName('js-pager-item');
    for (var i = 0; i < pagerItems.length; i++){
      pagerItems[i].addEventListener('click', function(){
        that.clickPagerItem( this );
      });
    };
  },
  
  cloneFirstAndLastItem : function(){
    var firstSlide = this.slideListItems[0];
    var lastSlide = this.slideListItems[ this.slidesLength - 1 ];
    var firstSlideClone = firstSlide.cloneNode( true );
    var lastSlideClone = lastSlide.cloneNode( true );
    
    // Remove data-slide-index for pager items to choose correct target
    firstSlideClone.removeAttribute('data-slide-index');
    lastSlideClone.removeAttribute('data-slide-index');
    
    this.slideList.appendChild( firstSlideClone );
    this.slideList.insertBefore( lastSlideClone, firstSlide );
  },

  clickArrowButton : function( el ){
    var direction = el.getAttribute('data-direction');
    var pos = parseInt( this.slideList.style.left ) || 0;
    var newPos; 
    // direction will be added to current slide number
    this.direction = direction === 'prev' ? -1 : 1;
    newPos = pos + ( -1 * 100 * this.direction );
    if( !this.animating ) {
      this.slideTo(this.slideList, function( progress ){
        return Math.pow(progress, 2);
      }, pos, newPos, 500);
      // Update current slide number
      this.current += this.direction;
    }
  },
  
  clickPagerItem : function( el ){
    var slideIndex = el.getAttribute('data-slide-index');
    var targetSlide = this.slider.querySelector('.js-slide-list-item[data-slide-index="' + slideIndex +'"]');
    var pos = parseInt( this.slideList.style.left ) || 0;
    var newPos = Math.round( targetSlide.offsetLeft / targetSlide.offsetWidth ) * 100 * -1;
    
    if( !this.animating && pos !== newPos ){
      this.slideTo(this.slideList, function( progress ){
        return Math.pow(progress, 2);
      }, pos, newPos, 500);
      // Update current slide number
      this.current = parseInt(slideIndex) + 1;
    }
    
  },

  
  slideTo : function( element, deltaFunc, pos, newPos, duration ){
   this.animating = true;
   this.animate({
     delay: 20,
     duration: duration || 1000,
     deltaFunc: deltaFunc,
     step: function( delta ){
       var direction = pos > newPos ? 1 : -1
       element.style.left = pos  + Math.abs(newPos - pos) * delta * direction * -1 + '%';
       
       // PREV
       // Direction: -1
       // Pos = -600
       // newPos = 0
       // Ex: Slide 4 (0px) <- Slide 1 (-600px)
       //element.style.left = -600  + Math.abs(0 - (-600)) * 0.021 * -1 * -1+ 'px';
       
       // NEXT
       // Direction: +1
       // Pos = -600
       // newPos = -1200
       // Next: Slide 1 (-600px) -> Slide 2 (-1200px)
       //element.style.left = -600  + Math.abs( -600 - (-1200) ) * 0.021 * 1 * -1 + 'px';

     }
   }); 
  },
  
  animate : function( opts ){
    var that = this;
    var start = new Date();
    var id = setInterval(function(){
      var timePassed = new Date - start;
      var progress = timePassed / opts.duration;
      
      if( progress > 1 ) {
        progress = 1;
      }
      var delta = opts.deltaFunc( progress );
      opts.step( delta );
      
      if( progress === 1 ){
        clearInterval( id );
        that.animating = false;
        that.checkCurrentSlide();
      }
    }, opts.delay || 10 );
  },
  
  checkCurrentSlide : function( ){
    var cycle = false;
    //this.current += this.direction;
    // Are we at the cloned slides? 
    cycle = !!( this.current === 0 || this.current > this.slidesLength )
    if ( cycle ) {
      // update current in order to adapt new slide list
      // we'll use current value to relocate slide list
      this.current = ( this.current === 0 ) ? this.slidesLength : 1;
      // For 4 x 600px slides, 
      // left pos will be either -600px (first slide clone -> first slide)       // or -2400px (last slide clone -> fourth slide)
      this.slideList.style.left = ( -1 * this.current * 100 ) + '%';
    } 
    
  }
};



document.addEventListener('DOMContentLoaded', function(){
    new Slider('categorySlider').init();
})

// inspired by: https://output.jsbin.com/ufoceq/8/
   </script>  
</body>
</html>