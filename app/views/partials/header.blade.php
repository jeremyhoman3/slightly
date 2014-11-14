<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid" style="margin: 0 5%">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="{{ url('/') }}">Slightly Used</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="{{ Request::is('/') ? 'active' : null }}">
                <a href="{{ url('/') }}">Buy</a></li>
            <li class="{{ Request::is('items/create') ? 'active' : null }}">
                <a href="{{ url('items/create') }}">Sell</a></li>
            <li class="{{ Request::is('contact') ? 'active' : null }}">
                <a href="{{ url('contact') }}">Contact</a></li>
            <!-- <li class="{{ Request::is('faq') ? 'active' : null }}">
                <a href="{{ url('faq') }}">FAQs</a></li> -->
            <!-- someday you shall have this.... <li class="{{ Request::is('sign-in') ? 'active' : null }}">
                <a href="{{ url('sign-in') }}">Sign In</a></li> -->

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>