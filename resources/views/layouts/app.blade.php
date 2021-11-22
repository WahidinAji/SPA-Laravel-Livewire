<!doctype html>
<html lang="en">

@include('layouts.head')

<body>
    <header>
        @include('layouts.navbar')
    </header>
    <main>
        <div class="container bg-light py-2">
            @yield('content')
            {{-- <livewire:post.index />
            <livewire:post.post-form /> --}}
        </div>
    </main>
    <footer class="footer mt-auto py-3 bg-primary">
        <div class="container">
            <div class="text-center">
                <span class="text-white">Ini Footer</span>
            </div>
        </div>
    </footer>
    @include('layouts.script')
</body>

</html>
