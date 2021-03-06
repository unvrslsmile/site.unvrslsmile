//Based on the Scroller function from @sallar
// Credits to https://codepen.io/nodws/pen/ugFcC
let $content = $('header .content'),
    $blur    = $('header .overlay'),
    wHeight  = $(window).height();

$(window).on('resize', function(){
    wHeight = $(window).height();
});

window.requestAnimFrame = (function(){
    return  window.requestAnimationFrame       ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame    ||
        function( callback ){
            window.setTimeout(callback, 1000 / 60);
        };
})();

function Scroller(){
    this.latestKnownScrollY = 0;
    this.ticking            = false;
}

Scroller.prototype = {
 
    init: function() {
        window.addEventListener('scroll', this.onScroll.bind(this), false);
        $blur.css('background-image',$('header:first-of-type').css('background-image'));
    },


    onScroll: function() {
        this.latestKnownScrollY = window.scrollY;
        this.requestTick();
    },

  
    requestTick: function() {
        if( !this.ticking ) {
            window.requestAnimFrame(this.update.bind(this));
        }
        this.ticking = true;
    },

    update: function() {
        let currentScrollY = this.latestKnownScrollY;
        this.ticking       = false;
    
    
        let slowScroll = currentScrollY / 2,
            blurScroll = currentScrollY * 2,
            opaScroll = 1.4 - currentScrollY / 400;
   
        if(currentScrollY > wHeight-150){
            //$('nav').css('position','fixed');
            $('nav').addClass('c-bg-dark');
            $('nav').removeClass('c-bg-transparent-dark-black');
        }
        else{
            //$('nav').css('position','relative');
            $('nav').removeClass('c-bg-dark');
            $('nav').addClass('c-bg-transparent-dark-black');
        }
    
        $content.css({
            'transform'         : 'translateY(' + slowScroll + 'px)',
            '-moz-transform'    : 'translateY(' + slowScroll + 'px)',
            '-webkit-transform' : 'translateY(' + slowScroll + 'px)',
            'opacity' : opaScroll
        });
    
        $blur.css({
            'opacity' : blurScroll / wHeight
        });
    }
};


var scroller = new Scroller();  
scroller.init();