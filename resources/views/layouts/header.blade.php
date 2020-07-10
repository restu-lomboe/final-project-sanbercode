<style>
    .btn-submit{
        position: relative;
        right: 40px;
    }
</style>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href=" {{ route('home') }} ">LarahubSanbercode</a>
        <div class="form-inline">
            <form class="">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="border-0 btn-submit" type="submit" style="background: none;"><i class="fas fa-search"></i></button>
              </form>
              <a href=" {{ route('login') }} " class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Login</a>
              <a href="{{ route('register') }}" class="btn btn-outline-success my-2 my-sm-0" type="submit">Register</a>
        </div>
    </nav>
</div>
