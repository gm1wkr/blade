<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

<script>
    $(function () {
    $('[data-toggle="popover"]').popover({
        container: 'body',
        trigger: 'hover focus',
        placement: 'auto right',
    })
})

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
  </script>
