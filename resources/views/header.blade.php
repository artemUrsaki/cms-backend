@php
    $currentYear = 2024;
    $startYear = 1993;
    $visibleYears = 3;
    $years = range($currentYear, $startYear);
@endphp

<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-img" />
            </a>
        </div>
        <nav class="main-nav">
            <ul id="menu" class="menu">
                {{-- viditelne roky --}}
                @foreach (array_slice($years, 0, $visibleYears) as $year)
                    <li><a href="{{ url('/conference/' . $year) }}">ASD {{ $year }}</a></li>
                @endforeach

                {{-- skryte roky --}}
                @if (count($years) > $visibleYears)
                    <li class="more-menu">
                        <a href="#" onclick="toggleMore(event)">More ▼</a>
                        <ul id="more-items" class="hidden">
                            @foreach (array_slice($years, $visibleYears) as $year)
                                <li><a href="{{ url('/conference/' . $year) }}">ASD {{ $year }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</header>


<style>
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Fixovaný moderný header */
    .site-header {
        background-color: #ffffff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        padding: 15px 0;
        position: fixed; /* fixovaný hore */
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }

    
    main {
        margin-top: 100px; /* miesto pod headerom, uprav podľa výšky headeru */
        padding: 20px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo-img {
        height: 50px;
    }

    .main-nav .menu {
        list-style: none;
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .main-nav .menu li a {
        text-decoration: none;
        color: #333333;
        font-size: 16px;
        padding: 8px 12px;
        border-radius: 6px;
        transition: background-color 0.3s, color 0.3s;
    }

    .main-nav .menu li a:hover {
        background-color: #f0f0f0;
        color: #007BFF;
    }

    .more-menu {
        position: relative;
    }

    .more-menu ul {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #ffffff;
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        display: none;
        flex-direction: column;
        list-style: none;
        margin-top: 8px;
        min-width: 180px;
        padding: 10px 0;
        border-radius: 8px;
    }

    .more-menu ul li {
        margin: 0;
    }

    .more-menu ul li a {
        padding: 10px 20px;
        display: block;
        color: #333333;
    }

    .more-menu ul li a:hover {
        background-color: #f9f9f9;
        color: #007BFF;
    }

    .more-menu ul.show {
        display: flex;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            align-items: flex-start;
        }

        .main-nav .menu {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>

<script>
    function toggleMore(event) {
        event.preventDefault();
        const moreItems = document.getElementById('more-items');
        moreItems.classList.toggle('show');
    }
</script>