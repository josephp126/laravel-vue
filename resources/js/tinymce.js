try {
    require('tinymce/tinymce');
    require('tinymce/icons/default');
    require('tinymce/themes/silver');

    $(function () {
        $('.tinymce').each(function (tmt) {
            $(tmt).tinyMCE({});
        });
    });
} catch (e) {
    console.error('tinymce', { e });
}
