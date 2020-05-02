<div class="row mb-5">
    <div class="col-md-10">
        <h6>
            I wanted to highlight that I'm open for freelance projects.
        </h6>
        <p>
            Your can find me on social media...<i id="contactMeSocialIndex" class="fa fa-hand-o-right" style="font-size: 20px"></i>
        </p>
        <p>
            Direct e-mail me on
        </p>
        <p>
            <a href="mailto:hpbandara94@gmail.com" style="color: #22313e">hpbandara94@gmail.com</a>
        </p>
        <p>
            or simply use this <i class="fa fa-hand-o-down"  style="font-size: 20px"></i>&nbsp; form to send me a message quickly.
        </p>

            <form method="post" action="{{route('contact')}}" class="row">
                {{csrf_field()}}

                    <div class="col-md-8">
                        <div class="form-group">
                            <input class="form-control contactInput" name="Yname" id="Yname" type="text" placeholder="Your Name">
                        </div>
                    </div>


                    <div class="col-md-8">
                        <div class="form-group">
                            <input class="form-control contactInput" name="email" id="email" type="email" placeholder="Enter Email">
                        </div>
                    </div>



                    <div class="col-md-8">
                        <div class="form-group">
                            <textarea style="border-radius: 10px;" class="form-control contactInput" name="message" id="message" cols="30" rows="9" placeholder="Your Message"></textarea>
                        </div>
                    </div>


                    <div class="col-md-8">
                        <div class="form-group mt-3">
                            <button type="submit" class="btn  contactInput text-white float-right"  style="border: solid 1px #ffffff;border-radius: 10px;">Send</button>
                        </div>
                    </div>
            </form>
    </div>
    <div class="col-md-2">
        <div class="row">
            <div id="contact-facebook" class="contact-social">
                <a href="https://facebook.com/harshadevapriyankarabandara">
                <img width="100%"  src="{{\Illuminate\Support\Facades\URL::asset('my_assets/images/facebook.svg')}}">
                </a>
            </div>

            <div id="contact-insta" class="contact-social">
                <a href="https://www.instagram.com/harshadeva94">
                <img width="100%"  src="{{\Illuminate\Support\Facades\URL::asset('my_assets/images/insta.svg')}}">
                </a>
            </div>

            <div id="contact-twitter" class="contact-social">
                <a href="https://twitter.com/harshadeva94">
                <img width="100%"  src="{{\Illuminate\Support\Facades\URL::asset('my_assets/images/twitter.svg')}}">
                </a>
            </div>
        </div>
    </div>
</div>
