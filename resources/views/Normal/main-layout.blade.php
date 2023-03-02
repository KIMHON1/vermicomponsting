@extends('Normal.layout')
@section('content')
@include('Normal.hero')

{{--
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="images/main.jpeg"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">Vermicomposting Worms</h3>

                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>

                            <div class="text-lg space-y-6">
                                <p>
                                Vermicompost is the product of earthworm digestion and aerobic decomposition using the activities of micro- and macroorganisms at room temperature. Vermicomposting, or worm composting, produces a rich organic soil amendment containing a diversity of plant nutrients and beneficial microorganisms.
                                </p>


                                <a
                                    href="mailto:honore.kimenyi@gmail.com"
                                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact Us</a
                                >

                                <a
                                    href="https://rodaleinstitute.org/science/articles/vermicomposting-for-beginners/"
                                    target="_blank"
                                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-globe"></i> Visit
                                    Website</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main> --}}


         <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>About Vermicomposting</h2>
            <p>Vermicomposting is a natural process whereby earthworms convert waste material with rigid structures into compost. </p>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <h3>Why vermicompost?</h3>
              <img src="images/main.jpeg" class="img-fluid rounded-4 mb-4" alt="vermicomposting worms">
              <p>Vermicompost is the product of earthworm digestion and aerobic decomposition using the activities of micro- and macroorganisms at room temperature. Vermicomposting, or worm composting, produces a rich organic soil amendment containing a diversity of plant nutrients and beneficial microorganisms.

                There are several benefits for vermicomposting but the two most popular are (1) diverting organic residuals from the landfill and reducing trash collection fees and (2) creating resources from waste materials.

                </p>
              <p>Vermicomposting can be a fun activity for school children, and vermicompost can be utilized in gardens to promote plant growth. Vermicompost can be mixed with potting media at a rate of 10% by volume or else added directly into your soil; both options will provide plants with valuable organic matter, nutrients, and a diversity of beneficial microbes.</p>
            </div>
            <div class="col-lg-6">
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                    Vermicomposting Conditions

                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> The moisture content must be maintained between 30-40%.</li>
                  <li><i class="bi bi-check-circle-fill"></i> For better results, the growth or multiplication of worms takes place between 20-30 °C.</li>
                  <li><i class="bi bi-check-circle-fill"></i> pH of the substrate would be between 6.8-7.5.</li>
                </ul>
                <p>
                    The shape or size of the containers depends upon the amount of waste to be composted and the number of earthworms which we want to culture

                    In 1m × 1m × 0.5 m high container 2000 adult earthworms can be maintained which can convert 200 kg wastes into composting material per month. In 2.23 sq. metre con­tainer 10 kg earthworms can be maintained which can convert about 1 ton waste per month. The selected container should be cleaned before use.
                </p>

                <div class="position-relative mt-4">
                  <img src="images/Vermi.jpg" class="img-fluid rounded-4" alt="vermicomposting box">

                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End About Us Section -->



@endsection
