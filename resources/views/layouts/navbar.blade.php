<nav id="top_navbar">
    <div class="container">
        <div class="nav-wrapper d-flex d-justify-between d-align-center">
            <div class="brand-name">
                <a href="/">{{setting('site.title')}}</a>
            </div>
            <button class="d-sm-grid nav-btn-mobile" type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar d-sm-none">
                {{ menu('site_main_menu') }}
            </div>
        </div>
    </div>
</nav>
