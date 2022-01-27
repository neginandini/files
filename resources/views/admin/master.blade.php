<!DOCTYPE html>
<html>
    <head>
        @include('admin.includes.head')
    </head>
    <body>
        <main>
    @include('admin.includes.header')
    <div class="row">
        <div class="col-3">
    <section>
        @include('admin.includes.sidebar')
    </section>
    </div>
    <div class="col-8">
    <section>
        @yield('content')
    </section>
    </div>
    </div>
    </main>
    @include('admin.includes.foot')
    </body>
</html>