<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3600/3600950.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Dashboard CSS -->
    <link href="{{asset('admin_assets/style.css')}}" rel="stylesheet">
</head>
<body>
    <div class="admin-container">
        @include('admin.partialviews.header')
        @include('admin.partialviews.sidebar')
        @yield('content')
        @include('admin.partialviews.footer')
    </div>
    <!-- Sweet alert js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @session('success')
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{session('success')}}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endsession
     @session('error')
        <script>
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    @endsession
    <script>
        $(document).ready(function(){
            //datatables
            $('.table').DataTable();
            //summernote
            $('.summernote').summernote();
            //display the summornote dropdown menu
            $('.dropdown-toogle').dropdown();
        })
    </script>
    <script>
        function deleteItem(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                }
            });
        }
    </script>
</body>
</html>