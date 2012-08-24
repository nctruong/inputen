!function ($) {
    $(function(){
        //init toolbar 
        function initToolBar(){
            $('#toolbar li.button a').click(function(event){
                event.preventDefault();
                var aEl = $(this);
                var action = task = aEl.attr('rel');
                if(task=='unpublish') action = 'publish';
                if(action == 'save'){
                    $('#' + $(this).attr('name')).submit();
                    return false;
                }else if(action=='cancel'){
                    window.location.href = $(this).attr('name');
                }
            });
        }
        //init document event
        $(document).ready(function(){
            initToolBar();
        });
    });
}(window.jQuery)