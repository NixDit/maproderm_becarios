@extends('pages.home_social')
@section('toolbar_title','Dashboard')
@section('toolbar_subtitle','Subtitle dashboard')
@section('toolbar_actions')
    @include('pages.projects.toolbar_actions')
@endsection
@section('container')

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <div xclass="d-flex flex-column flex-root">
        <div xclass="d-flex flex-row flex-column-fluid page">
            <div xclass="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <p class="d-flex flex-center">Te invitamos a seguir nuestras redes sociales para conocer todas las novedades, promociones, descuentos y regalos de MaProDerm.</p>
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-4">
                                    <!--begin::Nav Panel Widget 2-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex justify-content-between flex-column pt-4 h-100">
                                                <!--begin::Container-->
                                                <div class="pb-5">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-column flex-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
                                                            <span xclass="symbol-label">
                                                                <a href="https://www.instagram.com/maproderm/" target="_black"><img src="assets/media/redessociales/instagram.png" class="h-75 align-self-end" alt="" width="100" height="10" /></a>
                                                                {{-- <img src="assets/media/redessociales/instagram.png" class="h-75 align-self-end" alt="" width="150" height="10" /> --}}
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--end::Body-->
                                                </div>
                                                <!--eng::Container-->
                                                <!--begin::Footer-->
                                                <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
                                                    <a href="https://www.instagram.com/maproderm/" class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14" target="_black">Sígueme en Instagram</a>
                                                </div>
                                                <!--end::Footer-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Nav Panel Widget 2-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Nav Panel Widget 2-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex justify-content-between flex-column pt-4 h-100">
                                                <!--begin::Container-->
                                                <div class="pb-5">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-column flex-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
                                                            <span xclass="symbol-label">
                                                                <a href="https://www.facebook.com/maproderm" target="_black"><img src="assets/media/redessociales/facebook.png" class="h-75 align-self-end" alt="" width="100" height="10" /></a>
                                                                {{-- <img src="assets/media/redessociales/instagram.png" class="h-75 align-self-end" alt="" width="150" height="10" /> --}}
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--end::Body-->
                                                </div>
                                                <!--eng::Container-->
                                                <!--begin::Footer-->
                                                <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
                                                    <a href="https://www.facebook.com/maproderm" class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14" target="_black">Sígueme en Facebook</a>
                                                </div>
                                                <!--end::Footer-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Nav Panel Widget 2-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Nav Panel Widget 2-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex justify-content-between flex-column pt-4 h-100">
                                                <!--begin::Container-->
                                                <div class="pb-5">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-column flex-center">
                                                        <!--begin::Symbol-->
                                                        <div xclass="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
                                                            <span xclass="symbol-label">
                                                                <a href="https://twitter.com/maproderm" target="_black"><img src="assets/media/redessociales/twitter.png" class="h-75 align-self-end" alt="" width="150" height="10" /></a>
                                                                {{-- <img src="assets/media/redessociales/instagram.png" class="h-75 align-self-end" alt="" width="150" height="10" /> --}}
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--end::Body-->
                                                </div>
                                                <!--eng::Container-->
                                                <!--begin::Footer-->
                                                <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
                                                    <a href="https://twitter.com/maproderm" class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14" target="_black">Sígueme en Twitter</a>
                                                </div>
                                                <!--end::Footer-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Nav Panel Widget 2-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Nav Panel Widget 2-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex justify-content-between flex-column pt-4 h-100">
                                                <!--begin::Container-->
                                                <div class="pb-5">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-column flex-center">
                                                        <!--begin::Symbol-->
                                                        <div xclass="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
                                                            <span xclass="symbol-label">
                                                                <a href="https://www.youtube.com/channel/UCIy7szbE3PzLslOEhUJeFQA" target="_black"><img src="assets/media/redessociales/youtube.png" class="h-75 align-self-end" alt="" width="100" height="10" /></a>
                                                                {{-- <img src="assets/media/redessociales/instagram.png" class="h-75 align-self-end" alt="" width="150" height="10" /> --}}
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--end::Body-->
                                                </div>
                                                <!--eng::Container-->
                                                <!--begin::Footer-->
                                                <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
                                                    <a href="https://www.youtube.com/channel/UCIy7szbE3PzLslOEhUJeFQA" class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14" target="_black">Sígueme en YouTube</a>
                                                </div>
                                                <!--end::Footer-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Nav Panel Widget 2-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Nav Panel Widget 2-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex justify-content-between flex-column pt-4 h-100">
                                                <!--begin::Container-->
                                                <div class="pb-5">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-column flex-center">
                                                        <!--begin::Symbol-->
                                                        <div xclass="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
                                                            <span xclass="symbol-label">
                                                                <a href="https://wa.me/message/V64WQZ2OHK4LP1" target="_black"><img src="assets/media/redessociales/whatsapp.png" class="h-75 align-self-end" alt="" width="100" height="10" /></a>
                                                                {{-- <img src="assets/media/redessociales/instagram.png" class="h-75 align-self-end" alt="" width="150" height="10" /> --}}
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--end::Body-->
                                                </div>
                                                <!--eng::Container-->
                                                <!--begin::Footer-->
                                                <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
                                                    <a href="https://wa.me/message/V64WQZ2OHK4LP1" class="btn btn-success font-weight-bolder font-size-sm py-3 px-14" target="_black">Envía un mensaje</a>
                                                </div>
                                                <!--end::Footer-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Nav Panel Widget 2-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
