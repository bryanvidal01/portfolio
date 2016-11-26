jQuery(document).ready(function(){

    jQuery('.link-video').click(function(){
        var el       = jQuery(this);
        var iframeID = el.data('iframe');
        var iframe = '<iframe src="https://player.vimeo.com/video/' + iframeID + '?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'

        jQuery('')
    })
});
