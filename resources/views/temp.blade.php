@foreach($questions as $question)

    DB::table('questions')->insert([
<br>
        'id' => {{ $question->id }},
<br>
        'title' => '{{ $question->title }}',
<br>
        'answer' => '{{ $question->answer }}',
<br>
        'choices' => '{{ $question->choices }}',
<br>
        'created_at' => now(),
<br>
        'updated_at' => now()
<br>
    ]);

<br>
<br>




@endforeach
