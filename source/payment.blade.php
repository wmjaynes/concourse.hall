@extends('_layouts.master', ['image' => 'https://assets.aactmad.org/concourse/images/Wedding161.jpg',
'credit' => 'Image by <a href=\'http://greenhollyweddings.com\' target=\'_blank\'>Green Holly Weddings</a>'])

@section('header')


@endsection


@section('body')

    <div class="container">

        <section class="content">

            <div class="box">
                <p>Payment for Concourse Hall is most frequently made via check. However, through special arrangement
                    with the hall manager, here you may make an online payment for the rental of Concourse Hall.
                </p>
                <p><strong>Please do not use this option without first speaking with the hall manager.</strong></p>
            </div>
            <p class="box">This payment is via PayPal, but you do not need a PayPal account. You may use a credit
                card.</p>

            <div class="box has-text-centered">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick"> <input type="hidden"
                                                                              name="hosted_button_id"
                                                                              value="5PX78MT2YSU6U">


                    <div class="field">
                        <input type="hidden" name="on0" value="Information about rental"> <label class="label">Information
                            about rental</label>
                        <div class="control">
                            <input class="input" type="text" name="os0" maxlength="200" placeholder="Eg. Name, Date of rental">
                        </div>
                    </div>


                    <input type="image"
                           src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif"
                           border="0"
                           name="submit"
                           alt="PayPal - The safer, easier way to pay online!"> <img alt=""
                                                                                     border="0"
                                                                                     src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"
                                                                                     width="1"
                                                                                     height="1">
                </form>
            </div>
        </section>

    </div>



@endsection
