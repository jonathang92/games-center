<footer></footer>
<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.1.min.js"><\/script>')</script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="/js/jquery.dataTables.js"></script>
<script src="/js/dataTables.bootstrap.js"></script>

<!-- Trumbowyg -->
<script src="/trumbowyg/trumbowyg.min.js"></script>
<script src="/trumbowyg/langs/es.min.js"></script>

<!-- Image Uploader -->
<script src="/js/imageupload.js"></script>

<script>
   $(document).ready(function() {
       $('.custom-table').dataTable();
   });
</script>


<script>
$('#text-editor').trumbowyg({
    lang: 'es',
    mobile: true,
    fixedBtnPane: true,
    fixedFullWidth: true,
    semantic: true,
    resetCss: true,
    autoAjustHeight: true,
    autogrow: true
    });
</script>

<script>$('.dropzone').html5imageupload();</script>


<script>
    $("[data-dismiss='alert']").alert();
    window.setTimeout(function() { $("[data-dismiss='alert']").alert('close'); }, 2000);
</script>
