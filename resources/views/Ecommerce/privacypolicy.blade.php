@extends('layouts.customer')
@section('title', 'PrivacyPolicy')
@section('content')
<div class="pb-page-header">

<section class="breadcrumb-section set-bg" data-setbg="{{asset('ecommerce/img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>{{$privacy->header}}</h2>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<div class="clearfix" style="height: 20px;"></div>
<section class="blog spad">
<div class="container">
    <div class="bs-callout bs-callout">
        <p>{!! $privacy->description !!}</p>
    </div>
</div>
</section>


<script type="text/javascript">
    jQuery(function ($) {
        pb_init_sharing();
    });
</script>

<script type="text/javascript">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-41201008-3', 'prepbootstrap.com');
    ga('send', 'pageview');
</script>

<script type="text/javascript" src="/plugins/bootstrap/js/bootstrap.min.js"></script>
@endsection