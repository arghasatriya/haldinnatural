
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="assets/js/froala_editor.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/align.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/image.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/link.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/table.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/video.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/url.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/entities.min.js"></script>

<script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

<script>
    $(function(){
      $('#textarea-input, #content_area').froalaEditor({theme: 'dark'});

      $('#edit3').froalaEditor({});
    });
</script>

<script src="assets/js/custom-file-input.js"></script>

 <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
</script>

 <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor2' );
</script>

 <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor3' );
</script>

 <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor4' );
</script>

 <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor5' );
</script>

 <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor6' );
</script>