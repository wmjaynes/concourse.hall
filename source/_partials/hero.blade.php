{{--<section class="container hero has-text-centered">--}}
{{--<div class="hero-body has-text-centered">--}}
{{--<p class="title has-text-black ">Concourse Hall</p>--}}
{{--<p class="subtitle has-text-black has-text-weight-bold">a place for dance events, wedding receptions, meetings, and more</p>--}}
{{--</div>--}}
{{--</section>--}}

<style>
    .hero-concourse {
        /*background-image: url('https://assets.aactmad.org/concourse/images/Nov2014_Tree_Town_Stomp_1455.jpg');*/
        background-image: url('{{ $image ?? '' }}');
        background-size: cover;
        background-position:center center;
    }
</style>

<section class="hero hero-concourse has-text-centered is-fullheight">
    <div class="hero-head">
        @include('_partials.navbar')

        <div class=" has-text-centered">
            <div class="container box-concourse has-text-centered ">
                <p class="title has-text-black">Concourse Hall</p>
                <p class="subtitle has-text-black has-text-weight-bold">a place for dance events, wedding receptions,
                    meetings, and more</p>
            </div>
        </div>

    </div>
    {{--<div class="credit">Image by <a href='http://greenhollyweddings.com' target='_blank'>Green Holly Weddings</a></div>--}}
    <div class="credit">{!! $credit ?? '' !!}</div>

</section>