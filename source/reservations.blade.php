@extends('_layouts.master', ['image' => 'https://assets.aactmad.org/concourse/images/concourse.pat.png',
'credit' => 'Image by Pat Micks'])


@section('header')


@endsection


@section('body')


    <div class="container" id="app">

        <section >
            <p class="title">To Request a Reservation for Concourse Hall</p>
            <div class="box">
                Prices: The hall is available on <strong>weekends only</strong>, for the following periods -
                <table class="table is-narrow is-bordered has-text-left">
                    <tbody>
                    <tr>
                        <td><span class="icon"><i class="fas fa-clock"></i></span></td>
                        <td>Fri 9:00AM through Sat 5:00AM</td>
                        <td class="has-text-left">$800</td>
                    </tr>
                    <tr>
                        <td><span class="icon"><i class="fas fa-clock"></i></span></td>
                        <td>Sat 9:00AM through Sun 5:00AM</td>
                        <td>$1250</td>
                    </tr>
                    <tr>
                        <td><span class="icon"><i class="fas fa-clock"></i></span></td>
                        <td>Sun 12 noon through Mon 5:00AM</td>
                        <td>$600</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="box content">
                <p>Check the availability of Concourse Hall in the Reservation Calendar, below. If the date is
                    available, you may request a reservation for your event at Concourse Hall by
                </p>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-envelope-open"></i></span>sending email to
                        <a class="tag is-info is-medium" href="mailto:concourse@aactmad.org">concourse@aactmad.org</a>
                    </li>
                    <li><span class="fa-li"><i class="fas fa-phone-square"></i></span>leaving a voice message at <span
                                class="tag is-info is-medium">872-222-8623</span></li>
                </ul>


                <p>Please read the <a class="tag is-info is-medium"
                                      href="https://docs.google.com/document/d/1aLDOkODo8sEzIut_AA5iBUiekUQfgFQoVpYjGEz3NZg/edit?usp=sharing"
                                      target="_blank">Rental Agreement</a> ,which contains vital information, before
                    submitting a reservation request.</p>

                <p>Please include the following information in your request.</p>

                <ul class="fa-ul block">
                    <li><span class="fa-li"><i class="fas fa-pencil-alt"></i></span>Your name</li>
                    <li><span class="fa-li"><i class="fas fa-pencil-alt"></i></span>Name of group or organization</li>
                    <li><span class="fa-li"><i class="fas fa-pencil-alt"></i></span>Address</li>
                    <li><span class="fa-li"><i class="fas fa-pencil-alt"></i></span>E-mail address</li>
                    <li><span class="fa-li"><i class="fas fa-pencil-alt"></i></span>Phone number(s)</li>
                    <li><span class="fa-li"><i class="fas fa-pencil-alt"></i></span>Date(s) requested</li>
                    <li><span class="fa-li"><i class="fas fa-pencil-alt"></i></span>Type of event</li>
                </ul>
                An AACTMAD representative will contact you as soon as possible. <br/>
            </div>

            <p class="title">Reservation Calendar for Concourse Hall</p>
            <div class="box">
                <iframe
                        src="https://www.google.com/calendar/embed?showTitle=0&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=88iahcc1dldaa1rrdht7473o2s%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FNew_York"
                        style="border-width: 0; width: 100%; height: 600px;" frameborder="0"
                        scrolling="no"></iframe>
            </div>
        </section>

    </div>



@endsection
