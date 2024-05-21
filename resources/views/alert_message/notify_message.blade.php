@if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div id="success-message" class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Fade in the success message slowly
        $('#success-message').fadeIn('slow');

        // Automatically hide the success message after 5 seconds (5000 milliseconds)
        setTimeout(function() {
            $('#success-message').fadeOut('slow');
        }, 8000); // 5000 milliseconds = 5 seconds
    });
</script>