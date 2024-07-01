<div class="container-fluid pt-4 px-4">
            <div class="row w-100" style="margin-left: 12px;">
                <div class="d-flex" style="flex-direction: row;">
                    <p style="margin: 0; font-family: Nunito; font-size: 20px; font-weight: 700; line-height: 28px; text-align: left; color: #38B2AC;">Working</p>
                    <div class="vr" style="margin-left: 11px; margin-right: 11px;"></div>
                    <nav class="br-nav" style="--bs-breadcrumb-divider: '>'; padding-bottom: 0;" aria-label="breadcrumb">
                        <ol class="breadcrumb" style="margin:0px">
                            <li class="breadcrumb-item"><a href="#">@yield('breadCrumbSecond')</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('breadCrumbThird')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>