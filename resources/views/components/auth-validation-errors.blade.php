@props(['errors'])

@if ($errors->any())

    <script>
        $(document).ready(function () {
            // Fade In / Fade Out
            toastr.error('@foreach ($errors->all() as $error){{ $error }}@endforeach'
                ,'¡ ¡ Atencion ! !', 
            { "showMethod": "fadeIn", "hideMethod": "fadeOut", timeOut: 4500 });           
            
        });
    </script>
@endif
