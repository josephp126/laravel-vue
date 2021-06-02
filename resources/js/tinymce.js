try {
    const tinyMCE = require('tinymce/tinymce');
    require('tinymce/icons/default');
    require('tinymce/themes/silver');

    tinyMCE.init({
        selector: '.tinymce',
    }).then(aa => {
        console.log('first', { aa });
    });

    tinyMCE.init({
        selector: 'textarea#default',
    }).then(bb => {
        console.log('second', { bb });
    });

} catch (e) {
    console.error('tinymce', { e });
}
