@extends('layouts.dashboard')

@section('content')

<style>
    /* --- Page Header Styles --- */
    .page-header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }
    
    .page-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #000;
        margin-bottom: 5px;
    }
    
    .text-imip { color: #005f47; } /* IMIP Green */
    .page-subtitle { color: #666; font-size: 0.95rem; margin: 0; }

    /* --- News Card Styles --- */
    .news-card {
        border: none;
        border-radius: 12px; /* Smooth corners like the form */
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
        background-color: white;
        margin-bottom: 30px;
    }

    /* Green Header Section */
    .news-card-header {
        background-color: #005f47; /* The exact Dark Green */
        padding: 30px 40px;
        color: white;
    }

    .news-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0;
    }

    /* The thin divider line */
    .news-divider {
        border-top: 1px solid rgba(255, 255, 255, 0.3);
        margin: 15px 0;
    }

    .news-meta {
        font-size: 0.85rem;
        opacity: 0.9;
        font-weight: 300;
    }

    /* White Body Section */
    .news-card-body {
        padding: 40px; /* Spacious padding */
        background-color: white;
    }

    .article-text {
        text-align: justify; /* Justify text as requested */
        line-height: 1.8;
        color: #212529;
        font-size: 1rem;
    }
    
    .article-text p { margin-bottom: 1.5rem; }
</style>

{{-- 1. Header Section --}}
<div class="page-header-container">
    <div>
        <h1 class="page-title">Info <span class="text-imip">Rekrutmen</span></h1>
        <p class="page-subtitle">Informasi-informasi seputar proses rekrutmen</p>
    </div>
    
    {{-- Illustration (SVG to match the desk image) --}}
    <div class="d-none d-md-block">
        <svg width="120" height="70" viewBox="0 0 120 70" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="90" cy="35" r="30" fill="#e8f5e9" />
            <rect x="60" y="25" width="50" height="30" rx="4" fill="#005f47" />
            <circle cx="110" cy="20" r="6" fill="#4db6ac" stroke="white" stroke-width="2"/>
            <rect x="40" y="55" width="20" height="4" rx="2" fill="#b2dfdb" />
        </svg>
    </div>
</div>

{{-- 2. News Content Card --}}
<div class="news-card">
    
    {{-- Green Header Part --}}
    <div class="news-card-header">
        <h2 class="news-title">Sertifikat Vaksin Covid-19</h2>
        
        <div class="news-divider"></div>
        
        <div class="news-meta">
            Publish : 02 Dec 2021 &nbsp;&nbsp;|&nbsp;&nbsp; Oleh : Tim Rekrutmen PT IMIP
        </div>
    </div>

    {{-- White Body Part --}}
    <div class="news-card-body">
        <div class="article-text">
            <p>
                Corem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
            </p>
            <p>
                Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut vulputate nisi. Integer in felis sed leo vestibulum venenatis. Suspendisse quis arcu sem. Aenean feugiat ex eu vestibulum vestibulum. Morbi a eleifend magna. Nam metus lacus, porttitor eu mauris a, blandit ultrices nibh. Mauris sit amet magna non ligula vestibulum eleifend. Nulla varius volutpat turpis sed lacinia. Nam eget mi in purus lobortis eleifend. Sed nec ante dictum sem condimentum ullamcorper.
            </p>
        </div>
    </div>
</div>

@endsection