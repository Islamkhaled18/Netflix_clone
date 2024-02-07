@if (session('success'))
    <script>
        new Noty({
            layout: 'topRight',
            text: "{{session('success') }}",
            killer: true,
            timeout: 2000,
            type: 'alert'
        }).show();
    </script>
@endif
