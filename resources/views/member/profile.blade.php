@extends('layouts.master')

@section('hero')
<div style="flex: 1;"></div>
<section class="_tedx_section _tedx_section_about dashboard">
    <div style="display: inline-block;">
        <div class="_tedx_section_title_overlay dashboard">
            <div class="_tedx_section_title_wrapper">
                <div class="_tedx_section_title dashboard">
                    <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="_tedx_section_about_cta _tedx_section_dashboard_cta">
            <div>
                <p class="_tedx_link">Hello, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}!</p>
            </div>
            <div>
                <form action="{{ url('/member/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="_tedx_link" cursor-class="overlay">Logout Account</button>
                </form>
            </div>
        </div>
</section>
<div style="flex: 1;"></div>
@endsection

@section('content')
<div data-scroll-section>
    halo
</div>
@endsection

@push('scripts')
@if (session('warning'))
<script>
    Toast.fire({
        icon: 'warning',
        title: @json(session('warning'))
    })
</script>
@endif
@endpush