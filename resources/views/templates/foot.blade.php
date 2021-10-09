    <script>var hostUrl = "assets/";</script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v='.rand()) }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js?v='.rand()) }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v='.rand()) }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('assets/js/custom/widgets.js?v='.rand()) }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js?v='.rand()) }}"></script>
    <script src="{{ asset('assets/js/custom/modals/create-app.js?v='.rand()) }}"></script>
    <script src="{{ asset('assets/js/custom/modals/upgrade-plan.js?v='.rand()) }}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>