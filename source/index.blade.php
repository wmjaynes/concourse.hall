@extends('_layouts.master', ['image' => 'https://assets.aactmad.org/concourse/images/Nov2014_Tree_Town_Stomp_1455.jpg',
'credit' => 'Image by Don Theyken'])

@section('header')

    <script src="{{ mix('js/slider-vanilla.js', 'assets/build') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/tiny-slider.css">
    <!--[if (lt IE 9)]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/min/tiny-slider.helper.ie8.js"></script><![endif]-->

@endsection


@section('body')

    <div class="container">

        {{--<section class="hero">--}}
            {{--<div class="hero-body has-text-centered">--}}
                {{--<p class="title has-text-black ">Concourse Hall</p>--}}
                {{--<p class="subtitle has-text-black has-text-weight-bold">a place for dance events, wedding receptions, meetings, and more</p>--}}
            {{--</div>--}}
        {{--</section>--}}

        <div class="box notification has-text-centered">
            <strong>Concourse Hall</strong> offers a spacious 3575 square foot floor suitable for dancing and
            receptions, kitchen facilites, with parking for 80 cars.<br>
            <a class="button is-info" href="https://www.dropbox.com/s/omq205te8vlbfha/Concourse%20Hall%20Flyer.pdf?dl=1"> Download a brochure
                for details</a>
        </div>

        <div class="slider-container">
            <div class="my-slider">
                {{--<tiny-slider :autoplay="true" :controls="false" :nav="true" items="1" gutter="20">--}}
                <div>
                    <figure class="image">
                        <img src="https://assets.aactmad.org/concourse/images/ConcourseDanceFloor.jpg"/>
                    </figure>
                </div>
                <div>
                    <figure class="image">
                        <img src="https://assets.aactmad.org/concourse/images/Wedding161.jpg"/>
                        <figcaption class="credit">Image by <a href='http://greenhollyweddings.com' target='_blank'>Green
                                Holly Weddings</a></figcaption>
                    </figure>
                </div>
                <div>
                    <figure class="image">
                        <img src="https://assets.aactmad.org/concourse/images/Wedding167.jpg"/>
                        <figcaption class="credit">Image by <a href='http://greenhollyweddings.com' target='_blank'>Green
                                Holly Weddings</a></figcaption>
                    </figure>
                </div>
                <div>
                    <figure class="image">
                        <img src="https://assets.aactmad.org/concourse/images/IMG_0852a-M.jpg"/>
                        <figcaption class="credit">Image by Margaret Loomis</figcaption>
                    </figure>
                </div>
                <div>
                    <figure class="image">
                        <img src="https://assets.aactmad.org/concourse/images/IMG_0908a-M.jpg"/>
                        <figcaption class="credit">Image by Margaret Loomis</figcaption>
                    </figure>
                </div>
                <div>
                    <figure class="image">
                        <img src="https://assets.aactmad.org/concourse/images/IMG_1015a-M.jpg"/>
                        <figcaption class="credit">Image by Margaret Loomis</figcaption>
                    </figure>
                </div>
                {{--</tiny-slider>--}}
            </div>
        </div>


        <div class="box is-info has-text-centered">
            <p>Located just one mile south of I-94, off of State Street</p>
            <a class="has-text-weight-bold"
               target="_blank"
               href="http://maps.google.com/maps/ms?hl=en&ie=UTF8&msa=0&ll=42.225689,-83.734446&spn=0.030889,0.027595&z=15&msid=109620252591471752608.0004874d8bd7030690079">
                4531 Concourse Drive <br>Ann Arbor, MI 48108 </a>
        </div>
    </div>



@endsection
