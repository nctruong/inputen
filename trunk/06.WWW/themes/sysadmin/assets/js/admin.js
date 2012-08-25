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
                } else if(action=='update') {
                    var id = isCheckCids();
                    if(id) {
                        window.location.href = $(this).attr('name') + '?id=' + id;  
                    } else {
                        alert($(this).attr('title'));
                        return false;
                    }
                }else if(action=='delete') {
                    if(!isCheckCids()){
                        alert($(this).attr('title'));
                        return false;
                    } else {
                        var method = $(this).attr('name');
                        if(method) {
                            $('form[name=adminForm]').attr('action',method);
                            $('form[name=adminForm]').submit();
                        }
                    }
                } else {
                    if(!isCheckCids()){
                        alert($(this).attr('title'));
                        return false;
                    }
                //window.location.href = $(this).attr('name');
                }
            });
        }
        function initDelete() {
            
        }
        function isCheckCids(){
            var is_check = false;
            $('input[name*="cid"]').each(function(index,el){
                var chk = $(this).attr('checked');
                if(chk == 'checked'){
                    is_check = $(this).val();
                }
            });
            return is_check;
        }
        //init document event
        $(document).ready(function(){
            initToolBar();
        });
    });
}(window.jQuery)