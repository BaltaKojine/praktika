  <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/praktika/public/">
                Paspirtukai
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/praktika/public/">Pagrindinis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('paspirtukai.index') }}">Paspirtukai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('elpaspirtukai.index') }}">El.paspirtukai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('krepselis.index') }}">Krepselis</a>
          </li>
        </ul>
                </div>
            </div>
        </nav>
