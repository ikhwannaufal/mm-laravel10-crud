<x-app-web-layout>
    <x-slot:title>
        Rest Timer
    </x-slot>
    
    <div class="container text-center mt-5">
        <h1>Your rest will end in</h1>
        <!-- Display the countdown timer in an element -->
        <p id="demo" class="demo display-1 fw-bold my-5"></p>
        <a href="{{url('categories/')}}" class="btn btn-warning text-center">Back to Workout</a>
        <button onclick="toggleTimer()" id="toggleButton" class="btn btn-secondary mx-1">Pause</button>
        <button onclick="resetTimer()" class="btn btn-secondary">Reset</button>
    </div>

    <x-slot:scripts>
        <script>
            // Set the countdown duration to 2 minutes (in milliseconds)
            let countDownDuration = 2 * 60 * 1000;
            let startTime = new Date().getTime();
            // Calculate the end time by adding the countdown duration to the start time
            let endTime = startTime + countDownDuration;
            // Variable to hold the interval ID
            let x;
            let timerPaused = false; // track timer state

            // Function to update the countdown timer
            function updateCountdown() {
                let now = new Date().getTime();
                let remainingTime = endTime - now;
                let minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
                
                // Add leading zero if seconds are single-digit
                if (seconds < 10) {
                    seconds = "0" + seconds;
                }

                document.getElementById("demo").innerHTML = minutes + ":" + seconds;

                if (remainingTime < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "NEXT SET BIG GUY";
                }
            }
            // Function to start the countdown timer
            function startTimer() {
                updateCountdown();
                x = setInterval(updateCountdown, 1000)
            }
            // Function to pause the countdown timer
            function pauseTimer() {
                clearInterval(x);
            }

            // Function to toggle between pause and resume states
            function toggleTimer() {
                if (timerPaused) {
                startTimer();
                document.getElementById("toggleButton").innerText = "Pause";
                } else {
                pauseTimer();
                document.getElementById("toggleButton").innerText = "Resume";
                }
                timerPaused = !timerPaused; // Toggle the timer state
            }

            // Function to reset the countdown timer
            function resetTimer() {
                clearInterval(x);
                startTime = new Date().getTime();
                endTime = startTime + countDownDuration;
                updateCountdown();
                timerPaused = false; // Reset timer state to not paused
                document.getElementById("toggleButton").innerText = "Pause"; // Ensure button text is "Pause"
                startTimer();
            }

            // Start the countdown timer initially
            startTimer();
        </script>
    </x-slot>

</x-app-web-layout>