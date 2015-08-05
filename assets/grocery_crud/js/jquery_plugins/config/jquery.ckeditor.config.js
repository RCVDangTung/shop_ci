//$(function(){
//	$( 'textarea.texteditor' ).ckeditor({toolbar:'Full'});
//	$( 'textarea.mini-texteditor' ).ckeditor({toolbar:'Basic',width:700});
//});

$(function(){
        $( 'textarea.texteditor' ).ckeditor(
                $.noop,{toolbar_Full:[['Undo', 'Redo'], 
                                      ['Bold', 'Italic', 'Underline'], 
                                      ['NumberedList', 'BulletedList'],
                                      ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock']],
                         width:700
        });
        $( 'textarea.mini-texteditor' ).ckeditor({toolbar:'Basic',width:700});
});