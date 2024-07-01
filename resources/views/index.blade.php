<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href='css/style.css'>
</head>

<body>
    <!-- Sidebar Start -->
    <div class="sidebar px-2 pb-3">
        <nav class="navbar">
            <a href="#" class="navbar-brand mx-4 mb-3">
                <h3 class="text-title">iSMART</h3>
            </a>
            <div class="navbar-nav w-100">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Data dan Dokumen<br />
                        Karyawan</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="#" class="dropdown-item active">Detail Data Karyawan</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pembaharuan Data</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="#" class="dropdown-item">Sign In</a>
                        <a href="#" class="dropdown-item">Sign Up</a>
                        <a href="#" class="dropdown-item">404 Error</a>
                        <a href="#" class="dropdown-item">Blank Page</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <div class="container-fluid pt-4 px-4">
            <nav class="navbar navbar-expand-lg bg-white px-4" style="border-radius: 8px;">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acquisition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Working</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Retire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Configuration</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Navbar End -->
        <div class="container-fluid pt-4 px-4">
            <div class="row w-100" style="margin-left: 12px;">
                <div class="d-flex" style="flex-direction: row;">
                    <p style="margin: 0; font-family: Nunito; font-size: 20px; font-weight: 700; line-height: 28px; text-align: left; color: #38B2AC;">Working</p>
                    <div class="vr" style="margin-left: 11px; margin-right: 11px;"></div>
                    <nav class="br-nav" style="--bs-breadcrumb-divider: '>'; padding-bottom: 0;" aria-label="breadcrumb">
                        <ol class="breadcrumb" style="margin:0px">
                            <li class="breadcrumb-item"><a href="#">Data dan Dokumen Karyawan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Data Karyawan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
                <div class="bg-white text-center rounded" style="border: 1px solid #CBD5E0; box-shadow: 0px 0px 2px 0px #00000033; box-shadow: 0px 2px 10px 0px #0000001A;">
                    <div class="d-flex align-items-center px-3" style="margin: 0px;">
                        <p style="margin-top: 4px; margin-bottom: 4px; font-weight: 600;">Detail Data Karyawan - EBKP</p>
                    </div>
                    <hr style="margin:0px" />
                    <div class="d-flex px-3" style="margin-top: 12px;">
                        <div class="row w-50">
                            <p style="margin: 0px; text-align: start; font-weight: 600;">NIK Karyawan</p>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <!-- <div class="input-group-append">
                                  <span class="input-group-text">.00</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="d-flex px-3 pt-3">
                        <div class="row w-100">
                            <div class="col-2 d-flex justify-content-start">
                                <img src="img/user.jpg" alt="..." class="rounded-circle">
                            </div>
                            <div class="col-4 d-flex justify-content-start align-items-start"
                                style="flex-direction: column;">
                                <p>Nama/NIK</p>
                                <p style="margin: 1px">....</p>
                                <p style="margin: 1px">....</p>
                                <p style="margin: 1px">....</p>

                            </div>
                            <div class="col d-flex justify-content-start align-items-end">
                                <div class="row w-100">
                                    <div class="col-3">
                                        <button type="button" class="btn btn-primary rounded-pill m-2">Primary</button>
                                    </div>
                                    <div class="col-3">
                                        <button type="button" class="btn btn-primary rounded-pill m-2">Primary</button>

                                    </div>
                                    <div class="col">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <!-- <div class="input-group-append">
                                              <span class="input-group-text">.00</span>
                                            </div> -->
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <ul class="nav nav-underline nav-fill nav-justified px-3 " style="--bs-nav-underline-gap: 0rem;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>

                    </ul>
                    <div class="px-3">
                        <hr style="margin: 0px;" />
                    </div>
                    <div class="container-fluid p-4">

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