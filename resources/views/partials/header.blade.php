<div class="top-bar-wrapper">
    <div class="row column">
        <div class="title-bar show-for-small-only">
            <!-- <button id="hamburger" class="menu-icon" type="button" data-toggle></button> -->
            <div class="title-bar-title">
                <a href="/" data-attr-t href-t="route.root" title="至上互联">
                    <div class="top-bar__logo"></div>
                </a>
            </div>
            <a id="hamburger" class="title-bar__toggle" target="_blank" data-toggle>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>

        <div class="top-bar hide-for-small-only">
            <div class="top-bar-title">
                <a href="/" data-attr-t href-t="route.root"><div class="top-bar__logo"></div></a>
            </div>
            <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li><a href="{{ route('blog.post.index') }}" target="_blank" data-t="top-nav.features">技术博客</a></li>

                </ul>
            </div>
        </div>

    </div>
</div>

<div class="mobile-nav show-for-small-only" id="sidebar-menu">
    <ul>
        <li><a href="{{ route('blog.post.index') }}" target="_blank" data-t="top-nav.features">技术博客</a></li>
    </ul>
</div>
<div class="ui-mask"></div>