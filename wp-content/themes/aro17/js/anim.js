
$( document ).ready(function() {

    var pgload = new TimelineMax();

    pgload.to("#slide",1,{display:"block",width:"100%"})
          .to("#logo",.4,{display:"block",opacity:1,top:"40px"})
          .to("#navi",.4,{display:"block",opacity:1,top:"40px"});

      function homeload(){

          TweenMax.to(".aro",1,{opacity:1, top:"-160px",delay:1 });
          TweenMax.to("#intro h1",.8,{opacity:1,top:0,delay:1.5});
          TweenMax.to("#intro p", .8, {opacity:1,delay:2});
      }

      $("#navi").click(function() {
          TweenMax.to("#menuslide",.6,{width:"450px"});
          TweenMax.to("#primary-menu",.6,{opacity:1,delay:.1});
          TweenMax.to("#navi-close",.5,{opacity:1, top:"12%",delay:.2});
          TweenMax.staggerFrom(".menu-item", 1.5, {left:"25px", opacity:0, delay:0.5, ease:Elastic.easeOut}, 0.2);
          $(".menu-item").hover(

            function () {
                 TweenMax.to(this,.5,{left:"30px"});
              },

              function () {
                 TweenMax.to(this,.5,{left:"0px"});
              });
         TweenMax.staggerFrom(".social-icon", 1.5, {top:"25px", opacity:0, delay:1, ease:Elastic.easeOut}, 0.2);
      })

      $("#navi-close").click(function() {
         TweenMax.to("#primary-menu",.4,{opacity:0});
         TweenMax.to("#menuslide",.6,{width:0,delay:.1});
         TweenMax.to("#navi-close",.3,{opacity:0});
      })

      $("#logo").hover(function(){
          TweenMax.to("#logo",.5,{rotation: "+=360"});
      })

      function portload(){
          TweenMax.to("#portfolioTitle h1", 1.2, {opacity:1,left:0,delay:1});
          TweenMax.to("#portfolioImg",1,{opacity:1,top:"150px",delay:1.5});
          TweenMax.to("#portfolioImgTwo",2.2,{opacity:1,top:"600px",delay:1.6});
          TweenMax.to("#portfolioTitleTwo",1,{opacity:1,left:"500px",delay:2});
        }

        if (top.location.pathname === '/aro2017/')

          {
                homeload();
          }


        if (top.location.pathname === '/aro2017/portfolio/')

          {
                portload();

                $("#portfolioItem").mouseover(function(){


                })
          }

        if (document.location.pathname.indexOf("/aro2017/works/") == 0)

        {

          $('body').addClass("removeOverflow");

          PortNext = new TimelineMax();

          PortNext.to(".blackhover",.1,{opacity:1})
                 .to("#NextPortfolioItem",.5,{width:"100%",ease: Power1.easeIn})
                 .to(".blackhover",.4,{opacity:.7})
                 .to(".next-link",.6,{opacity:1, left:"15%"});

          // Init ScrollMagic
          var controller = new ScrollMagic.Controller();

          var PortfolioNext = new ScrollMagic.Scene({
            offset: -400,
            tweenChanges:true,
            triggerElement:"#NextPortfolioItem",
            reverse:false

          })
            .setTween(PortNext)
            .addTo(controller);


          $("#NextPortfolioItem").mouseenter(function(){
              TweenMax.to(".blackhover",.7,{opacity:.4});
              TweenMax.to(".next-link",1,{left:"18%"});
          })

          $("#NextPortfolioItem").mouseleave(function(){
              TweenMax.to(".blackhover",.7,{opacity:.7});
              TweenMax.to(".next-link",1,{left:"15%"});
          })

        }

});
