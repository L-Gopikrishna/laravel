<x-layout>
    <article>
        <section>
        <h1><?= $post->title; ?></h1>

        <div>{{!! $post->body !!}}</div>
        </section>
    </article>
    <a href="{{ route('posts') }}">Go back</a>
</x-layout>
