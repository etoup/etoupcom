@extends('layout')

@section('title')
    <title>{{ $tag->title or Settings::blogTitle() }}</title>
@stop

@section('content')
    <section class="hero fullheight">
        <div class="row align-center">
            <div class="small-12 medium-10 columns fullheight-column-align">
                <div class="row">
                    <div class="small-12 medium-5 columns align-self-middle">
                        <div class="hero-scene-intro">
                            <div class="viewport hide-for-small-only">
                                <ul class="hero-scene-text">
                                    <li>
                                        <h1 class="title" data-t="index.hero.scene.app">响应式布局，<br>适应多屏幕终端。</h1>
                                    </li>
                                    <li>
                                        <h1 class="title" data-t="index.hero.scene.transfer">微信<br>定制开发。</h1>
                                    </li>
                                    <li>
                                        <h1 class="title" data-t="index.hero.scene.offline">APP<br>定制开发。</h1>
                                    </li>
                                    <li>
                                        <h1 class="title" data-t="index.hero.scene.web">全新管理后台<br>极佳体验。</h1>
                                    </li>
                                    <li>
                                        <h1 class="title" data-t="index.hero.scene.app">响应式布局，<br>适应多屏幕终端。</h1>
                                    </li>
                                </ul>
                            </div>
                            <h1 class="show-for-small-only" data-t="index.hero.heading">轻轻松松定制开发<span class="punctuation">。</span></h1>
                            <h4 class="intro" data-t="index.hero.subheading">强大功能和极致的用户体验，<br>适用于所有联网设备和系统平台。</h4>
                            <p>
                                <a class="button cta" href="{{ route('contact') }}" data-t="index.hero.cta">联系我们</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-bg home">
            <div class="row align-right">
                <div class="small-12 medium-7 columns align-self-middle">
                    <div class="line-box-wrap">
                        <div class="line-box-viewport">
                            <div class="line-boxes">
                                <div class="box web"></div>
                                <div class="box apple-pay"></div>
                                <div class="box hongbao"></div>
                                <div class="box qr"></div>
                                <div class="box web"></div>
                                <div class="box apple-pay"></div>
                                <div class="box hongbao"></div>
                                <div class="box qr"></div>
                            </div>
                            <div class="scene-slider-wrap">
                                <div class="iphone-hand-bg"> </div>
                                <div class="device-iphone6" id="iphone6">
                                    <div class="topbar">
                                        <span class="camera"></span>
                                        <span class="speaker-before"></span>
                                        <span class="speaker"></span>
                                    </div>
                                    <span class="home"></span>
                                    <div class="screen">
                                        <div class="scene-viewport">
                                            <div class="scene-viewes">
                                                <div class="scene apple-pay"></div>
                                                <div class="scene hongbao"></div>
                                                <div class="scene qr"></div>
                                                <div class="scene web"></div>
                                                <div class="scene apple-pay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <div class="nav block-grid new-features no-border">

        <!-- <div class="row">
          <div class="columns"> -->
        <ul>
            <li class="cmb white-text">
                <a class="block-grid-link" href="{{ route('contact') }}">
                    <h5>策略</h5>
                    <span class="description">策略规划、传播策略<br>品牌创意</span>
                    <span class="anchor">了解更多</span>
                    <span class="bg"></span>
                </a>
            </li>
            <li class="api white-text">
                <a class="block-grid-link" href="{{ route('contact') }}">
                    <h5>创意</h5>
                    <span class="description">互动创意、UED设计<br>视觉形象</span>
                    <span class="anchor">联系销售</span>
                    <span class="bg"></span>
                </a>
            </li>
            <li class="nonprofits">
                <a class="block-grid-link" href="{{ route('contact') }}">
                    <h5>技术</h5>
                    <span class="description">响应式开发、微信定制开发<br>移动端定制开发</span>
                    <span class="anchor">了解更多</span>
                    <span class="bg"></span>
                </a>
            </li>
            <li class="certificate white-text">
                <a class="block-grid-link" href="{{ route('contact') }}">
                    <h5>运营</h5>
                    <span class="description">通过新媒体渠道，有效提升企业推广效益，降低营销成本</span>
                    <span class="anchor">了解更多</span>
                    <span class="bg"></span>
                </a>
            </li>
        </ul>
        <!-- </div>
      </div> -->

    </div>


    <div class="home-content">

        <section class="home-feature home-feature--text-centered" id="api">
            <div class="row">
                <div class="medium-12 columns">

                    <div class="row align-center">
                        <div class="small-11 medium-7 columns">
                            <div class="home-feature__copy">
                                <h5 data-t="index.features.api.title">至上互联</h5>
                                <h2 data-t="index.features.api.heading">灵活<span class="punctuation">、</span>强大<span class="punctuation">。</span></h2>
                                <p data-t="index.features.api.description">至上互联，一切从产品出发。秉承服务至上、用户至上的原则，用心做好产品。我们有丰富的项目研发和运维经验，保证产品高效、稳定运行。</p>
                                <p><a href="{{ route('contact') }}" class="anchor">联系我们</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="home-feature__bg api"></div>

                    <div class="row align-center">
                        <div class="medium-7 columns">
                            <div class="home-feature__stats">
                                <div class="row align-center">
                                    <div class="column shrink">
                                        <span class="large-digit">1</span>
                                        <span class="unit" data-t="index.stats.api.code.unit">次</span>
                                        <span class="content" data-t="index.stats.api.code.content">开发</span>
                                    </div>
                                    <div class="column shrink">
                                        <span class="large-digit">5</span>
                                        <span class="unit" data-t="index.stats.api.integration.unit">端</span>
                                        <span class="content" data-t="index.stats.api.integration.content">运行</span>
                                    </div>
                                    <div class="column shrink">
                                        <span class="large-digit">10</span>
                                        <span class="unit" data-t="index.stats.api.providers.unit">个</span>
                                        <span class="content" data-t="index.stats.api.providers.unit">渠道</span>
                                    </div>
                                    <div class="column shrink">
                                        <span class="large-digit">99.99</span>
                                        <span class="unit">%</span>
                                        <span class="content" data-t="index.stats.api.reliability.content">系统可用性</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row align-center">
                        <div class="medium-10 columns">
                            <div class="home-feature__iconwall" id="iconwall">
                                <div class="row small-up-2 medium-up-4">
                                    <div class="column iconwall-item">
                                        <div class="wall-icon integration"></div>
                                        <h6 data-t="index.iconwall.integration.title">一站式</h6>
                                        <p data-t="index.iconwall.integration.description">提供域名、空间、服务器、数据库、第三方接口全套解决方案。</p>
                                    </div>
                                    <div class="column iconwall-item">
                                        <div class="wall-icon reliable"></div>
                                        <h6 data-t="index.iconwall.reliable.title">稳定可靠</h6>
                                        <p data-t="index.iconwall.reliable.description">终身技术支持与安全维护，保障系统高效、稳定运行。</p>
                                    </div>
                                    <div class="column iconwall-item">
                                        <div class="wall-icon transactions"></div>
                                        <h6 data-t="index.iconwall.transactions.title">技术支持</h6>
                                        <p data-t="index.iconwall.transactions.description">协助完成相关接口注册申请，专属项目组全程负责。</p>
                                    </div>
                                    <div class="column iconwall-item">
                                        <div class="wall-icon security" ></div>
                                        <h6 data-t="index.iconwall.security.title">安全保证</h6>
                                        <p data-t="index.iconwall.security.description">国际通用加密技术，数据备份，保证数据安全。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="trigger3" class="spacer s0"></div>
        <section class="home-feature" id="providers">
            <div class="row">
                <div class="small-12 medium-7 columns">
                    <div class="home-feature__bg providers">
                        <div class="phone-1" id="phone-1">
                            <div class="stick-label order-1">
                                <h6 data-t="index.features.providers.phone1.title">APP定制</h6>
                                <p data-t="index.features.providers.phone1.content">让企业立即拥有个性化的功能展示。</p>
                            </div>
                        </div>

                        <div class="phone-2" id="phone-2">
                            <div class="stick-label order-2">
                                <h6 data-t="index.features.providers.phone2.title">微信定制</h6>
                                <p data-t="index.features.providers.phone2.content">让企业立即拥有强大品牌展示入口。</p>
                            </div>
                        </div>

                        <div class="shadow" id="phone-shadow">
                            <div class="inner"></div>
                        </div>

                    </div>
                </div>
                <div class="small-12 medium-5 columns align-self-middle">
                    <div class="row align-center">
                        <div class="small-11 medium-10 columns">
                            <div class="home-feature__copy" id="providers-copy">
                                <h5 data-t="index.features.providers.title">运营方式</h5>
                                <h2 data-t="index.features.providers.heading">给企业更多选择，<br>
                                    给您至上的服务和产品<span class="punctuation">。</span></h2>
                                <p data-t="index.features.providers.description">
                                    更多产品定制选择，
                                    满足不同企业的运营需要。
                                    结合交互式体验，突破以往信息单向传播的局限，实现双向互动。
                                    在互动过程中分析客户需求与喜好，并收集反馈信息，
                                    以推动改进产品与服务。
                                    促使客户对品牌忠诚度与美誉度的不断提升，进而形成口碑传播。
                                    有效提升企业推广效益，降低营销成本，
                                    扩大客户数量，升级营销模式。
                                </p>
                                <p><a href="{{ route('contact') }}" class="anchor" data-t="index.features.providers.link">联系我们</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            // build tween


        </script>

        <section class="home-feature" id="dashboard">
            <div class="row align-center">
                <div class="small-11 medium-10 columns">
                    <div class="row">
                        <div class="small-12 medium-5 columns small-order-2 medium-order-1">
                            <div class="home-feature__copy" id="dashboard-copy">
                                <h5 data-t="index.features.dashboard.title">管理平台</h5>
                                <h2 data-t="index.features.dashboard.heading">集中管理,<br>企业级的超能力。</h2>
                                <p data-t="index.features.dashboard.description">在简单易用的管理平台，快速概览当日的网站状况。全新UI设计，让后台管理不在枯燥不安。优良的用户体验，让后台使用更加方便。</p>
                                <p><a href="{{ route('contact') }}" class="anchor" data-t="index.features.dashboard.link">联系我们</a></p>
                            </div>
                        </div>
                        <div class="small-12 medium-7 columns small-order-1 medium-order-2">
                            <div class="home-feature__bg dashboard"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-testimonial">
            <div class="orbit" data-orbit>
                <ul class="orbit-container">
                    <li class="is-active orbit-slide">
                        <div class="slide-content">
                            <div class="row align-center">
                                <div class="small-11 medium-7 columns">
                                    <h4 data-t="index.quote.deyin">&ldquo;网站建设技术全球领先，国内首创，顺应多屏、跨屏时代的需求抓住新的互联网先机，收获财富&rdquo;</h4>
                                </div>
                            </div>
                        </div>
                        <div class="orbit-image deyin"></div>
                    </li>
                    <li class="orbit-slide">
                        <div class="slide-content">
                            <div class="row align-center">
                                <div class="small-12 medium-7 columns">
                                    <h4 data-t="index.quote.tezign">&ldquo;技术研发实力派，不断升级，让你的公司在互联网中领先同行竞争对手，云技术，安全、稳定、快速&rdquo;</h4>
                                </div>
                            </div>
                        </div>
                        <div class="orbit-image tezign"></div>
                    </li>
                    <li class="orbit-slide">
                        <div class="slide-content">
                            <div class="row align-center">
                                <div class="small-12 medium-7 columns">
                                    <h4 data-t="index.quote.jianshu">&ldquo;
                                        品牌建设，为你树立企业品牌，扩大企业影响力，提高品牌效应。全方位的推广营销，提高企业和产品的市场知名度，提高产品曝光率
                                        &rdquo;</h4>
                                </div>
                            </div>
                        </div>
                        <div class="orbit-image jianshu"></div>
                    </li>
                    <li class="orbit-slide">
                        <div class="slide-content">
                            <div class="row align-center">
                                <div class="small-12 medium-7 columns">
                                    <h4 data-t="index.quote.huwai">&ldquo;后台维护简单。快速，让你更轻松进入移动互联网，占领市场&rdquo;</h4>
                                </div>
                            </div>
                        </div>
                        <div class="orbit-image huwai"></div>
                    </li>
                </ul>
                <nav class="orbit-bullets">
                    <button class="is-active" data-slide="0"></button>
                    <button data-slide="1"></button>
                    <button data-slide="2"></button>
                    <button data-slide="3"></button>
                </nav>
            </div>
        </section>

    </div>


    <div class="nav block-grid no-border">
        <div class="row">
            <div class="medium-12 columns">
                <ul class="nav block-grid">
                    <li>
                        <a class="block-grid-link" href="{{ route('contact') }}" target="_blank">
                            <div class="nav-block-grid__icon">
                                <img src="assets/img/home-bottom-signup.svg" alt="" />
                            </div>
                            <h5 data-t="index.bottom-nav.signup.title">加入我们</h5>
                            <span class="description" data-t="index.bottom-nav.signup.description">立即联系我们，<br>即可为您提供定制服务。</span>
                            <span class="anchor" data-t="index.bottom-nav.signup.link">联系我们</span>
                        </a>
                    </li>
                    <li>
                        <a class="block-grid-link" href="{{ route('contact') }}">
                            <div class="nav-block-grid__icon">
                                <img src="assets/img/home-bottom-plans.svg" alt="" />
                            </div>
                            <h5 data-t="index.bottom-nav.plans.title">服务方案</h5>
                            <span class="description" data-t="index.bottom-nav.plans.description">根据企业需求，<br>选择适合您的服务方案。</span>
                            <span class="anchor" data-t="index.bottom-nav.plans.link">联系我们</span>
                        </a></li>
                    <li>
                        <a class="block-grid-link" href="{{ route('contact') }}">
                            <div class="nav-block-grid__icon">
                                <img src="assets/img/home-bottom-contact.svg" alt="" />
                            </div>
                            <h5 data-t="index.bottom-nav.contact.title">联系我们</h5>
                            <span class="description" data-t="index.bottom-nav.contact.description">如有疑问或定制化需求，<br>请联系至上互联服务团队。</span>
                            <span class="anchor" data-t="index.bottom-nav.contact.link">联系我们</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom-divider"><hr></div>
    <section class="bottom-cta bottom-cta--gray">
        <div class="row align-center">
            <div class="small-11 medium-10 large-9 columns">
                <h5 data-t="index.logowall.title">您的满意是至上互联始终不变的追求<span class="punctuation">。</span></h5>
                <div class="logo-wall">
                    <div class="row small-up-2 medium-up-4 large-up-4 align-middle">
                        <div class="logo-grid__column column">
                            <img src="assets/img/logo-redbook@2x.png" class="logo" alt="小红书">
                        </div>
                        <div class="logo-grid__column column">
                            <img src="assets/img/logo-vipkid@2x.png" class="logo" alt="vipkid">
                        </div>
                        <div class="logo-grid__column column">
                            <img src="assets/img/logo-niu.png" class="logo" alt="小牛">
                        </div>
                        <div class="logo-grid__column column">
                            <img src="assets/img/testimonial-logo-dingxiang@2x.png" class="logo" alt="丁香诊所">
                        </div>
                        <div class="logo-grid__column column">
                            <img src="assets/img/logo-metersbonwe.png" class="logo" alt="美特斯邦威">
                        </div>
                        <div class="logo-grid__column column">
                            <img src="assets/img/logo-fotile.png" class="logo" alt="方太">
                        </div>
                        <div class="logo-grid__column column">
                            <img src="assets/img/logo-ilovehome.png" class="logo" alt="我爱我家">
                        </div>
                        <div class="logo-grid__column column">
                            <img src="assets/img/logo-bluefocus.png" class="logo" alt="bluefocus">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
