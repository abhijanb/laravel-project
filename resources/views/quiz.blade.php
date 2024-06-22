<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/quiz.css') }}">
        
</head>
<body>
    @foreach ($letters as $letter)
        <form class="quiz-form">
            <label for="marks">Marks</label>
            <span id="marks">0</span>
        
            <section>
                <label for="{{ $letter->korean }}">
                    What is the Nepali equivalent of {{ $letter->korean }}? <br>
                </label>

                @php
                    // Get the correct answer (Nepali equivalent) for the current letter
                    $correctAnswer = $letter->nepali;
                    // Generate random options excluding the correct answer
                    $randomOptions = App\Models\Letter::where('nepali', '!=', $correctAnswer)
                                                        ->inRandomOrder()
                                                        ->limit(3)
                                                        ->get();
                                                       
                    // Combine correct answer and random options
                    $options = $randomOptions->add($letter);

                    // Shuffle the combined options
                    $shuffledOptions = $options->shuffle();
                @endphp

                @foreach ($shuffledOptions as $option)
                    <input type="radio" name="{{ $letter->korean }}" id="{{ $option->id }}" value="{{ $option->nepali }}">
                    {{ $option->nepali }} <br>
                @endforeach
                <input type="hidden" name="correct_{{ $letter->korean }}" value="{{ $correctAnswer }}">
                <div class="result"></div>
            </section>
            <button type="submit">Submit</button>
        </form>
    @endforeach

    @foreach ($objects as $object)
        <form class="quiz-form">
            <section>
                <label for="{{ $object->korean }}">
                    What is the Nepali equivalent of {{ $object->korean }}? <br>
                </label>

                @php
                    // Get the correct answer (Nepali equivalent) for the current object
                    $correctAnswer = $object->nepali;
                    // Generate random options excluding the correct answer
                    $randomOptions = App\Models\Kobject::where('nepali', '!=', $correctAnswer)
                                                        ->inRandomOrder()
                                                        ->limit(3)
                                                        ->get();
                    // Combine correct answer and random options
                    $options = $randomOptions->add($object);
                    // Shuffle the combined options
                    $shuffledOptions = $options->shuffle();
                @endphp

                @foreach ($shuffledOptions as $option)
                    <input type="radio" name="{{ $object->korean }}" id="{{ $option->id }}" value="{{ $option->nepali }}">
                    {{ $option->nepali }} <br>
                @endforeach
                <input type="hidden" name="correct_{{ $object->korean }}" value="{{ $correctAnswer }}">
                <div class="result"></div>
            </section>
            <button type="submit">Submit</button>
        </form>
    @endforeach

    @foreach ($verbs as $verb)
        <form class="quiz-form">
            <section>
                <label for="{{ $verb->korean }}">
                    What is the Nepali equivalent of {{ $verb->korean }}? <br>
                </label>

                @php
                    // Get the correct answer (Nepali equivalent) for the current verb
                    $correctAnswer = $verb->nepali;
                    // Generate random options excluding the correct answer
                    $randomOptions = App\Models\Verb::where('nepali', '!=', $correctAnswer)
                                                    ->inRandomOrder()
                                                    ->limit(3)
                                                    ->get();
                    // Combine correct answer and random options
                    $options = $randomOptions->add($verb);
                    // Shuffle the combined options
                    $shuffledOptions = $options->shuffle();
                @endphp

                @foreach ($shuffledOptions as $option)
                    <input type="radio" name="{{ $verb->korean }}" id="{{ $option->id }}" value="{{ $option->nepali }}">
                    {{ $option->nepali }} <br>
                @endforeach
                <input type="hidden" name="correct_{{ $verb->korean }}" value="{{ $correctAnswer }}">
                <div class="result"></div>
            </section>
            <button type="submit">Submit</button>
        </form>
    @endforeach

    <script>
        document.querySelectorAll('.quiz-form').forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                let section = form.querySelector('section');
                let questionLabel = section.querySelector('label').innerText;
                let selectedOption = section.querySelector('input[type="radio"]:checked');
                let correctAnswer = section.querySelector('input[type="hidden"]').value;
                let resultDiv = section.querySelector('.result');
                resultDiv.innerHTML = '';  // Clear previous result

                if (selectedOption) {
                    if (selectedOption.value === correctAnswer) {
                        resultDiv.innerHTML = `<p style="color: green;">Correct</p>`;
                        marks = document.querySelector("#marks").textContent ;
                        result = +marks + 1;
                        document.querySelector("#marks").textContent = result ;
                    } else {
                        resultDiv.innerHTML = `<p style="color: red;">Wrong. The correct answer is ${correctAnswer}.</p>`;
                    }
                } else {
                    resultDiv.innerHTML = `<p style="color: orange;">No answer selected.</p>`;
                }
            });
        });
    </script>
</body>
