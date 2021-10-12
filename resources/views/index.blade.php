@include('templates.head')
<!--begin::Main-->
	<!--begin::Root-->
		@yield('root')
	<!--end::Root-->
	<!--begin::Drawers-->
		<!--begin::Activities drawer-->
			@include('templates.activities')
		<!--end::Activities drawer-->
		<!--begin::Chat drawer-->
			@include('templates.chat')
		<!--end::Chat drawer-->
		<!--begin::Exolore drawer toggle-->
			{{-- @include('templates.exolore_toggle') --}}
		<!--end::Exolore drawer toggle-->
		<!--begin::Exolore drawer-->
			@include('templates.exolore')
		<!--end::Exolore drawer-->
	<!--end::Drawers-->
	<!--begin::Modals-->
		<!--begin::Modal - Invite Friends-->
			@include('templates.modals.friends')
		<!--end::Modal - Invite Friend-->
		<!--begin::Modal - Create App-->
			@include('templates.modals.create_app')
		<!--end::Modal - Create App-->
		<!--begin::Modal - Upgrade plan-->
			@include('templates.modals.upgrade_plan')
		<!--end::Modal - Upgrade plan-->
	<!--end::Modals-->
	<!--begin::Scrolltop-->
		@include('templates.scroll_top')
	<!--end::Scrolltop-->
<!--end::Main-->
@include('templates.foot')
