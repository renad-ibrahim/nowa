@include('reuseParts.header')
@include('reuseParts.navbar')

@yield('content')

@include('reuseParts.sidebarRight')
@include('reuseParts.country-selector-modal')
@include('reuseParts.message-modal')
@include('reuseParts.video-modal')
@include('reuseParts.audio-modal')
@include('reuseParts.footer')