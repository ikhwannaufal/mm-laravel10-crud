<x-app-web-layout>
    <x-slot:title>
        My Laravel App
    </x-slot>
    
    <div class="py-5">
        <div class="container">   
            <h4>Welcome to Index Page</h4>
        </div>
    </div>

    <x-slot:scripts>
        <script>
            console.log('this is my script area')
        </script>
    </x-slot>

</x-app-web-layout>