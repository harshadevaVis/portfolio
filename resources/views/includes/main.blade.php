@include('includes.header_start')
@include('includes.common_styles')

@yield('pageSpecificStyles') <!-- your custom styles goes here -->

@include('includes.header_end')

@include('includes.top_bar')

<main class="pageEffect ">
@yield('pageSpecificContent') <!-- Page content goes here -->
</main>

@include('includes.footer_start')

@include('includes.common_scripts')

@yield('pageSpecificScript') <!-- your custom scripts goes here -->

@include('includes.footer_end')
