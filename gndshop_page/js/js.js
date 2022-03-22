// Scroll Top hidden
$(window).scroll(() =>{
   if ($(this).scrollTop()>10)
     {
         $('#top').hide();
         $('.navbar').addClass( "changeTop");
         $(".scrollTop_button").show();
         $('.nav-link').addClass( "changeNav-link");

     }else{
         $('#top').show();
         $('.navbar').removeClass( "changeTop");
         $(".scrollTop_button").hide();
         $('.nav-link').removeClass( "changeNav-link");
     }
 });

// button scroll to top
$(".scrollTop_button").click(() =>{
   window.scrollTo({ top: 0, behavior: 'smooth'});
});
// mobile determine width
$(window).scroll( () =>{
   if (($(this).scrollTop()>=0)&&($(window).width() < 900))
     {
        $('.navbar').addClass( "changeNavMobile");
    }
});

//chi tiết sản phẩm
$(document).ready(() =>{
   var quantitiy=0;
   $('.quantity-right-plus').click((e) =>{  
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      var quantity = parseInt($('#quantity').val());
      // If is not undefined       
      $('#quantity').val(quantity + 1)
      // Increment    
   });
   
   $('.quantity-left-minus').click((e) =>{
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      var quantity = parseInt($('#quantity').val());
      // If is not undefined
      // Increment
      if(quantity>0){
         $('#quantity').val(quantity - 1);
      }
   });
//    slide ảnh sản phẩm
   $(document).ready(function(){
    $('.showprd-img').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.showprd-img__nav',
        autoplay: false,
        autoplaySpeed: 2500,
     });
     $('.showprd-img__nav').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.showprd-img',
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        prevArrow: `<button type='button' class='slick-prev slick-arrow'><ion-icon name="arrow-back-outline"></ion-icon></button>`,
        nextArrow: `<button type='button' class='slick-next slick-arrow'><ion-icon name="arrow-forward-outline"></ion-icon></button>`,

     });
  });
//  kết thúc chi tiết sp



   //page_welcome
   $('.pagewl_close').click(() =>{
      $('.page_welcome').hide();
   });

   //send_to_shop
   $('.sub').click(() =>{
      alert("Bạn đã gửi tin nhắn đến Shop!");
   });


});


 // count down timer deal 
 // Set the date we're counting down to
var countDownDate = new Date("2021,12,30").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

//typing home_animation 
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #17a2b8}";
        document.body.appendChild(css);
    };
// function check_red(){
//     var check_red = document.getElementById("detail_red");
//     check_red.addEventListener("click",function(){
//          if(check_red.checked==true){
//         alert("hllo");
//         } 
//     });
  
// }
// check_red();
$("#detail_red").click(() =>{
    if(this.checked==true){
        $(".color_detail_red").css("border","5px solid red");
        $(".color_detail_black").css("border","5px solid white");
        $(".color_detail_green").css("border","5px solid white");
    }
});
$("#detail_black").click(() =>{
    if(this.checked==true){
        $(".color_detail_black").css("border","5px solid black");
        $(".color_detail_red").css("border","5px solid white");
        $(".color_detail_green").css("border","5px solid white");
    }
});
$("#detail_green").click(() =>{
    if(this.checked==true){
        $(".color_detail_green").css("border","5px solid green");
        $(".color_detail_black").css("border","5px solid white");
        $(".color_detail_red").css("border","5px solid white");
    }
});


// cart js
var num_cart = 1;
$("#cart_after").click( ()=>{
    num_cart++;
    $("#cart_num").html(num_cart);
    $(".totalprice_cart").html(279000*num_cart);
    
});

$("#cart_prev").click(()=>{
    if(num_cart>0){
        num_cart--; 
        $("#cart_num").html(num_cart);
        $(".totalprice_cart").html(279000*num_cart);
    }    
});

//remove cart
$("#cart__remove1").click(()=>{
    $("#cart__1").remove();
})


// cart js
var num_cart2 = 1;
$("#cart_after2").click( ()=>{
    num_cart2++;
    $("#cart_num2").html(num_cart2);
    $(".totalprice_cart").html(279000*num_cart2);
    
});

$("#cart_prev2").click(()=>{
    if(num_cart2>0){
        num_cart2--; 
        $("#cart_num2").html(num_cart2);
        $(".totalprice_cart").html(279000*num_cart2);
    }    
});

//remove cart
$("#cart__remove2").click(()=>{
    $("#cart__2").remove();
});

//heart_product
$(".fa-heart-o").click(()=>{
    $(".fa-heart-o").css("color","red");
});
