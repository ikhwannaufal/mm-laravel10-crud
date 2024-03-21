<x-app-web-layout>
    <x-slot:title>
        Let's Start
    </x-slot>
    
    <div class="">
        <div class="mt-5 container-fluid d-flex justify-content-center align-items-center vh-50">
            <div class="card card-front bg-dark text-light">
                <div class="card-body d-flex flex-column align-items-center justify-content-between">
                    <h1 class="text-warning text-center mt-2">Welcome Big Guy!</h1>
                    <form action="{{ url('categories/create') }}" method="GET">
                        <button class="btn btn-warning btn-lg button fw-bold mb-3">Start</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-slot:scripts>
        <script>
            console.log('this is my script area')
        </script>
    </x-slot>

</x-app-web-layout>