<footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">MIJ Technical Services</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 5.5.1
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<!-- toaster -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
    function displayMessage(message) {
        toastr.success(message, 'Event');
    }

    function displayError(message) {
        toastr.error(message, 'Error!');
    }
</script>
