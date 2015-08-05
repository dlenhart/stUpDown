/* 
 * Server Status ajax file
 * d.lenhart
 * 8/01/2015
 * 
 */
       
(function($){
    $(document).ready(function()
    {
        $.ajaxSetup(
        {
            cache: false,
            beforeSend: function() {
                //$('#server').hide().fadeOut("fast");
                //$('#loading').show();
            },
            complete: function() {
                //$('#loading').hide();
                $('#server').show().fadeIn("slow");
            },
            success: function() {
                //$('#loading').hide();
                $('#server').show().fadeIn("slow");
            }
        });
        var $container = $("#server");
        $container.load("php/get_server.php").fadeIn("slow");
        var refresh = setInterval(function()
        {
            $container.load('php/get_server.php').fadeIn("slow");
        }, 10000);
    });
})(jQuery);