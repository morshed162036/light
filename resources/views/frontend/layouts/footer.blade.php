  <!-- footer section start -->
  <section class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12">
          <div class="footer_1st_column">
            <div class="footer_logo">
              <img src="{{asset('images/setting/'.$company->logo)}}" class="img-fluid w-100">
            </div>
            <div class="footer_icon">
              <a href="{{ $company->facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="{{ $company->instagram }}"><i class="fa-brands fa-instagram"></i></a>
              <a href="{{ $company->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="{{ $company->youtube }}"><i class="fa-brands fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12">
          <div class="footer_2nd_column">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer_singel_part">
                  <div class="footer_singel_part_title">
                    <h5>About {{ $company->name }}</h5>
                  </div>
                  <div class="footer_singel_link">
                    <ul>
                      <li>
                        <a class="text-white" href="{{ route('about.vision') }}">Mission ,Vision, Values</a>
                      </li>
                      {{-- <li>
                        <a>Vision & Philosophy</a>
                      </li>
                      <li>
                        <a>Glenrich values</a>
                      </li> --}}
                    </ul>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Academics</h5>
                  </div>
                  <div class="footer_singel_link">
                    <ul>
                      <li>
                        <a>Carriculam overview</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              @if(App\Models\Branch::where('status','Active')->get()->all())
                @foreach (App\Models\Branch::where('status','Active')->get()->all() as $branch)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer_singel_part">
                        <div class="footer_singel_part_title">
                            <h5>{{ $branch->name }}</h5>
                        </div>
                        <div class="footer_singel_link">
                            <ul>
                            <li>
                                <p text-white>{{ $branch->address }}</p>
                            </li>
                            </ul>
                        </div>
                        <div class="footer_singel_part_title">
                            <h5>Contact Number</h5>
                            <p><a class="text-white" href="tel:{{ $branch->tnt }}">{{ $branch->tnt }}</a></p>
                        </div>
                        <div class="footer_singel_part_title">
                            <h5>Email Address</h5>
                            <p><a class="text-white" href="mailto:{{ $branch->email }}">{{ $branch->email }}</a></p>
                        </div>
                        </div>
                    </div>
                @endforeach
              @endif

              {{-- <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer_singel_part">
                  <div class="footer_singel_part_title">
                    <h5>Uttara Branch (Junior Campus)</h5>
                  </div>
                  <div class="footer_singel_link">
                    <ul>
                      <li>
                        <p text-white>Plot 4, Road 13, Sector 6, Uttara Model Town, Dhaka-1230
                        </p>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Contact Number</h5>
                    <p>(+88) 0248961087
                    </p>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Email Address</h5>
                    <p>info@uttara.glenrich.edu.bd</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer_singel_part">
                  <div class="footer_singel_part_title">
                    <h5>Uttara Branch (Senior Campus)</h5>
                  </div>
                  <div class="footer_singel_link">
                    <ul>
                      <li>
                        <p text-white>Plot ED-01, Road 1, Sector 15, Uttara Model Town, Dhaka-1230
                        </p>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Contact Number</h5>
                    <p>(+88) 09614087141
                    </p>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Email Address</h5>
                    <p>info@uttara.glenrich.edu.bd</p>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
        <div class="bottom_foter">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="copywrite_text">
                  <P>Copyright © {{ date('Y') }} {{ $company->name }}</P>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="footer_condiion">
                  {{-- <span><a>Terms & condition</a><a>privacy policy</a></span> --}}
                  <a></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
  <!-- footer section end -->
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Slick JS -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <!-- mixitup js -->
        <script src="https://cdn.jsdelivr.net/npm/mixitup/dist/mixitup.min.js"></script>
        <!-- Bootstrap JS (optional if you need Bootstrap JS functionality) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/frontend')}}/assets/js/custom.js"></script>

        <script>
            document.querySelectorAll('.menu-expand').forEach(button => {
                button.addEventListener('click', () => {
                    const submenu = button.nextElementSibling.nextElementSibling;
                    if (submenu.style.display === 'none' || submenu.style.display === '') {
                        submenu.style.display = 'block';
                        button.innerHTML = '<i class="fa fa-angle-up"></i>';
                    } else {
                        submenu.style.display = 'none';
                        button.innerHTML = '<i class="fa fa-angle-down"></i>';
                    }
                });
            });
        </script>
        <script>
            const counter = document.querySelectorAll('.countup');
            // covert to array
            const array = Array.from(counter);
            // select array element
            array.map((item) => {
                // data layer
                let counterInnerText = item.textContent;

                let count = 1;
                let speed = item.dataset.speed / counterInnerText
                function counterUp() {
                    item.textContent = count++
                    if (counterInnerText < count) {
                        clearInterval(stop);
                    }
                }
                const stop = setInterval(() => {
                    counterUp();
                }, speed);
            })
        </script>
        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Jan 5, 2030 15:37:25").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

              // Get today's date and time
              var now = new Date().getTime();

              // Find the distance between now and the count down date
              var distance = countDownDate - now;
              var zero = 00;
              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);

              // Output the result in an element with id="demo"
              document.getElementById("days").innerHTML = days ;
              document.getElementById("hours").innerHTML =  hours ;
              document.getElementById("minutes").innerHTML =  minutes ;
              document.getElementById("seconds").innerHTML = seconds ;

              // If the count down is over, write some text
              if (distance < 0) {
                clearInterval(x);
                // document.getElementById("demo").innerHTML = "EXPIRED";
                document.getElementById("days").innerHTML = zero ;
              document.getElementById("hours").innerHTML =  zero ;
              document.getElementById("minutes").innerHTML =  zero ;
              document.getElementById("seconds").innerHTML = zero ;
              }
            }, 1000);
        </script>
</body>

</html>
