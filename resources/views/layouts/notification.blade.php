
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script>

  @if(session()->has('success'))
  		toastr.success("{{ session()->get('success') }}");
  @endif


  @if(session()->has('info'))
  		toastr.info("{{ session()->get('info') }}");
  @endif


  @if(session()->has('warning'))
  		toastr.warning("{{ session()->get('warning') }}");
  @endif


  @if(session()->has('error'))
  		toastr.error("{{ session()->get('error') }}");
  @endif
</script>
@endpush