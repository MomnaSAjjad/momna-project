@extends('layouts.signup')
@section('content')
  <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin online-payment d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row basic-card__row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col col-xl-8 mx-auto me-0">
                        <div class="card basic-card">
                            <div class="card-body">
                                <div class=" p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="basic-card__title">Ange kontaktuppgifter</h3>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3">
                                            <div class="col-6">
                                                <label for="inputName" class="form-label">Förnamn*</label>
                                                <input type="text" class="form-control" id="inputName" placeholder="">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputLastName" class="form-label">Efternamn*</label>
                                                <input type="text" class="form-control" id="inputLastName" placeholder="">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputEmailAddress" class="form-label">Företagsnamn*</label>
                                                <input type="email" class="form-control" id="inputEmailAddress" placeholder="">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputEmailAddress" class="form-label">Jobbmail*</label>
                                                <input type="email" class="form-control" id="inputEmailAddress" placeholder="">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputOrg" class="form-label">Org.nr / personnummer*</label>
                                                <input type="text" class="form-control" id="inputOrg" placeholder="">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputPhone" class="form-label">Telefonnummer*</label>
                                                <input type="text" class="form-control" id="inputPhone" placeholder="">
                                            </div>

                                            <div class="col-12"><h2 class="text-center text-white mt-4">Hur vill du betala</h2></div>

                                            <div class="col-12">
                                                <div class="d-flex align-items-center justify-content-center gap-5">
                                                    <div class="form-check">
                                                        <input class="form-check-input packageOptions checked" type="radio" name="monthlyPackage" id="monthly">
                                                        <label class="form-check-label" for="monthly">
                                                          Månadsvis (autogiro)
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-success">
                                                        <input class="form-check-input packageOptions" type="radio" name="yearlyPackage" id="yearly">
                                                        <label class="form-check-label" for="yearly">
                                                          Helår (faktura)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <p class="text-white note note-monthly">När du tecknar ett avtal hos Kontroll.se för månadsbetalning så gäller abonnemanget för 12 månader där Kontroll.se drar beloppet 349 kr varje månad via autogiro från ditt bankkort.</p>
                                                <p class="text-white note note-yearly d-none">När du tecknar ett avtal hos Kontroll.se och väljer helårsbetalning så gäller abonnemanget för 12 månader där vi skickar en faktura till din e-post. </p>
                                            </div>


                                            <div class="col-8">
                                                <label for="inputOrg" class="form-label">Bankkort</label>
                                                <input type="text" class="form-control" id="inputOrg" placeholder="">
                                            </div>
                                            <div class="col-2">
                                                <label for="inputPhone" class="form-label">Datum</label>
                                                <input type="text" class="form-control" id="inputPhone" placeholder="">
                                            </div>
                                            <div class="col-2">
                                                <label for="inputPhone" class="form-label">CVV2</label>
                                                <input type="text" class="form-control" id="inputPhone" placeholder="">
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex justify-content-center mt-5 mb-5">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Genom att bli kund på Kontroll.se så accepterar jag era <a href="https://kontroll.se/allmanna-villkor" target="_blank">allmänna villkor</a></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-primary basic-card__btn" disabled>BETALA NU</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-4 mx-auto ms-0">
                        <div class=" basic-card__second">
                            <div class="card-body pt-0">
                                <div class=" p-0 rounded">
                                    <div class="text-center">
                                        <h3 class="basic-card__sectitle">Fördelar när du blir kund</h3>
                                    </div>
                                    <div class="basic-card__seccontent mt-3">
                                        <!-- <p class="pt-4">Testa <b>gratis i 14 dagar</b> utan förpliktelser!</p> -->
                                        <p>Upplev vår smidiga tjänst som gör det enklare för dig att:</p>
                                        <ul class="pe-4 px-3">
                                            <li class="pb-3">Få översikt på dina avtal</li>
                                            <li class="pb-3">Ta smartare beslut för verksamheten</li>
                                            <li class="pb-3">Bli påmind om viktiga avtalsdatum</li>
                                        </ul>
                                    </div>
                                    <span class="curve-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="183" height="224" viewBox="0 0 183 224" fill="none">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M126.013 109.83L138.575 99.1826C135.012 103.466 130.786 106.982 126.013 109.83M105.705 139.643C110.03 135.03 114.472 130.61 118.236 125.576C115.43 131.509 110.692 135.729 105.705 139.643M96.8957 116.92C94.7716 115.732 95.8212 114.524 96.722 113.379C99.7659 109.508 104.272 109.217 108.583 108.979C111.725 108.806 115.013 109.022 117.915 110.651C119.022 111.272 119.726 112.068 118.121 113.037C113.737 115.682 109.118 117.669 103.947 118.041C101.484 118.218 99.0606 117.93 96.8957 116.92M115.731 124.158C113.919 127.69 111.071 130.438 108.337 133.245C96.5214 145.371 82.0475 152.976 66.1338 158.254C55.5033 161.78 44.641 164.258 33.6697 166.357C32.6689 166.549 31.649 166.704 30.8418 167.397C29.9353 168.176 29.6153 168.911 31.1822 169.203C31.5678 169.276 32.1246 169.003 31.9599 169.72C31.3933 172.19 33.2502 172.504 34.8556 172.934C37.8681 173.742 40.9334 173.183 43.9373 172.925C52.3529 172.202 60.7493 171.159 68.9363 169.024C76.5365 167.042 83.7643 163.98 90.9021 160.718C95.4457 158.642 100.039 156.467 103.568 152.972C105.912 150.65 108.881 149.395 111.2 147.148C115.645 142.84 120.026 138.501 123.436 133.286C126.242 128.993 127.781 124.297 127.802 119.165C127.808 117.473 128.448 116.248 129.725 115.264C133.165 112.611 136.531 109.839 139.832 107.045C145.204 102.501 149.829 97.1251 154.218 91.6058C161.218 82.8027 167.241 73.4174 170.893 62.6785C173.04 56.3669 174.746 50.0045 172.909 43.2731C172.425 41.5008 171.657 39.9502 169.947 39.0329C169.211 38.6368 168.531 38.5492 167.819 39.0828C166.978 39.7144 167.529 40.1308 167.849 40.8304C170.045 45.6281 168.097 50.1295 166.608 54.6158C162.504 66.9793 155.115 77.3713 146.865 87.2312C140.552 94.776 133.563 101.633 125.78 107.663C125.162 108.142 124.684 109.019 123.802 107.814C120.729 103.615 116.343 101.474 111.385 100.585C103.733 99.2118 96.4493 99.9683 90.5399 105.674C87.3642 108.739 87.1436 111.879 89.0297 115.842C93.8331 125.939 104.16 127.883 112.917 124.588C113.701 124.292 114.484 123.996 115.266 123.701C115.422 123.854 115.576 124.006 115.731 124.158" fill="#D4AA7D"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8607 163.13C16.0238 166.649 11.7988 169.573 7.00697 171.623C11.2911 168.792 15.5761 165.962 19.8607 163.13M32.799 182.454C28.1745 179.919 23.1982 178.216 18.301 176.325C17.569 176.043 16.5609 176.098 16.4613 174.916C16.3661 173.781 17.3023 173.488 17.9802 173.147C21.673 171.291 24.6142 168.454 27.845 165.974C29.8866 164.408 32.2406 163.215 34.2891 161.542C37.4421 158.965 40.7921 156.622 44.1191 154.266C45.8048 153.072 46.8587 151.141 49.0992 150.549C51.2969 149.969 51.7441 148.222 50.4021 145.171C49.7178 143.614 48.3405 142.343 46.3571 143.175C44.7261 143.86 43.1199 144.683 41.6563 145.671C31.9706 152.214 22.3379 158.834 12.6599 165.388C10.4877 166.859 8.21389 168.185 5.97114 169.551C1.89299 172.034 1.5387 173.878 4.09193 177.937C6.07401 181.088 8.8184 182.833 12.4397 183.574C19.4102 185.001 26.3403 186.627 32.9474 189.354C34.2712 189.901 35.517 190.633 36.8214 191.232C38.3311 191.927 39.0852 191.466 38.9521 189.749C38.6594 185.942 38.163 185.348 32.799 182.454" fill="#D4AA7D"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row footer-bottom">
                    <div class="col-sm-6 d-flex pt-2 justify-content-start">
                        <img class="img-fluid logo-img" src="{{URL::asset('assets/images/kontroll-logo.svg')}}" alt="Kontroll">
                    </div>
                    <div class="col-sm-6 d-flex pt-2 justify-content-end">
                       <a class="btn p-0" href="#">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.21588 0H19.7841C20.637 0 21.455 0.338815 22.0581 0.941911C22.6612 1.54501 23 2.36298 23 3.21588V19.7841C23 21.5602 21.5602 23 19.7841 23H3.21588C1.44185 22.9951 0.00494654 21.5581 0 19.7841V3.21588C0.00494654 1.44185 1.44185 0.00494654 3.21588 0ZM19.7841 21.7136C20.8465 21.7059 21.7059 20.8465 21.7136 19.7841V3.21587C21.7059 2.15343 20.8465 1.29405 19.7841 1.28634H3.21587C2.15343 1.29405 1.29405 2.15343 1.28634 3.21587V19.7841C1.29405 20.8465 2.15343 21.7059 3.21587 21.7136H19.7841Z" fill="white"></path>
                                    <path d="M4.26562 9.88938C4.26562 9.17895 4.84155 8.60303 5.55198 8.60303C6.26241 8.60303 6.83833 9.17895 6.83833 9.88938V18.2507C6.83833 18.9611 6.26241 19.537 5.55198 19.537C4.84155 19.537 4.26563 18.9611 4.26563 18.2507L4.26562 9.88938Z" fill="white"></path>
                                    <circle cx="5.55198" cy="4.73899" r="1.28635" fill="white"></circle>
                                    <path d="M18.73 13.2625V18.2536C18.73 18.964 18.1541 19.5399 17.4437 19.5399C16.7332 19.5399 16.1573 18.964 16.1573 18.2536V13.2625C16.1573 12.1152 15.2272 11.1851 14.0799 11.1851C12.9325 11.1851 12.0024 12.1152 12.0024 13.2625V18.2536C12.0024 18.964 11.4265 19.5399 10.716 19.5399C10.0056 19.5399 9.42969 18.964 9.42969 18.2536V9.89228C9.44072 9.18646 10.0102 8.61695 10.716 8.60592C11.1599 8.59377 11.5747 8.82587 11.7966 9.21051C13.2359 8.39382 15.0012 8.4051 16.43 9.24012C17.8588 10.0751 18.7351 11.6076 18.73 13.2625Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row footer-copyright">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        Copyright © 2023 <a class="text-white" href="/">Kontroll.se</a> 
                    </div>
                    <div class="col-md-6 text-center text-md-end footer-copyright__links">
                        <ul>
                            <li><a target="_blank" class="text-white" href="https://kontroll.se/allmanna-villkor/">Allmänna villkor</a></li>    
                            <li><a target="_blank" class="text-white" href="https://kontroll.se/cookies/">Cookies</a></li>    
                            <li><a target="_blank" class="text-white" href="https://kontroll.se/integritetspolicy/">Integritetspolicy</a></li>    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!--end wrapper-->
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });

            $(".packageOptions").on('click', function (event) {
                event.preventDefault();
                $('.note').removeClass('d-none');
                $('.note').hide();
                $('.packageOptions').removeClass("checked");
                var note_class = '.note-' + $(this).attr('id');
                $(this).addClass("checked");
                $(note_class).show(50);
                // if(note_class.shp)
                    // .is(':checked'))
                    // $('#test').attr('id')
                // if ($('#show_hide_password input').attr("type") == "text") {
                //     $('#show_hide_password input').attr('type', 'password');
                //     $('#show_hide_password i').addClass("bx-hide");
                //     $('#show_hide_password i').removeClass("bx-show");
                // } else if ($('#show_hide_password input').attr("type") == "password") {
                //     $('#show_hide_password input').attr('type', 'text');
                //     $('#show_hide_password i').removeClass("bx-hide");
                //     $('#show_hide_password i').addClass("bx-show");
                // }
            });
            
        });
    </script>
@endsection
