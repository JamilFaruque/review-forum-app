@props(['msg'])
<style>
  .swal2-popup{
    font-size: 12px;
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Swal.fire({
    position: "top-end",
    icon: "success",
    text: "{{ $msg }}",
    backdrop : false,
    showConfirmButton: false,
    timer: 2000,
    width: 350,
  });
</script>