@extends('layout')

@section('title')
    <title>联系我们 | 至上互联</title>
@stop

@section('content')
    <section class="hero" id="hero">
        <div class="row">
            <div class="small-12 columns">
                <div class="hero-copy">
                    <h1>联系我们</h1>

                    <h4>地址：武汉市硚口区古田二路汇丰企业天地电子商务总部大楼（丰隆楼）一层</h4>
                    <h4>业务咨询专线：400-998-1715</h4>
                </div>
                <form data-abide novalidate id="contact">
                    <div class="contact-form-container row align-center">
                        <div class="small-11 medium-8 large-7 columns">
                            <div class="row">
                                <div class="small-12 medium-6 large-6 columns">
                                    <label>姓名</label>
                                    <input type="text" id="name" name="name" required/>
                                </div>
                                <div class="small-12 medium-6 large-6 columns">
                                    <label>手机号码</label>
                                    <input type="text" id="phone" name="phone" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 medium-6 large-6 columns">
                                    <label>电子邮件地址</label>
                                    <input type="text" id="from" name="customer_email" required pattern="email"/>
                                </div>
                                <div class="small-12 medium-6 large-6 columns">
                                    <label>所在公司名称或网址</label>
                                    <input type="text" id="companyname" name="name_or_site" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="columns">
                                    <label>描述</label>
                                    <textarea style="min-height: 6em;" placeholder="告诉我们如何为你提供帮助" id="description" name="description" required></textarea>
                                </div>
                            </div>
                            <div class="row align-right">
                                <div class="columns shrink">
                                    <button class="medium button alt" id="submit">发送</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="contact-address-container row align-center">

                </div>
            </div>
        </div>
    </section>
@stop

