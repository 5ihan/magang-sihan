  <!-- MENU -->
  <section class="navbar custom-navbar navbar-fixed-top" role="navigation"  data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="#" class="navbar-brand">Car Dealer Website</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('user.index')}}">Home</a></li>
                <li class="{{ request()->is('cars') ? 'active' : '' }}"><a href="{{  route('user.cars') }}">Cars</a></li>
                <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('user.about') }}">About Us</a></li>
                <li class="{{ request()->is('contactus') ? 'active' : '' }}"><a href="{{ route('user.contactus') }}">Contact</a></li>

            </ul>
        </div>

    </div>
</section>
