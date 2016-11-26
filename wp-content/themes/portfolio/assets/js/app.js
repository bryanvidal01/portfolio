jQuery(document).ready(function(){

    function removeVideo(){
        jQuery('iframe').remove();
    }
    jQuery('.link-video').click(function(){
        var el       = jQuery(this);
        var iframeID = el.data('iframe');
        var iframe = '<iframe src="https://player.vimeo.com/video/' + iframeID + '?title=0&byline=0&portrait=0&autoplay=1" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

        jQuery('.iframe').append(iframe);
        TweenLite.to(jQuery(".background-full .text"),0.3,{y: -30, opacity:0});
        TweenLite.to(jQuery(".background-full .category"),0.3,{y: -30, opacity:0});
        TweenLite.to(jQuery(".background-full .date"),0.3,{y: -30, opacity:0});
        TweenLite.to(jQuery(".menu"),0.3,{x:-180, delay:.3});
        TweenLite.to(jQuery(".iframe iframe"),0.3,{scale: 1, opacity: 1, delay:.5});
        TweenLite.to(jQuery(".iframe .close"),0.3,{y: 30, opacity: 1, delay:.5});
    })

    jQuery('.close').click(function(){
        TweenLite.to(jQuery(".background-full .text"),0.3,{y: 0, opacity:1});
        TweenLite.to(jQuery(".background-full .category"),0.3,{y: 0, opacity:1});
        TweenLite.to(jQuery(".background-full .date"),0.3,{y: -0, opacity:1});
        TweenLite.to(jQuery(".menu"),0.3,{x:-0, delay:0});
        TweenLite.to(jQuery(".iframe iframe"),0.3,{scale: 1.1, opacity: 0, delay:0});
        TweenLite.to(jQuery(".iframe .close"),0.3,{y: 0, opacity: 0, delay:0});

        setTimeout(function(){
            removeVideo();
        }, 1300);
    });
});
