$(document).ready(function(){
   
    //Menu burger scripts
    $('.header__burger').click(function(event){
        $('.header__burger, .header__list1, .header__list2').toggleClass('active');
        $('body').toggleClass('lock')
    });
    
    $('.header__list1').click(function(event) {
        $('.header__burger,.header__list1').removeClass('active');
        $('body').removeClass('lock');
    });
    //Header background scripts
    $(window).scroll(function(){
        var scrollPos = $(document).scrollTop();
        if(scrollPos>0){
            $('.header').addClass('scrolled');
        }else if(scrollPos==0){
            $('.header').removeClass('scrolled');
        }
    });
    //Slider
    $('.slider').slick({
        slidesToShow:1,
        slidesToScroll:1,
        autoplay:true,
        speed:2000,
        infinite:true,
        easing:'easeOutBounce'
    });

    //Animated numbers
    
    let animated = false;
    $(window).scroll(function(){
        let numPosition = $('.numbers').position().top;
        let scrollPos = $(document).scrollTop();
        
        if(scrollPos>=numPosition-$(window).height()+100 && !animated){
            animate($('.ten1'),$('.ten2'),1,2);
            setTimeout(()=>{animate($('.unit1'),$('.unit2'),0,5);},100);

            animate($('.ten3'),$('.ten4'),1,2);
            setTimeout(()=>{animate($('.unit3'),$('.unit4'),0,5);},120);
            setTimeout(()=>{animate($('.unit5'),$('.unit6'),0,5);},90);
            setTimeout(()=>{animate($('.unit7'),$('.unit8'),0,5);},140);
            
            animate($('.ten5'),$('.ten6'),1,2);
            setTimeout(()=>{animate($('.unit9'),$('.unit10'),0,5);},120);
            setTimeout(()=>{animate($('.unit11'),$('.unit12'),0,5);},90);
            setTimeout(()=>{animate($('.unit13'),$('.unit14'),0,5);},140);
            setTimeout(()=>{animate($('.unit15'),$('.unit16'),0,5);},140);
            setTimeout(()=>{animate($('.unit17'),$('.unit18'),0,5);},140);
            animated = true;
        }
    });
    
    function animate(numb1, numb2,finalNumb,startSpeed){
        let timerSpeed = 1;
        let speed = function(){
            return timerSpeed;
        };
        let p1 = -50;
        let p2 = -100;
        let count= 0;
        let endRun = false;
        function roll(){
            if(p1<=50){
                p1+=startSpeed;
                numb1.css({top:p1});
                if(p1 == 0 && endRun){
                    p2 = -50;
                numb2.css({top:p2});
                    clearInterval(timer);
                    return;
                }
            }else{
                count++;
                numb1.text(Math.floor(Math.random() * 10)) ;
                p1 = -50;
                numb1.css({top:p1});
                if(count == 10) {
                    numb1.text(finalNumb);
                    endRun = true;
                }
            }

            if(p2<=50){
                p2+=startSpeed;
                numb2.css({top:p2});
            }else{
                numb2.text(Math.floor(Math.random() * 10)) ;
                p2 = -50;
                numb2.css({top:p2});
            }
        if(count >2){
            timerSpeed = count;
            clearInterval(timer);
            timer = setInterval(roll,speed());
        }
        if(count>7 && startSpeed >3){
            startSpeed = 3;
        }
        if(count>8 && startSpeed>2){
            startSpeed = 2;
        }
        if(count>9){
            startSpeed = 1;
        }
        
        }  
        let timer = setInterval(roll,speed());



      
    }
    //Panels
    
    $('.panel__open1').click((e)=>{
        e.preventDefault();
        $('.panel__heading1, .panel__content1, .panel__open1').toggleClass('maximized');
        $('.panel__content1').slideToggle({duration:300,easing:"linear"});
    });
    $('.panel__open2').click((e)=>{
        e.preventDefault();
        $('.panel__heading2, .panel__content2, .panel__open2').toggleClass('maximized');
        $('.panel__content2').slideToggle(300);
    });
    $('.panel__open3').click((e)=>{
        e.preventDefault();
        $('.panel__heading3, .panel__content3, .panel__open3').toggleClass('maximized');
        $('.panel__content3').slideToggle(300);
    });

    //Proggress bars
    let progressed = false;
    function runProgress(progressBar,percent){
        progressBar.css({width:`${percent}%`});
    }
    $(window).scroll(function(){
        let progressPosition = $('.faq-achievement').position().top;
        let scrollPos = $(document).scrollTop();
        
        if(scrollPos>=progressPosition-$(window).height()+500 && !progressed){
            runProgress($('.prog1'),$('.percent1').html());
            setTimeout(()=>{runProgress($('.prog2'),$('.percent2').html());},200);
            
            setTimeout(()=>{runProgress($('.prog3'),$('.percent3').html());},120);
           
            progressed = true;
        }
    });
    
    
    

});
