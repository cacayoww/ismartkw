<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href='css/style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Sidebar Start -->
    @include('layout.components.sidebar')
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        @include('layout.components.navbar')
        <!-- Navbar End -->
        @include('layout.components.breadcrumbs')

        <div class="container-fluid pt-4 px-4">
            <div class="bg-white text-center rounded" style="border: 1px solid #CBD5E0; box-shadow: 0px 0px 2px 0px #00000033; box-shadow: 0px 2px 10px 0px #0000001A;">
                <div class="d-flex align-items-center px-3" style="margin: 0px;">
                    <p style="margin-top: 4px; margin-bottom: 4px; font-weight: 600;">Detail Data Karyawan - EBKP</p>
                </div>
                <hr style="margin:0px" />
                <div class="d-flex px-3" style="margin-top: 12px;">
                    <div class="row w-50">
                        <label style="margin: 0px; text-align: start; font-weight: 600;">NIK Karyawan</label>
                        <div class="input-group mt-2    ">
                            <input type="text" class="form-control">
                            <!-- <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div> -->
                        </div>
                    </div>
                </div>

                @include('layout.components.profile')

                
                @include('layout.components.menu')

                <div class="container-fluid p-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <!-- Content End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>